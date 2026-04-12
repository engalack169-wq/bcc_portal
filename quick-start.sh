#!/usr/bin/bash
# Bamenda E-Governance Platform - Quick Start Commands
# Run from project root: ./quick-start.sh

echo "🏛️  Bamenda City Council E-Governance Platform - Setup Assistant"
echo "================================================================"

# Colors
GREEN='\033[0;32m'
BLUE='\033[0;34m'
YELLOW='\033[1;33m'
NC='\033[0m'

# Menu
show_menu() {
    echo -e "\n${BLUE}What would you like to do?${NC}"
    echo "1. Setup credentials (MUST DO FIRST)"
    echo "2. Run export tests"
    echo "3. Check API endpoints"
    echo "4. Create database tables"
    echo "5. Generate sample test data"
    echo "6. View documentation"
    echo "7. Check system requirements"
    echo "0. Exit"
    echo -n "Enter choice: "
}

while true; do
    show_menu
    read choice
    
    case $choice in
        1)
            echo -e "\n${BLUE}Setting up credentials...${NC}"
            if [ ! -f config/app/credentials.php ]; then
                cp config/app/credentials.example.php config/app/credentials.php
                echo -e "${GREEN}✓ credentials.php created${NC}"
                echo "📝 Please edit: nano config/app/credentials.php"
                echo "   and fill in your API keys:"
                echo "   - Stripe PUBLIC and SECRET keys"
                echo "   - Email/SMTP settings"
                echo "   - Twilio credentials (optional)"
                echo "   - PayPal credentials (optional)"
            else
                echo -e "${YELLOW}⚠ credentials.php already exists${NC}"
            fi
            ;;
        2)
            echo -e "\n${BLUE}Running export tests...${NC}"
            php test-exports.php
            ;;
        3)
            echo -e "\n${BLUE}Available API Endpoints:${NC}"
            echo ""
            echo "Profile Management:"
            echo "  GET  /api/profile-handler.php?action=get_profile"
            echo "  POST /api/profile-handler.php?action=update_profile"
            echo ""
            echo "Documents:"
            echo "  POST /api/file-upload-handler.php?action=upload_document"
            echo "  POST /api/file-upload-handler.php?action=upload_avatar"
            echo ""
            echo "Payments:"
            echo "  GET  /api/payment-handler.php?action=get_payment_methods"
            echo "  POST /api/payment-handler.php?action=create_payment_intent"
            echo ""
            echo "2FA:"
            echo "  POST /core/two-factor-auth.php?action=enable_2fa"
            echo "  POST /core/two-factor-auth.php?action=verify_2fa_setup"
            echo ""
            echo "Notifications:"
            echo "  POST /core/notification-service.php?action=send_email"
            echo "  POST /core/notification-service.php?action=send_sms"
            echo ""
            echo "Exports:"
            echo "  GET  /api/export-handler.php?action=export_invoice"
            echo "  GET  /api/export-handler.php?action=export_certificate"
            echo ""
            ;;
        4)
            echo -e "\n${BLUE}Creating database tables...${NC}"
            php config/database/database.php
            echo -e "${GREEN}✓ Database tables created${NC}"
            ;;
        5)
            echo -e "\n${BLUE}Creating sample data...${NC}"
            php test-exports.php sample-data
            echo -e "${GREEN}✓ Sample data created${NC}"
            ;;
        6)
            echo -e "\n${BLUE}Documentation:${NC}"
            echo ""
            if [ -f FRONTEND_INTEGRATION_GUIDE.md ]; then
                head -50 FRONTEND_INTEGRATION_GUIDE.md
                echo ""
                echo "📖 Full guide: less FRONTEND_INTEGRATION_GUIDE.md"
            else
                echo "Documentation file not found"
            fi
            ;;
        7)
            echo -e "\n${BLUE}System Requirements:${NC}"
            echo "Checking..."
            echo ""
            
            # PHP
            if command -v php &> /dev/null; then
                PHP_VERSION=$(php -r 'echo PHP_VERSION;')
                echo -e "${GREEN}✓${NC} PHP $PHP_VERSION"
            else
                echo -e "${YELLOW}✗${NC} PHP not found"
            fi
            
            # MySQL
            if command -v mysql &> /dev/null; then
                echo -e "${GREEN}✓${NC} MySQL installed"
            else
                echo -e "${YELLOW}✗${NC} MySQL not found"
            fi
            
            # Required PHP Extensions
            php -m | grep -q mysqli && echo -e "${GREEN}✓${NC} mysqli extension" || echo -e "${YELLOW}✗${NC} mysqli extension missing"
            php -m | grep -q gd && echo -e "${GREEN}✓${NC} GD extension (for images)" || echo -e "${YELLOW}✗${NC} GD extension missing"
            php -m | grep -q curl && echo -e "${GREEN}✓${NC} cURL extension (for APIs)" || echo -e "${YELLOW}✗${NC} cURL extension missing"
            
            # Directories
            [ -w uploads ] && echo -e "${GREEN}✓${NC} uploads directory writable" || echo -e "${YELLOW}✗${NC} uploads not writable (chmod 755)"
            [ -w logs ] && echo -e "${GREEN}✓${NC} logs directory writable" || echo -e "${YELLOW}✗${NC} logs not writable (mkdir logs && chmod 755)"
            ;;
        0)
            echo "Goodbye!"
            exit 0
            ;;
        *)
            echo "Invalid choice. Please try again."
            ;;
    esac
done
