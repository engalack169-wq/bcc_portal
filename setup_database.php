<?php
/**
 * Bamenda City Council E-Governance Platform
 * Database Setup Script
 */

// Include database configuration
require_once __DIR__ . '/config/database/database.php';

try {
    // First, connect to MySQL without specifying database to create it
    $config = require __DIR__ . '/config/app/config.php';
    $db_config = $config['database'];

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
        echo "Database '{$db_config['name']}' created or already exists.\n";
    } else {
        throw new Exception("Failed to create database: " . $temp_connection->error);
    }

    $temp_connection->close();

    // Now connect to the specific database
    $db = Database::getInstance();

    // Create users table
    $create_users_table = "
    CREATE TABLE IF NOT EXISTS users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        email VARCHAR(255) UNIQUE NOT NULL,
        password VARCHAR(255) NOT NULL,
        role ENUM('admin', 'staff', 'citizen') DEFAULT 'citizen',
        status ENUM('active', 'inactive', 'suspended') DEFAULT 'active',
        display_name VARCHAR(255),
        first_name VARCHAR(100),
        last_name VARCHAR(100),
        phone VARCHAR(20),
        address TEXT,
        date_of_birth DATE,
        gender ENUM('male', 'female', 'other'),
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        last_login TIMESTAMP NULL,
        INDEX idx_email (email),
        INDEX idx_role (role),
        INDEX idx_status (status)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
    ";

    if ($db->getConnection()->query($create_users_table)) {
        echo "Users table created successfully.\n";
    } else {
        throw new Exception("Failed to create users table: " . $db->getConnection()->error);
    }

    // Insert default admin user
    $admin_email = 'admin@bamendacity.gov.cm';
    $admin_password = password_hash('admin123!@#', PASSWORD_DEFAULT);
    $admin_role = 'admin';
    $admin_display_name = 'System Administrator';

    // Check if admin already exists
    $check_stmt = $db->getConnection()->prepare("SELECT id FROM users WHERE email = ?");
    $check_stmt->bind_param("s", $admin_email);
    $check_stmt->execute();
    $check_result = $check_stmt->get_result();

    if ($check_result->num_rows === 0) {
        $insert_stmt = $db->getConnection()->prepare("
            INSERT INTO users (email, password, role, display_name, status)
            VALUES (?, ?, ?, ?, 'active')
        ");
        $insert_stmt->bind_param("ssss", $admin_email, $admin_password, $admin_role, $admin_display_name);

        if ($insert_stmt->execute()) {
            echo "Admin user created successfully.\n";
            echo "Email: admin@bamendacity.gov.cm\n";
            echo "Password: admin123!@#\n";
        } else {
            throw new Exception("Failed to create admin user: " . $insert_stmt->error);
        }
    } else {
        echo "Admin user already exists.\n";
    }

    echo "Database setup completed successfully!\n";

} catch (Exception $e) {
    echo "Database setup failed: " . $e->getMessage() . "\n";
    exit(1);
}
?>