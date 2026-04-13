#!/bin/bash
# Docker initialization script for BCC Portal

set -e

echo "=========================================="
echo "BCC Portal - Docker Initialization"
echo "=========================================="

# Create necessary directories
echo "Creating directories..."
mkdir -p /var/www/html/data
mkdir -p /var/www/html/uploads/documents
mkdir -p /var/www/html/uploads/avatars
mkdir -p /var/www/html/logs
mkdir -p /var/www/html/cache

# Set proper permissions
echo "Setting permissions..."
chown -R www-data:www-data /var/www/html/data
chown -R www-data:www-data /var/www/html/uploads
chown -R www-data:www-data /var/www/html/logs
chown -R www-data:www-data /var/www/html/cache

chmod -R 775 /var/www/html/data
chmod -R 775 /var/www/html/uploads
chmod -R 775 /var/www/html/logs
chmod -R 775 /var/www/html/cache

# Initialize SQLite database if not exists
echo "Initializing SQLite database..."
php /var/www/html/docker/init-db.php

echo "=========================================="
echo "Initialization complete!"
echo "=========================================="
