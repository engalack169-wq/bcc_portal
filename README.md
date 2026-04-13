# Bamenda City Council E-Governance Platform

A comprehensive digital governance platform for the citizens of Bamenda, Cameroon. This platform provides access to municipal services, civic engagement tools, youth programs, and emergency services.

## 🚀 Features

### Core Services
- **Citizen Services Portal**: Business licenses, permits, property registry, tax portal, and online payments
- **Civic Engagement**: Public consultations, volunteer programs, and town hall meetings
- **Youth Programs**: Youth council participation, employment portal, and leadership programs
- **Emergency Services**: Real-time alerts, crisis management, and recovery support
- **Administrative Tools**: Staff portal, analytics dashboard, and document management

### Technical Features
- **Responsive Design**: Optimized for desktop, tablet, and mobile devices
- **Multi-language Support**: English, French, and Pidgin English
- **Dark Mode**: Toggle between light and dark themes
- **Accessibility**: WCAG 2.1 compliant with screen reader support
- **Progressive Web App**: Offline capabilities and app-like experience
- **Real-time Notifications**: Instant updates for important announcements

## 📁 Project Structure

```
stitch1/
├── assets/
│   ├── css/
│   │   └── styles.css          # Custom CSS (replacing Tailwind)
│   ├── js/
│   │   └── main.js             # Main JavaScript functionality
│   └── images/                 # Images and media files
├── includes/
│   ├── header.php              # Header component with meta tags
│   ├── navigation.php          # Navigation system
│   └── footer.php              # Footer component
├── pages/
│   ├── citizen-services/       # Citizen service pages
│   ├── civic-engagement/       # Civic engagement pages
│   ├── youth/                  # Youth program pages
│   ├── public-services/        # Public service pages
│   ├── emergency/              # Emergency service pages
│   ├── business/               # Business-related pages
│   └── administration/         # Administrative pages
├── index.php                   # Homepage
└── README.md                   # This file
```

## 🛠️ Technology Stack

- **Backend**: PHP 8.0+
- **Frontend**: HTML5, CSS3, JavaScript (ES6+)
- **Database**: MySQL/MariaDB
- **Styling**: Custom CSS (migrated from Tailwind CSS)
- **Icons**: Material Symbols
- **Fonts**: Google Fonts (Public Sans, Manrope)
- **Images**: Google Cloud Storage

## 📋 Requirements

### Server Requirements
- PHP 8.0 or higher
- MySQL 5.7 or MariaDB 10.2 or higher
- Apache or Nginx web server
- SSL certificate (HTTPS required)

### Browser Support
- Chrome 90+
- Firefox 88+
- Safari 14+
- Edge 90+

## 🚀 Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/bamenda-city-council/e-governance-platform.git
   cd e-governance-platform
   ```

2. **Configure database**
   - Create a new database
   - Import the provided SQL schema
   - Update database credentials in `config/database.php`

3. **Configure web server**
   - Point document root to the project directory
   - Configure URL rewriting for clean URLs
   - Set up SSL certificate

4. **Set file permissions**
   ```bash
   chmod 755 -R .
   chmod 777 assets/uploads/
   ```

5. **Access the platform**
   - Open your browser and navigate to your domain
   - Follow the setup wizard to complete installation

## 🐳 Docker Quick Start (Recommended)

### Docker Installation

The project includes complete Docker support for easy development and deployment.

#### Prerequisites
- [Docker](https://www.docker.com/products/docker-desktop) (v20.10+)
- [Docker Compose](https://docs.docker.com/compose/install/) (v1.29+)

#### Quick Setup
```bash
# Clone and navigate to project
git clone <repo-url> && cd bcc_portal

# Run setup script (Linux/MacOS)
chmod +x docker/setup.sh
./docker/setup.sh

# Or use Make (if available)
make setup
```

#### Access Points
- **Web Application**: http://localhost:8080
- **MailHog (Email Testing)**: http://localhost:8025
- **Database**: `./data/bamenda_council_db.db` (SQLite)

#### Common Commands
```bash
# Start services
docker-compose up -d

# Stop services
docker-compose down

# View logs
docker-compose logs -f web

# Execute PHP command
docker-compose exec web php script.php

# Access database shell
docker-compose exec web sqlite3 data/bamenda_council_db.db

# Backup database
docker-compose exec web php -r "require 'config/database/sqlite-database.php'; \$db = new SQLiteDatabase(); echo \$db->backup('backups');"
```

#### Using Makefile
```bash
# Build and start
make docker-up

# View logs
make docker-logs

# Initialize database
make database-init

# Open shell
make docker-shell
```

#### Docker Configuration
- **Database**: SQLite (easy setup, no external DB needed)
- **Services**: Apache, PHP 8.1, Redis (optional), MailHog (optional)
- **Volumes**: Automatic file syncing with local directory
- **Network**: Isolated Docker network for services

#### Switching to MySQL
To use MySQL instead of SQLite, update `.env`:
```bash
DB_DRIVER=mysql
DB_HOST=mysql
DB_DATABASE=bamenda_council_db
DB_USERNAME=root
DB_PASSWORD=password
```

Then update `docker-compose.yml` to include MySQL service.

See [DOCKER_SETUP_GUIDE.md](DOCKER_SETUP_GUIDE.md) for detailed Docker documentation.

## 🎨 Design System

### Color Palette
- **Primary**: #004d27 (Deep Green)
- **Secondary**: #735c00 (Gold)
- **Tertiary**: #254936 (Forest Green)
- **Surface**: #faf9fb (Light Gray)
- **Error**: #ba1a1a (Red)

### Typography
- **Headlines**: Public Sans
- **Body**: Manrope
- **Labels**: Manrope

### Components
- **Buttons**: Multiple variants (primary, secondary, tertiary, outline)
- **Cards**: Flexible layout system with hover effects
- **Forms**: Validated inputs with real-time feedback
- **Navigation**: Responsive header with mobile menu

## 📱 Responsive Design

The platform is fully responsive with breakpoints at:
- **Mobile**: < 768px
- **Tablet**: 768px - 1024px
- **Desktop**: > 1024px

### Mobile Features
- Bottom navigation bar
- Collapsible mobile menu
- Touch-optimized interactions
- Adaptive layouts

## 🔧 Configuration

### Environment Variables
Create a `.env` file in the root directory:

```env
# Database Configuration
DB_HOST=localhost
DB_NAME=bamenda_council
DB_USER=username
DB_PASSWORD=password

# Application Settings
APP_ENV=production
APP_DEBUG=false
APP_URL=https://bamendacity.gov.cm

# Email Configuration
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=noreply@bamendacity.gov.cm
MAIL_PASSWORD=app_password

# Security
JWT_SECRET=your_jwt_secret_key
ENCRYPTION_KEY=your_encryption_key
```

## 🔒 Security Features

- **Input Validation**: All user inputs are sanitized and validated
- **CSRF Protection**: Cross-site request forgery prevention
- **XSS Prevention**: Output encoding and content security policy
- **SQL Injection Protection**: Prepared statements and parameterized queries
- **Authentication**: Secure session management and JWT tokens
- **Data Encryption**: Sensitive data encrypted at rest and in transit

## 🌍 Multi-language Support

The platform supports:
- **English** (default)
- **Français**
- **Pidgin English**

Language files are located in `languages/` directory and can be easily extended.

## 📊 Analytics & Monitoring

- **Google Analytics**: User behavior tracking
- **Performance Monitoring**: Page load times and error tracking
- **User Analytics**: Registration and engagement metrics
- **System Health**: Server performance and uptime monitoring

## 🧪 Testing

### Running Tests
```bash
# Run all tests
php vendor/bin/phpunit

# Run specific test suite
php vendor/bin/phpunit tests/Unit/
php vendor/bin/phpunit tests/Integration/
```

### Test Coverage
- Unit Tests: Core business logic
- Integration Tests: Database and API interactions
- End-to-End Tests: User workflows

## 📚 Documentation

- **API Documentation**: `/docs/api/`
- **User Manual**: `/docs/user-guide/`
- **Admin Guide**: `/docs/admin-guide/`
- **Developer Guide**: `/docs/developer-guide/`

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add some amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

### Coding Standards
- Follow PSR-12 coding standards
- Use meaningful variable and function names
- Write comments for complex logic
- Maintain test coverage above 80%

## 📝 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 🆘 Support

For support and assistance:
- **Email**: support@bamendacity.gov.cm
- **Phone**: +237 233 000 000
- **Help Center**: `/help`
- **Status Page**: `https://status.bamendacity.gov.cm`

## 🗺️ Roadmap

### Phase 1 (Current)
- [x] Basic citizen services
- [x] Youth council participation
- [x] Emergency alerts
- [x] Mobile responsiveness

### Phase 2 (Q4 2024)
- [ ] Advanced analytics dashboard
- [ ] AI-powered service recommendations
- [ ] Integration with national systems
- [ ] Mobile applications (iOS/Android)

### Phase 3 (Q1 2025)
- [ ] Blockchain-based voting system
- [ ] IoT integration for smart city features
- [ ] Advanced data visualization
- [ ] Multi-tenant architecture for other councils

## 📈 Performance

### Current Metrics
- **Page Load Time**: < 2 seconds
- **First Contentful Paint**: < 1.5 seconds
- **Largest Contentful Paint**: < 2.5 seconds
- **Cumulative Layout Shift**: < 0.1
- **First Input Delay**: < 100ms

### Optimization Techniques
- Image lazy loading
- Code splitting
- Caching strategies
- CDN integration
- Database optimization

## 🔐 Privacy & Data Protection

- **GDPR Compliance**: Full compliance with data protection regulations
- **Data Minimization**: Only collect necessary user data
- **User Consent**: Explicit consent for data processing
- **Right to Erasure**: Users can request data deletion
- **Data Portability**: Users can export their data

## 📞 Contact Information

**Bamenda City Council**
- Address: Bamenda City Council, Bamenda, Northwest Region, Cameroon
- Phone: +237 233 000 000
- Email: info@bamendacity.gov.cm
- Website: https://bamendacity.gov.cm
- Working Hours: Monday - Friday, 8:00 AM - 5:00 PM

---

**Built with ❤️ for the citizens of Bamenda**
