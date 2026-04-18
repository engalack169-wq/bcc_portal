#!/bin/bash
set -e

echo "=================================================="
echo "BCC Portal - Docker Initialization"
echo "=================================================="

# Ensure session directory exists and has correct permissions
mkdir -p /var/www/html/sessions
chown -R www-data:www-data /var/www/html/sessions
chmod -R 777 /var/www/html/sessions

# Ensure data directory exists
mkdir -p /var/www/html/data

# DELETE old database if it exists (to avoid permission issues)
# The setup_database.php will recreate it with correct permissions
if [ -f /var/www/html/data/bamenda_council_db.db ]; then
    echo "Removing existing database file for fresh initialization..."
    rm -f /var/www/html/data/bamenda_council_db.db
fi

# Run database setup script (runs as root, so creates db with proper permissions)
echo "Setting up database..."
php /var/www/html/setup_database.php

# Ensure database file is writable by www-data (critical for write operations)
if [ -f /var/www/html/data/bamenda_council_db.db ]; then
    chmod 666 /var/www/html/data/bamenda_council_db.db
    chown www-data:www-data /var/www/html/data/bamenda_council_db.db
fi

# Ensure data directory is writable by www-data
chown -R www-data:www-data /var/www/html/data
chmod -R 777 /var/www/html/data

echo ""
echo "=================================================="
echo "Starting Apache web server..."
echo "=================================================="

# Execute the main Apache process
exec apache2-foreground
