#!/bin/bash
# BCC Portal Docker Quick Start Script

set -e

echo "=================================================="
echo "BCC Portal - Docker Quick Start"
echo "=================================================="
echo ""

# Color codes
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
NC='\033[0m' # No Color

# Check if Docker is installed
if ! command -v docker &> /dev/null; then
    echo -e "${RED}✗ Docker is not installed${NC}"
    echo "Please install Docker from: https://www.docker.com/products/docker-desktop"
    exit 1
fi

# Check if Docker Compose is installed
if ! command -v docker-compose &> /dev/null; then
    echo -e "${RED}✗ Docker Compose is not installed${NC}"
    echo "Please install Docker Compose from: https://docs.docker.com/compose/install/"
    exit 1
fi

echo -e "${GREEN}✓ Docker and Docker Compose are installed${NC}"
echo ""

# Setup environment file
if [ ! -f .env ]; then
    echo "Setting up .env file..."
    cp .env.docker .env
    echo -e "${GREEN}✓ Created .env file${NC}"
else
    echo -e "${YELLOW}⚠ .env file already exists${NC}"
fi

echo ""
echo "=================================================="
echo "Building and starting containers..."
echo "=================================================="
echo ""

# Build containers
docker-compose build

echo ""
echo "=================================================="
echo "Starting services..."
echo "=================================================="
echo ""

# Start services
docker-compose up -d

# Wait for services to be ready
echo "Waiting for services to be ready..."
sleep 10

echo ""
echo "=================================================="
echo "Performing initialization..."
echo "=================================================="
echo ""

# Run initialization
docker-compose exec -T web chmod +x /var/www/html/docker/init.sh
docker-compose exec -T web /var/www/html/docker/init.sh

echo ""
echo "=================================================="
echo -e "${GREEN}✓ BCC Portal is ready!${NC}"
echo "=================================================="
echo ""
echo "Access the application at:"
echo -e "${GREEN}http://localhost:8080${NC}"
echo ""
echo "MailHog (Email Testing) at:"
echo -e "${GREEN}http://localhost:8025${NC}"
echo ""
echo "Useful commands:"
echo "  Start services:   docker-compose up -d"
echo "  Stop services:    docker-compose down"
echo "  View logs:        docker-compose logs -f web"
echo "  Execute command:  docker-compose exec web <command>"
echo "  Rebuild images:   docker-compose build --no-cache"
echo ""
echo "Database location:"
echo "  SQLite: ./data/bamenda_council_db.db"
echo ""
echo "Backup database:"
echo "  docker-compose exec web php -r 'require \"docker/init-db.php\";'"
echo ""
