<?php
/**
 * Bamenda City Council E-Governance Platform
 * SQLite Database Connection Manager
 * Drop-in replacement for MySQLi with SQLite backend
 */

class SQLiteDatabase {
    private static $instance = null;
    private $connection;
    private $config;
    private $db_path;
    
    public function __construct() {
        $this->config = require __DIR__ . '/../app/config.php';
        $this->connect();
    }
    
    /**
     * Get database instance (Singleton pattern)
     */
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    
    /**
     * Establish SQLite database connection
     */
    private function connect() {
        try {
            // Determine database path
            $db_dir = __DIR__ . '/../../data';
            
            // Create data directory if it doesn't exist
            if (!is_dir($db_dir)) {
                mkdir($db_dir, 0755, true);
            }
            
            $db_name = $this->config['database']['name'] ?? 'bamenda_council_db';
            $this->db_path = $db_dir . '/' . $db_name . '.db';
            
            // Open SQLite connection
            $this->connection = new PDO('sqlite:' . $this->db_path);
            
            if (!$this->connection) {
                throw new Exception("Failed to connect to SQLite database");
            }
            
            // Set error mode to exceptions
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            // Enable foreign keys
            $this->connection->exec('PRAGMA foreign_keys = ON');
            
            // Set journal mode to WAL for better concurrency
            $this->connection->exec('PRAGMA journal_mode = WAL');
            
        } catch (Exception $e) {
            error_log("Database connection failed: " . $e->getMessage());
            throw $e;
        }
    }
    
    /**
     * Get database connection (PDO)
     */
    public function getConnection() {
        return $this->connection;
    }
    
    /**
     * Get database path
     */
    public function getDbPath() {
        return $this->db_path;
    }
    
    /**
     * Prepare a statement
     */
    public function prepare($sql) {
        try {
            return $this->connection->prepare($sql);
        } catch (PDOException $e) {
            error_log("Prepare failed: " . $e->getMessage());
            throw new Exception("Query prepare failed: " . $e->getMessage());
        }
    }
    
    /**
     * Execute a query
     */
    public function query($sql) {
        try {
            return $this->connection->query($sql);
        } catch (PDOException $e) {
            error_log("Query failed: " . $e->getMessage());
            throw new Exception("Query execution failed: " . $e->getMessage());
        }
    }
    
    /**
     * Begin transaction
     */
    public function beginTransaction() {
        try {
            return $this->connection->beginTransaction();
        } catch (PDOException $e) {
            error_log("Begin transaction failed: " . $e->getMessage());
            return false;
        }
    }
    
    /**
     * Commit transaction
     */
    public function commit() {
        try {
            return $this->connection->commit();
        } catch (PDOException $e) {
            error_log("Commit failed: " . $e->getMessage());
            return false;
        }
    }
    
    /**
     * Rollback transaction
     */
    public function rollback() {
        try {
            return $this->connection->rollback();
        } catch (PDOException $e) {
            error_log("Rollback failed: " . $e->getMessage());
            return false;
        }
    }
    
    /**
     * Get last insert ID
     */
    public function lastInsertId() {
        return $this->connection->lastInsertId();
    }
    
    /**
     * Check if table exists
     */
    public function tableExists($tableName) {
        try {
            $stmt = $this->connection->prepare(
                "SELECT name FROM sqlite_master WHERE type='table' AND name=?"
            );
            $stmt->execute([$tableName]);
            return $stmt->rowCount() > 0;
        } catch (PDOException $e) {
            error_log("Table check failed: " . $e->getMessage());
            return false;
        }
    }
    
    /**
     * Get table schema
     */
    public function getTableSchema($tableName) {
        try {
            $stmt = $this->connection->prepare("PRAGMA table_info($tableName)");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("Schema check failed: " . $e->getMessage());
            return [];
        }
    }
    
    /**
     * Create table if not exists
     */
    public function createTableIfNotExists($tableName, $schema) {
        try {
            if (!$this->tableExists($tableName)) {
                $this->connection->exec($schema);
                return true;
            }
            return false;
        } catch (PDOException $e) {
            error_log("Create table failed: " . $e->getMessage());
            return false;
        }
    }
    
    /**
     * Backup database
     */
    public function backup($backupPath) {
        try {
            if (!is_dir($backupPath)) {
                mkdir($backupPath, 0755, true);
            }
            
            $filename = $backupPath . '/backup_' . date('Y_m_d_H_i_s') . '.db';
            copy($this->db_path, $filename);
            return $filename;
        } catch (Exception $e) {
            error_log("Backup failed: " . $e->getMessage());
            return false;
        }
    }
    
    /**
     * Close connection
     */
    public function close() {
        $this->connection = null;
    }
}

/**
 * Compatibility wrapper for MySQLi-style prepared statements
 * Converts PDO to MySQLi-like interface
 */
class SQLitePreparedStatement {
    private $stmt;
    private $result;
    private $params = [];
    private $types = '';
    
    public function __construct($stmt) {
        $this->stmt = $stmt;
    }
    
    /**
     * Bind parameters (MySQLi compatibility)
     */
    public function bind_param($types, &...$params) {
        $this->types = $types;
        $this->params = $params;
        return true;
    }
    
    /**
     * Execute statement
     */
    public function execute() {
        try {
            if (!empty($this->params)) {
                return $this->stmt->execute($this->params);
            }
            return $this->stmt->execute();
        } catch (PDOException $e) {
            error_log("Execute failed: " . $e->getMessage());
            throw new Exception("Query execution failed");
        }
    }
    
    /**
     * Get result set
     */
    public function get_result() {
        return new SQLiteResult($this->stmt);
    }
    
    /**
     * Get error message
     */
    public function error() {
        return $this->stmt->errorInfo()[2] ?? '';
    }
    
    /**
     * Get number of affected rows
     */
    public function affected_rows() {
        return $this->stmt->rowCount();
    }
}

/**
 * SQLite Result wrapper for MySQLi compatibility
 */
class SQLiteResult {
    private $stmt;
    private $data = [];
    private $position = 0;
    
    public function __construct($stmt) {
        $this->stmt = $stmt;
        try {
            $this->data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("Fetch failed: " . $e->getMessage());
        }
    }
    
    /**
     * Fetch associative array
     */
    public function fetch_assoc() {
        if ($this->position < count($this->data)) {
            return $this->data[$this->position++];
        }
        return null;
    }
    
    /**
     * Fetch all results
     */
    public function fetch_all($type = MYSQLI_ASSOC) {
        return $this->data;
    }
    
    /**
     * Get number of rows
     */
    public function num_rows() {
        return count($this->data);
    }
    
    /**
     * Get field count
     */
    public function field_count() {
        return count($this->data[0] ?? []);
    }
    
    /**
     * Reset pointer
     */
    public function reset() {
        $this->position = 0;
    }
}

// Wrapper to maintain MySQLi compatibility
class SQLiteDatabaseWrapper {
    private $db;
    
    public function __construct() {
        $this->db = new SQLiteDatabase();
    }
    
    /**
     * Get singleton instance
     */
    public static function getInstance() {
        static $instance;
        if (!isset($instance)) {
            $instance = new self();
        }
        return $instance;
    }
    
    /**
     * Prepare statement with MySQLi-like interface
     */
    public function prepare($sql) {
        $stmt = $this->db->prepare($sql);
        return new SQLitePreparedStatement($stmt);
    }
    
    /**
     * Direct query execution
     */
    public function query($sql) {
        return $this->db->query($sql);
    }
    
    /**
     * Get connection
     */
    public function getConnection() {
        return $this->db->getConnection();
    }
    
    /**
     * Begin transaction
     */
    public function beginTransaction() {
        return $this->db->beginTransaction();
    }
    
    /**
     * Commit transaction
     */
    public function commit() {
        return $this->db->commit();
    }
    
    /**
     * Rollback transaction
     */
    public function rollback() {
        return $this->db->rollback();
    }
    
    /**
     * Get last insert ID
     */
    public function lastInsertId() {
        return $this->db->lastInsertId();
    }
    
    /**
     * Check table exists
     */
    public function tableExists($table) {
        return $this->db->tableExists($table);
    }
    
    /**
     * Get table schema
     */
    public function getTableSchema($table) {
        return $this->db->getTableSchema($table);
    }
    
    /**
     * Backup database
     */
    public function backup($path) {
        return $this->db->backup($path);
    }
}

// Export for use
// Replace: use Database or use SQLiteDatabase
?>
