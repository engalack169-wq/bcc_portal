#!/bin/bash
set -e

echo "=================================================="
echo "BCC Portal - Docker Initialization"
echo "=================================================="

# Run database setup script
echo "Setting up database..."
php /var/www/html/setup_database.php

echo ""
echo "=================================================="
echo "Starting Apache web server..."
echo "=================================================="

# Execute the main Apache process
exec apache2-foreground
