<?php
/**
 * Bamenda City Council E-Governance Platform
 * Database Setup Script
 * Supports both MySQL and SQLite
 */

// Include system bootstrap and database configuration
require_once __DIR__ . '/config/database/database.php';

try {
    $db_driver = getenv('DB_DRIVER') ?: 'sqlite';
    echo "Starting database setup (Driver: {$db_driver})...\n";

    if ($db_driver === 'mysql') {
        // MySQL Specific Initialization
        $config = require __DIR__ . '/config/app/config.php';
        $db_config = $config['database'];

        echo "Connecting to MySQL server...\n";
        $temp_connection = new mysqli(
            $db_config['host'],
            $db_config['user'],
            $db_config['pass']
        );

        if ($temp_connection->connect_error) {
            throw new Exception("Connection failed: " . $temp_connection->connect_error);
        }

        // Create database if it doesn't exist
        $create_db_query = "CREATE DATABASE IF NOT EXISTS `{$db_config['name']}` CHARACTER SET {$db_config['charset']} COLLATE {$db_config['collation']}";
        if ($temp_connection->query($create_db_query)) {
            echo "✓ Database '{$db_config['name']}' created or already exists.\n";
        } else {
            throw new Exception("Failed to create database: " . $temp_connection->error);
        }
        $temp_connection->close();
    }

    // Now connect to the database instance
    $db = Database::getInstance();
    $conn = $db->getConnection();

    echo "Initializing tables...\n";

    // Table Schema (Compatible with both MySQL and SQLite)
    $tables = [
        'users' => "
            CREATE TABLE IF NOT EXISTS users (
                id " . ($db_driver === 'mysql' ? "INT AUTO_INCREMENT PRIMARY KEY" : "INTEGER PRIMARY KEY AUTOINCREMENT") . ",
                first_name VARCHAR(100) NOT NULL,
                last_name VARCHAR(100) NOT NULL,
                email VARCHAR(255) UNIQUE NOT NULL,
                password VARCHAR(255) NOT NULL,
                role VARCHAR(20) DEFAULT 'citizen',
                status VARCHAR(20) DEFAULT 'active',
                phone VARCHAR(20),
                address TEXT,
                date_of_birth DATE,
                gender VARCHAR(10),
                display_name VARCHAR(255),
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                last_login TIMESTAMP NULL
            )
        ",
        'service_applications' => "
            CREATE TABLE IF NOT EXISTS service_applications (
                id " . ($db_driver === 'mysql' ? "INT AUTO_INCREMENT PRIMARY KEY" : "INTEGER PRIMARY KEY AUTOINCREMENT") . ",
                user_id INTEGER NOT NULL,
                reference_id VARCHAR(100) UNIQUE NOT NULL,
                application_type VARCHAR(100) NOT NULL,
                title VARCHAR(255) NOT NULL,
                description TEXT,
                status VARCHAR(50) DEFAULT 'submitted',
                submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                completed_at TIMESTAMP,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            )
        ",
        'payments' => "
            CREATE TABLE IF NOT EXISTS payments (
                id " . ($db_driver === 'mysql' ? "INT AUTO_INCREMENT PRIMARY KEY" : "INTEGER PRIMARY KEY AUTOINCREMENT") . ",
                user_id INTEGER NOT NULL,
                reference_id VARCHAR(100),
                description TEXT,
                amount DECIMAL(10, 2),
                payment_method VARCHAR(50),
                status VARCHAR(50) DEFAULT 'pending',
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            )
        ",
        'notifications' => "
            CREATE TABLE IF NOT EXISTS notifications (
                id " . ($db_driver === 'mysql' ? "INT AUTO_INCREMENT PRIMARY KEY" : "INTEGER PRIMARY KEY AUTOINCREMENT") . ",
                user_id INTEGER NOT NULL,
                title VARCHAR(255),
                message TEXT,
                type VARCHAR(50),
                read_at TIMESTAMP NULL,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            )
        "
    ];

    foreach ($tables as $name => $sql) {
        if ($conn->query($sql)) {
            echo "✓ Table '{$name}' ready.\n";
        } else {
            throw new Exception("Failed to create table '{$name}': " . $conn->error);
        }
    }

    // Insert default admin user if not exists
    $admin_email = 'admin@bamendacity.gov.cm';
    $admin_password = password_hash('admin123!@#', PASSWORD_DEFAULT);
    
    $check_stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
    $check_stmt->bind_param("s", $admin_email);
    $check_stmt->execute();
    $check_result = $check_stmt->get_result();

    if ($check_result->num_rows === 0) {
        $insert_stmt = $conn->prepare("
            INSERT INTO users (first_name, last_name, email, password, role, display_name, status)
            VALUES ('System', 'Administrator', ?, ?, 'admin', 'System Administrator', 'active')
        ");
        $insert_stmt->bind_param("ss", $admin_email, $admin_password);

        if ($insert_stmt->execute()) {
            echo "✓ Admin user created successfully!\n";
            echo "  Email: {$admin_email}\n";
            echo "  Password: admin123!@#\n";
        }
    } else {
        echo "✓ Admin user already exists.\n";
    }

    echo "\nDatabase setup completed successfully!\n";

} catch (Exception $e) {
    echo "✗ Database setup failed: " . $e->getMessage() . "\n";
    exit(1);
}
?>