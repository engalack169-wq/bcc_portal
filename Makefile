.PHONY: help docker-build docker-up docker-down docker-logs docker-shell database-init database-backup database-restore clean test lint format

## BCC Portal Makefile - Docker & Development Commands

help:
	@echo "BCC Portal - Available Commands"
	@echo "================================"
	@echo ""
	@echo "Docker Commands:"
	@echo "  make docker-build      - Build Docker images"
	@echo "  make docker-up         - Start all containers"
	@echo "  make docker-down       - Stop all containers"
	@echo "  make docker-restart    - Restart all containers"
	@echo "  make docker-logs       - View logs from all services"
	@echo "  make docker-shell      - Open shell in web container"
	@echo "  make docker-clean      - Remove all containers and volumes"
	@echo ""
	@echo "Database Commands:"
	@echo "  make database-init     - Initialize database"
	@echo "  make database-backup   - Backup SQLite database"
	@echo "  make database-restore  - Restore from backup"
	@echo ""
	@echo "Development Commands:"
	@echo "  make test              - Run tests"
	@echo "  make lint              - Run PHP linter"
	@echo "  make format            - Format PHP code"
	@echo "  make clean             - Clean build artifacts"
	@echo ""

docker-build:
	@echo "Building Docker images..."
	docker-compose build

docker-up:
	@echo "Starting containers..."
	docker-compose up -d
	@echo "✓ Containers started"
	@echo "Access at: http://localhost:8080"

docker-down:
	@echo "Stopping containers..."
	docker-compose down

docker-restart:
	@echo "Restarting containers..."
	docker-compose restart

docker-logs:
	docker-compose logs -f

docker-shell:
	docker-compose exec web bash

database-init:
	@echo "Initializing database..."
	docker-compose exec web php docker/init-db.php
	@echo "✓ Database initialized"

database-backup:
	@echo "Backing up database..."
	docker-compose exec web php -r "require 'config/database/sqlite-database.php'; \$$db = new SQLiteDatabase(); \$$file = \$$db->backup('backups'); echo 'Backup: ' . \$$file;"

database-restore:
	@echo "Restoring database from backup..."
	@read -p "Enter backup filename: " backup; \
	docker-compose exec web sqlite3 data/bamenda_council_db.db < "backups/$$backup"

test:
	@echo "Running tests..."
	docker-compose exec web php -r "echo 'Tests not yet configured';"

lint:
	@echo "Running PHP linter..."
	docker-compose exec web php -l core/*.php
	docker-compose exec web php -l api/*.php
	@echo "✓ Lint complete"

format:
	@echo "Formatting PHP code..."
	@echo "Note: Using manual formatting (no auto-formatter configured)"

clean:
	@echo "Cleaning up..."
	rm -rf cache/*
	rm -rf logs/*
	@echo "✓ Cleanup complete"

docker-clean:
	@echo "Removing all containers and volumes..."
	docker-compose down -v
	@echo "✓ All containers and volumes removed"

## Development utilities

.env:
	@cp .env.docker .env
	@echo "✓ Created .env file"

setup: docker-build docker-up database-init
	@echo "✓ Setup complete!"
	@echo "Access at: http://localhost:8080"

tail:
	@docker-compose logs -f web

bash:
	@docker-compose exec web bash

php:
	@docker-compose exec web php

composer:
	@docker-compose exec web composer $(ARGS)

npm:
	@docker-compose exec web npm $(ARGS)

sqlite:
	@docker-compose exec web sqlite3 data/bamenda_council_db.db

dump-db:
	@docker-compose exec web sqlite3 data/bamenda_council_db.db ".dump" > backup-$(shell date +%Y%m%d-%H%M%S).sql
	@echo "✓ Database dumped"

validate:
	@echo "Validating setup..."
	@docker-compose ps
	@echo "✓ Validation complete"

## Default target
.DEFAULT_GOAL := help
