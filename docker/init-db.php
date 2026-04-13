<?php
/**
 * Database Initialization Script for Docker
 * Creates SQLite database and schema
 */

echo "================================================\n";
echo "BCC Portal - Database Initialization\n";
echo "================================================\n\n";

$db_dir = __DIR__ . '/../data';
$db_file = $db_dir . '/bamenda_council_db.db';

// Create data directory
if (!is_dir($db_dir)) {
    mkdir($db_dir, 0755, true);
    echo "✓ Created data directory\n";
}

// Check if database already exists
if (file_exists($db_file)) {
    echo "✓ Database already exists at: {$db_file}\n";
} else {
    // Create SQLite database
    try {
        $pdo = new PDO('sqlite:' . $db_file);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "✓ Created SQLite database\n";
        
        // Enable foreign keys
        $pdo->exec('PRAGMA foreign_keys = ON');
        
        // Create tables
        createTables($pdo);
        
        echo "\n✓ Database initialized successfully!\n";
        echo "\nDatabase location: {$db_file}\n";
    } catch (Exception $e) {
        echo "✗ Error creating database: " . $e->getMessage() . "\n";
        exit(1);
    }
}

// Set proper permissions
chmod($db_file, 0666);
echo "✓ Set database permissions\n";

echo "\n================================================\n";
echo "Database initialization complete!\n";
echo "================================================\n";

/**
 * Create database schema
 */
function createTables($pdo) {
    $tables = [
        // Users table
        'CREATE TABLE IF NOT EXISTS users (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            first_name VARCHAR(100) NOT NULL,
            last_name VARCHAR(100) NOT NULL,
            email VARCHAR(255) UNIQUE NOT NULL,
            phone VARCHAR(20),
            date_of_birth DATE,
            gender VARCHAR(10),
            address TEXT,
            role VARCHAR(50) DEFAULT "citizen",
            password VARCHAR(255) NOT NULL,
            avatar_path VARCHAR(255),
            status VARCHAR(50) DEFAULT "active",
            two_factor_enabled BOOLEAN DEFAULT 0,
            two_factor_secret VARCHAR(255),
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            UNIQUE(email)
        )',
        
        // Service Applications
        'CREATE TABLE IF NOT EXISTS service_applications (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            user_id INTEGER NOT NULL,
            reference_id VARCHAR(100) UNIQUE NOT NULL,
            application_type VARCHAR(100) NOT NULL,
            title VARCHAR(255) NOT NULL,
            description TEXT,
            status VARCHAR(50) DEFAULT "submitted",
            submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            completed_at TIMESTAMP,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
        )',
        
        // Payments table
        'CREATE TABLE IF NOT EXISTS payments (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            user_id INTEGER NOT NULL,
            reference_id VARCHAR(100),
            description TEXT,
            amount DECIMAL(10, 2),
            payment_method VARCHAR(50),
            stripe_intent_id VARCHAR(255),
            status VARCHAR(50) DEFAULT "pending",
            due_date DATE,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
        )',
        
        // Documents table
        'CREATE TABLE IF NOT EXISTS documents (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            user_id INTEGER NOT NULL,
            document_name VARCHAR(255),
            document_type VARCHAR(50),
            file_path VARCHAR(255),
            file_size INTEGER,
            status VARCHAR(50) DEFAULT "pending",
            uploaded_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
        )',
        
        // Notifications table
        'CREATE TABLE IF NOT EXISTS notifications (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            user_id INTEGER NOT NULL,
            title VARCHAR(255),
            message TEXT,
            type VARCHAR(50),
            read_at TIMESTAMP,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
        )',
        
        // Activity logs
        'CREATE TABLE IF NOT EXISTS activity_logs (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            user_id INTEGER,
            action VARCHAR(100),
            description TEXT,
            ip_address VARCHAR(45),
            user_agent TEXT,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE SET NULL
        )',
        
        // Application ledger (for tracking history)
        'CREATE TABLE IF NOT EXISTS application_ledger (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            application_id INTEGER NOT NULL,
            action VARCHAR(100),
            notes TEXT,
            changed_by INTEGER,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            FOREIGN KEY (application_id) REFERENCES service_applications(id) ON DELETE CASCADE,
            FOREIGN KEY (changed_by) REFERENCES users(id) ON DELETE SET NULL
        )'
    ];
    
    foreach ($tables as $sql) {
        try {
            $pdo->exec($sql);
        } catch (Exception $e) {
            echo "Error creating table: " . $e->getMessage() . "\n";
        }
    }
    
    echo "✓ Created database schema\n";
    
    // Create indexes for better query performance
    createIndexes($pdo);
}

/**
 * Create database indexes
 */
function createIndexes($pdo) {
    $indexes = [
        'CREATE INDEX IF NOT EXISTS idx_users_email ON users(email)',
        'CREATE INDEX IF NOT EXISTS idx_users_role ON users(role)',
        'CREATE INDEX IF NOT EXISTS idx_applications_user ON service_applications(user_id)',
        'CREATE INDEX IF NOT EXISTS idx_applications_status ON service_applications(status)',
        'CREATE INDEX IF NOT EXISTS idx_applications_ref ON service_applications(reference_id)',
        'CREATE INDEX IF NOT EXISTS idx_payments_user ON payments(user_id)',
        'CREATE INDEX IF NOT EXISTS idx_payments_status ON payments(status)',
        'CREATE INDEX IF NOT EXISTS idx_documents_user ON documents(user_id)',
        'CREATE INDEX IF NOT EXISTS idx_notifications_user ON notifications(user_id)',
        'CREATE INDEX IF NOT EXISTS idx_logs_user ON activity_logs(user_id)',
        'CREATE INDEX IF NOT EXISTS idx_logs_created ON activity_logs(created_at)',
        'CREATE INDEX IF NOT EXISTS idx_ledger_app ON application_ledger(application_id)'
    ];
    
    foreach ($indexes as $sql) {
        try {
            $pdo->exec($sql);
        } catch (Exception $e) {
            echo "Warning: " . $e->getMessage() . "\n";
        }
    }
    
    echo "✓ Created database indexes\n";
}
?>
