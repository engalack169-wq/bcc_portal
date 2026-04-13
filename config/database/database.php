<?php
/**
 * Bamenda City Council E-Governance Platform
 * Database Configuration and Connection
 * Supports both MySQL and SQLite
 */

// Determine which database driver to use
$db_driver = getenv('DB_DRIVER') ?: 'sqlite'; // Default to SQLite

if ($db_driver === 'sqlite') {
    require_once __DIR__ . '/sqlite-database.php';
    class Database extends SQLiteDatabaseWrapper {
        // Uses SQLite
    }
} else {
    // Original MySQL implementation
    class Database {
        private static $instance = null;
        private $connection;
        private $config;
        
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
         * Establish database connection using MySQLi
         */
        private function connect() {
            try {
                $this->connection = new mysqli(
                    $this->config['database']['host'],
                    $this->config['database']['user'],
                    $this->config['database']['pass'],
                    $this->config['database']['name']
                );
                
                if ($this->connection->connect_error) {
                    throw new Exception("Connection failed: " . $this->connection->connect_error);
                }
                
                // Set charset
                $this->connection->set_charset($this->config['database']['charset']);
                
            } catch (Exception $e) {
                error_log("Database connection failed: " . $e->getMessage());
                throw $e;
            }
        }
        
        /**
         * Get database connection
         */
        public function getConnection() {
            return $this->connection;
        }
        
        /**
         * Begin transaction
         */
        public function beginTransaction() {
            return $this->connection->begin_transaction();
        }
        
        /**
         * Commit transaction
         */
        public function commit() {
            return $this->connection->commit();
        }
        
        /**
         * Rollback transaction
         */
        public function rollback() {
            return $this->connection->rollback();
        }
        
        /**
         * Execute query with prepared statements
         */
        public function query($sql, $params = []) {
            try {
                $stmt = $this->connection->prepare($sql);
                
                // Bind parameters if any
                if (!empty($params)) {
                    $types = '';
                    $bind_params = [];
                    foreach ($params as $param) {
                        if (is_int($param)) {
                            $types .= 'i';
                        } elseif (is_float($param)) {
                            $types .= 'd';
                        } else {
                            $types .= 's';
                        }
                        $bind_params[] = $param;
                    }
                    
                    $stmt->bind_param($types, ...$bind_params);
                }
                
                $stmt->execute();
                return $stmt;
            } catch (Exception $e) {
                error_log("Query failed: " . $e->getMessage());
                
                if ($this->config['app']['debug']) {
                    throw new Exception("Query failed: " . $e->getMessage());
                } else {
                    throw new Exception("Database error occurred.");
                }
            }
        }
        
        /**
         * Get last inserted ID
         */
        public function lastInsertId() {
            return $this->connection->insert_id;
        }
        
        /**
         * Check if table exists
         */
        public function tableExists($tableName) {
            $result = $this->connection->query("SHOW TABLES LIKE '" . $this->connection->real_escape_string($tableName) . "'");
            return $result && $result->num_rows > 0;
        }
        
        /**
         * Get table schema
         */
        public function getTableSchema($tableName) {
            $result = $this->connection->query("DESCRIBE `" . $this->connection->real_escape_string($tableName) . "`");
            $schema = [];
            if ($result) {
                while ($row = $result->fetch_assoc()) {
                    $schema[] = $row;
                }
            }
            return $schema;
        }
        
        /**
         * Create table if not exists
         */
        public function createTableIfNotExists($tableName, $schema) {
            if (!$this->tableExists($tableName)) {
                $this->query($schema);
                return true;
            }
            return false;
        }
        
        /**
         * Backup database
         */
        public function backup($backupPath) {
            try {
                $host = $this->config['database']['host'];
                $user = $this->config['database']['user'];
                $pass = $this->config['database']['pass'];
                $name = $this->config['database']['name'];
                
                $filename = $backupPath . '/backup_' . date('Y_m_d_H_i_s') . '.sql';
                
                $command = "mysqldump --host={$host} --user={$user} --password={$pass} {$name} > {$filename}";
                
                exec($command, $output, $returnCode);
                
                if ($returnCode === 0) {
                    return $filename;
                } else {
                    throw new Exception("Backup failed: " . implode("\n", $output));
                }
                
            } catch (Exception $e) {
                error_log("Backup error: " . $e->getMessage());
                return false;
            }
        }
        
        /**
         * Close connection
         */
        public function close() {
            if ($this->connection) {
                $this->connection->close();
            }
        }
    }
}

// Ensure singleton pattern works
if (!function_exists('get_database_instance')) {
    function get_database_instance() {
        return Database::getInstance();
    }
}
?>
                
                $stmt->bind_param($types, ...$bind_params);
            }
            
            $stmt->execute();
            return $stmt;
        } catch (Exception $e) {
            error_log("Query failed: " . $e->getMessage());
            
            if ($this->config['app']['debug']) {
                throw new Exception("Query failed: " . $e->getMessage());
            } else {
                throw new Exception("Database error occurred.");
            }
        }
    }
    
    /**
     * Get last inserted ID
     */
    public function lastInsertId() {
        return $this->connection->insert_id;
    }
    
    /**
     * Check if table exists
     */
    public function tableExists($tableName) {
        $result = $this->connection->query("SHOW TABLES LIKE '" . $this->connection->real_escape_string($tableName) . "'");
        return $result && $result->num_rows > 0;
    }
    
    /**
     * Get table schema
     */
    public function getTableSchema($tableName) {
        $result = $this->connection->query("DESCRIBE `" . $this->connection->real_escape_string($tableName) . "`");
        $schema = [];
        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $schema[] = $row;
            }
        }
        return $schema;
    }
    
    /**
     * Create table if not exists
     */
    public function createTableIfNotExists($tableName, $schema) {
        if (!$this->tableExists($tableName)) {
            $this->query($schema);
            return true;
        }
        return false;
    }
    
    /**
     * Backup database
     */
    public function backup($backupPath) {
        try {
            $host = $this->config['database']['host'];
            $user = $this->config['database']['user'];
            $pass = $this->config['database']['pass'];
            $name = $this->config['database']['name'];
            
            $filename = $backupPath . '/backup_' . date('Y_m_d_H_i_s') . '.sql';
            
            $command = "mysqldump --host={$host} --user={$user} --password={$pass} {$name} > {$filename}";
            
            exec($command, $output, $returnCode);
            
            if ($returnCode === 0) {
                return $filename;
            } else {
                throw new Exception("Backup failed: " . implode("\n", $output));
            }
            
        } catch (Exception $e) {
            throw new Exception("Backup error: " . $e->getMessage());
        }
    }
    
    /**
     * Close database connection
     */
    public function close() {
        $this->connection = null;
    }
    
    /**
     * Get database statistics
     */
    public function getStats() {
        $stats = [];
        
        // Get table count
        $result = $this->connection->query("SHOW TABLES");
        $stats['tables'] = $result ? $result->num_rows : 0;
        
        // Get database size
        $result = $this->connection->query("SELECT ROUND(SUM(data_length + index_length) / 1024 / 1024, 2) AS 'size_mb' FROM information_schema.tables WHERE table_schema = DATABASE()");
        if ($result && $row = $result->fetch_assoc()) {
            $stats['size_mb'] = $row['size_mb'];
        } else {
            $stats['size_mb'] = 0;
        }
        
        // Get connection info
        $stats['connection_info'] = $this->connection->host_info;
        
        return $stats;
    }
    
    /**
     * Optimize database
     */
    public function optimize() {
        try {
            $result = $this->connection->query("SHOW TABLES");
            if ($result) {
                while ($row = $result->fetch_row()) {
                    $tables[] = $row[0];
                }
            }
            
            foreach ($tables as $table) {
                $this->connection->query("OPTIMIZE TABLE `$table`");
            }
            
            return true;
        } catch (Exception $e) {
            error_log("Database optimization failed: " . $e->getMessage());
            return false;
        }
    }
    
    /**
     * Check database health
     */
    public function checkHealth() {
        $health = [
            'connection' => false,
            'tables' => false,
            'size' => false,
            'errors' => []
        ];
        
        try {
            // Check connection
            $result = $this->connection->query("SELECT 1");
            $health['connection'] = $result && $result->fetch_row()[0] == 1;
            
            // Check tables
            $result = $this->connection->query("SHOW TABLES");
            $health['tables'] = $result && $result->num_rows > 0;
            
            // Check size
            $result = $this->connection->query("SELECT COUNT(*) as count FROM information_schema.tables WHERE table_schema = DATABASE()");
            if ($result && $row = $result->fetch_assoc()) {
                $health['size'] = $row['count'] > 0;
            }
            
        } catch (Exception $e) {
            $health['errors'][] = $e->getMessage();
        }
        
        return $health;
    }
    
    /**
     * Destructor - close connection
     */
    public function __destruct() {
        if ($this->connection) {
            $this->connection->close();
        }
    }
}
