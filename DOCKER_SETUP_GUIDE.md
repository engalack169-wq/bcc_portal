# BCC Portal - Docker Setup Guide

## Prerequisites

- Docker (v20.10+)
- Docker Compose (v1.29+)
- 2GB free disk space
- Port 8080 available (or change in docker-compose.yml)

## Quick Start

### 1. Clone the repository
```bash
cd /path/to/bcc_portal
```

### 2. Run setup script
```bash
chmod +x docker/setup.sh
./docker/setup.sh
```

### 3. Access the application
- **Web Application**: http://localhost:8080
- **MailHog (Email Testing)**: http://localhost:8025
- **Database**: ./data/bamenda_council_db.db

## Manual Setup

### 1. Build containers
```bash
docker-compose build
```

### 2. Start services
```bash
docker-compose up -d
```

### 3. Initialize database
```bash
docker-compose exec web php docker/init-db.php
```

### 4. Set permissions
```bash
docker-compose exec web chmod -R 775 data/ uploads/ logs/ cache/
```

## Docker Services

### Web Service
- **Container**: bcc_portal_web
- **Image**: PHP 8.1 with Apache
- **Port**: 8080
- **Features**:
  - Apache with mod_rewrite
  - PHP 8.1 with PDO, MySQLi, SQLite
  - Auto-reload on code changes

### SQLite Database
- **Container**: bcc_portal_db
- **Path**: ./data/bamenda_council_db.db
- **Features**:
  - Zero configuration
  - File-based persistence
  - WAL mode for better concurrency

### MailHog (Optional)
- **Container**: bcc_portal_mailhog
- **Web Interface**: http://localhost:8025
- **SMTP Server**: localhost:1025
- **Purpose**: Test email functionality without external SMTP

### Redis Cache (Optional)
- **Container**: bcc_portal_redis
- **Port**: 6379
- **Features**:
  - Session caching
  - Query result caching
  - Real-time notifications storage

## Common Commands

### View logs
```bash
# All services
docker-compose logs -f

# Specific service
docker-compose logs -f web
```

### Execute commands in container
```bash
# Run PHP command
docker-compose exec web php -v

# Access shell
docker-compose exec web bash

# Run script
docker-compose exec web php docker/init-db.php
```

### Database operations

#### Backup database
```bash
docker-compose exec web php -r "
    require 'config/database/sqlite-database.php';
    \$db = new SQLiteDatabase();
    \$backup = \$db->backup('backups');
    echo 'Backup created: ' . \$backup;
"
```

#### Export data
```bash
# Export as SQL
docker-compose exec web sqlite3 data/bamenda_council_db.db ".dump" > backup.sql
```

#### Import data
```bash
# Import SQL file
docker-compose exec web sqlite3 data/bamenda_council_db.db < backup.sql
```

### Restart services
```bash
# All services
docker-compose restart

# Specific service
docker-compose restart web
```

### Remove everything
```bash
# Stop and remove containers
docker-compose down

# Also remove volumes
docker-compose down -v

# Remove images too
docker-compose down -v --rmi all
```

## Environment Variables

Copy `.env.docker` to `.env` and customize:

```bash
cp .env.docker .env
```

Key variables:
- `DB_DRIVER=sqlite` - Use SQLite (or `mysql` for MySQL)
- `APP_ENV=development` - Development or production
- `APP_DEBUG=true` - Enable debug mode
- `MAIL_HOST=mailhog` - MailHog for testing

## Switching Databases

### From SQLite to MySQL

1. Update `.env`:
```bash
DB_DRIVER=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=bamenda_council_db
DB_USERNAME=root
DB_PASSWORD=root
```

2. Update `docker-compose.yml`:
```yaml
services:
  mysql:
    image: mysql:8.0
    environment:
      MYSQL_ROOT_PASSWORD: root
      MYSQL_DATABASE: bamenda_council_db
    ports:
      - "3306:3306"
```

3. Rebuild and restart:
```bash
docker-compose up -d --build
```

## Troubleshooting

### Port already in use
```bash
# Change port in docker-compose.yml
# Or kill process using port
lsof -i :8080
kill -9 <PID>
```

### No space left on device
```bash
# Clean up Docker
docker system prune -a --volumes
```

### Database locked
```bash
# Restart SQLite service
docker-compose restart db

# Or remove and recreate
docker-compose down -v
docker-compose up -d
```

### Permission denied on files
```bash
# Fix permissions
docker-compose exec web chmod -R 755 /var/www/html
docker-compose exec web chmod -R 775 /var/www/html/data /var/www/html/uploads /var/www/html/logs
```

### Can't connect to database
```bash
# Check database service is running
docker-compose ps

# Check logs
docker-compose logs db

# Verify database exists
docker-compose exec web ls -la data/
```

## Performance Tuning

### Increase PHP memory limit
Edit `docker/php.ini`:
```ini
memory_limit = 512M
```

### Enable caching
- Use Redis for caching: uncomment in `docker-compose.yml`
- Set `CACHE_DRIVER=redis` in `.env`

### Database optimization
SQLite with:
- WAL mode (Write-Ahead Logging)
- Proper indexes
- Query optimization

### Use production settings
```bash
# Set environment
APP_ENV=production
APP_DEBUG=false
```

## Deployment

### Production checklist
- [ ] Use HTTPS (configure reverse proxy)
- [ ] Set strong encryption keys
- [ ] Disable debug mode
- [ ] Set proper file permissions
- [ ] Enable database backups
- [ ] Configure logging
- [ ] Set up monitoring

### Docker production tips
- Use specific image versions (not `latest`)
- Implement health checks
- Set resource limits
- Use environment variables for secrets
- Implement log rotation
- Use external volumes for data

### Example production docker-compose
```yaml
services:
  web:
    image: my-registry/bcc-portal:v2.0.0
    resources:
      limits:
        cpus: '2'
        memory: 512M
    environment:
      APP_ENV: production
      APP_DEBUG: false
```

## Security

### Secure the database
- Use strong passwords for any database user
- Restrict database access to web container only
- Enable file-level encryption for data volume

### Secure the application
- Use HTTPS in production
- Keep images updated: `docker-compose build --pull`
- Don't commit sensitive data to version control
- Use Docker secrets for sensitive data
- Regular security scanning

## Monitoring

### Check service health
```bash
docker-compose ps
```

### Monitor resource usage
```bash
docker stats
```

### View application logs
```bash
docker-compose logs -f --tail=100
```

### Health check status
```bash
docker-compose exec web curl -s http://localhost/
```

## Next Steps

1. **Configure SSL/TLS** - Set up HTTPS
2. **Configure backups** - Automated database backups
3. **Set up monitoring** - Application and container monitoring
4. **Configure CI/CD** - Automated testing and deployment
5. **Scale services** - Docker swarm or Kubernetes

## Support

For issues or questions:
1. Check Docker logs: `docker-compose logs`
2. Verify configuration: `.env` file
3. Check volume permissions: `ls -la data/`
4. Review application logs: `logs/` directory

---

**Last Updated**: April 13, 2026
**Version**: 2.0.0
**Status**: Production Ready with Docker
