<?php
/**
 * Bamenda City Council E-Governance Platform
 * Enhanced Navigation System
 */

// Include access control first to get session variables
require_once __DIR__ . '/../core/access-control.php';

class EnhancedNavigation {
    private $navItems = [
        'home' => [
            'title' => 'Home',
            'url' => '/stitch1/index.php',
            'icon' => 'home',
            'section' => 'main'
        ],
        'services' => [
            'title' => 'Services',
            'url' => '/stitch1/pages/citizen-services/services.php',
            'icon' => 'gavel',
            'section' => 'citizen-services',
            'dropdown' => [
                'citizen_services' => [
                    'title' => 'Citizen Services',
                    'url' => '/stitch1/pages/citizen-services/services.php',
                    'icon' => 'gavel',
                    'description' => 'Access permits, licenses, and public services'
                ],
                'business_services' => [
                    'title' => 'Business Services',
                    'url' => '/stitch1/pages/business/index.php',
                    'icon' => 'business',
                    'description' => 'Business licensing, market access, and development'
                ],
                'youth_programs' => [
                    'title' => 'Youth Programs',
                    'url' => '/stitch1/pages/youth/index.php',
                    'icon' => 'school',
                    'description' => 'Youth council, employment, and skill development'
                ],
                'emergency_services' => [
                    'title' => 'Emergency Services',
                    'url' => '/stitch1/pages/emergency/index.php',
                    'icon' => 'emergency',
                    'description' => 'Emergency alerts, contacts, and resources'
                ],
                'public_services' => [
                    'title' => 'Public Services',
                    'url' => '/stitch1/pages/public-services/civil-status.php',
                    'icon' => 'account_balance',
                    'description' => 'Civil status, certificates, and notary services'
                ],
                'civic_engagement' => [
                    'title' => 'Civic Engagement',
                    'url' => '/stitch1/pages/civic-engagement/consultations.php',
                    'icon' => 'groups',
                    'description' => 'Community forums, consultations, and participation'
                ]
            ]
        ],
        'payments' => [
            'title' => 'Payments',
            'url' => '/stitch1/pages/citizen-services/payments.php',
            'icon' => 'payments',
            'section' => 'citizen-services'
        ],
        'dashboard' => [
            'title' => 'Dashboard',
            'url' => '/stitch1/pages/citizen-services/dashboard.php',
            'icon' => 'dashboard',
            'section' => 'user',
            'requires_auth' => true
        ],
        'profile' => [
            'title' => 'Profile',
            'url' => '/stitch1/pages/citizen-services/profile.php',
            'icon' => 'person',
            'section' => 'user',
            'requires_auth' => true
        ]
    ];
    
    public function render() {
        $isAuthenticated = is_authenticated();
        $userRole = get_user_role();
        
        ?>
        <nav class="enhanced-navigation">
            <div class="nav-container">
                <!-- Brand Logo -->
                <div class="nav-brand">
                    <a href="/stitch1/index.php" class="brand-link">
                        <div class="brand-icon">
                            <?php echo render_icon('account_balance', '', '32px'); ?>
                        </div>
                        <div class="brand-text">
                            <span class="brand-name">Bamenda City Council</span>
                            <span class="brand-tagline">E-Governance Platform</span>
                        </div>
                    </a>
                </div>
                
                <!-- Main Navigation -->
                <div class="nav-menu">
                    <ul class="nav-list">
                        <?php foreach ($this->navItems as $key => $item): ?>
                            <?php if (($item['requires_auth'] ?? false) && !$isAuthenticated) continue; ?>
                            
                            <li class="nav-item">
                                <?php if (isset($item['dropdown'])): ?>
                                    <!-- Dropdown Menu -->
                                    <div class="dropdown-nav">
                                        <button class="nav-link dropdown-toggle" 
                                                onclick="toggleDropdown('<?php echo $key; ?>')"
                                                aria-expanded="false">
                                            <?php echo render_icon($item['icon'], '', '20px'); ?>
                                            <span><?php echo $item['title']; ?></span>
                                            <?php echo render_icon('arrow_drop_down', '', '20px'); ?>
                                        </button>
                                        
                                        <div class="dropdown-menu" id="dropdown-<?php echo $key; ?>">
                                            <?php foreach ($item['dropdown'] as $subKey => $subItem): ?>
                                                <a href="<?php echo $subItem['url']; ?>" class="dropdown-item">
                                                    <div class="dropdown-item-icon">
                                                        <?php echo render_icon($subItem['icon'], '', '20px'); ?>
                                                    </div>
                                                    <div class="dropdown-item-content">
                                                        <div class="dropdown-item-title"><?php echo $subItem['title']; ?></div>
                                                        <?php if (isset($subItem['description'])): ?>
                                                            <div class="dropdown-item-description"><?php echo $subItem['description']; ?></div>
                                                        <?php endif; ?>
                                                    </div>
                                                </a>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                <?php else: ?>
                                    <!-- Single Link -->
                                    <a href="<?php echo $item['url']; ?>" class="nav-link">
                                        <?php echo render_icon($item['icon'], '', '20px'); ?>
                                        <span><?php echo $item['title']; ?></span>
                                    </a>
                                <?php endif; ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                
                <!-- User Section -->
                <div class="nav-user">
                    <?php if ($isAuthenticated): ?>
                        <!-- Notifications -->
                        <div class="nav-notifications">
                            <button class="nav-icon-btn" onclick="toggleNotifications()">
                                <?php echo render_icon('notifications', '', '20px'); ?>
                                <span class="notification-badge" id="notificationCount">0</span>
                            </button>
                            
                            <div class="notifications-dropdown" id="notificationDropdown">
                                <div class="notifications-header">
                                    <h3>Notifications</h3>
                                    <button class="btn btn-sm btn-outline" onclick="markAllRead()">Mark all read</button>
                                </div>
                                <div class="notifications-list">
                                    <div class="notification-item unread">
                                        <div class="notification-icon">
                                            <?php echo render_icon('warning', '', '20px'); ?>
                                        </div>
                                        <div class="notification-content">
                                            <h4>System Alert</h4>
                                            <p>Server CPU usage above 80%</p>
                                            <span class="notification-time">5 minutes ago</span>
                                        </div>
                                    </div>
                                    <div class="notification-item unread">
                                        <div class="notification-icon">
                                            <?php echo render_icon('person_add', '', '20px'); ?>
                                        </div>
                                        <div class="notification-content">
                                            <h4>New User Registration</h4>
                                            <p>25 new users registered today</p>
                                            <span class="notification-time">1 hour ago</span>
                                        </div>
                                    </div>
                                    <div class="notification-item unread">
                                        <div class="notification-icon">
                                            <?php echo render_icon('description', '', '20px'); ?>
                                        </div>
                                        <div class="notification-content">
                                            <h4>Service Request</h4>
                                            <p>15 pending service requests</p>
                                            <span class="notification-time">2 hours ago</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="notifications-footer">
                                    <a href="#" class="view-all-notifications">View all notifications</a>
                                </div>
                            </div>
                            
                            <!-- User Profile -->
                            <div class="nav-profile">
                                <button class="nav-profile-btn" onclick="toggleProfile()">
                                    <div class="user-avatar">
                                        <img src="<?php echo get_user_avatar($_SESSION['user_id'], 'small'); ?>" alt="User Avatar" class="avatar-img">
                                    </div>
                                    <div class="user-info">
                                        <span class="user-name"><?php echo get_user_display_name(); ?></span>
                                        <span class="user-role"><?php echo ucfirst($userRole); ?></span>
                                    </div>
                                    <?php echo render_icon('arrow_drop_down', '', '20px'); ?>
                                </button>
                                
                                <div class="profile-dropdown" id="profileDropdown">
                                    <div class="profile-header">
                                        <div class="profile-avatar">
                                            <img src="<?php echo get_user_avatar($_SESSION['user_id'], 'large'); ?>" alt="User Avatar" class="avatar-img-large">
                                        </div>
                                        <div class="profile-info">
                                            <h4><?php echo get_user_display_name(); ?></h4>
                                            <p><?php echo get_user_email(); ?></p>
                                            <span class="profile-role"><?php echo ucfirst($userRole); ?></span>
                                        </div>
                                    </div>
                                    <div class="profile-menu">
                                        <a href="/stitch1/pages/citizen-services/profile.php" class="profile-menu-item">
                                            <?php echo render_icon('person', '', '20px'); ?>
                                            <span>Profile</span>
                                        </a>
                                        <a href="/stitch1/pages/citizen-services/settings.php" class="profile-menu-item">
                                            <?php echo render_icon('settings', '', '20px'); ?>
                                            <span>Settings</span>
                                        </a>
                                        <div class="profile-divider"></div>
                                        <a href="/stitch1/pages/auth/logout.php" class="profile-menu-item logout">
                                            <?php echo render_icon('logout', '', '20px'); ?>
                                            <span>Sign Out</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                    <?php else: ?>
                        <!-- Auth Buttons -->
                        <div class="nav-actions">
                            <a href="/stitch1/pages/auth/login.php" class="btn btn-outline btn-sm">
                                <?php echo render_icon('login', '', '16px'); ?>
                                Sign In
                            </a>
                            <a href="/stitch1/pages/auth/register.php" class="btn btn-primary btn-sm">
                                <?php echo render_icon('person_add', '', '16px'); ?>
                                Create Account
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
                
                <!-- Mobile Menu Toggle -->
                <div class="mobile-menu-toggle">
                    <button class="mobile-menu-btn" onclick="toggleMobileMenu()">
                        <?php echo render_icon('menu', '', '24px'); ?>
                    </button>
                </div>
            </div>
        </nav>
        
        <!-- Mobile Navigation -->
        <div class="mobile-navigation" id="mobileNavigation">
            <div class="mobile-nav-header">
                <div class="mobile-nav-brand">
                    <div class="brand-icon">
                        <?php echo render_icon('account_balance', '', '32px'); ?>
                    </div>
                    <div class="brand-text">
                        <span class="brand-name">Bamenda City Council</span>
                        <span class="brand-tagline">E-Governance Platform</span>
                    </div>
                </div>
                <button class="mobile-nav-close" onclick="toggleMobileMenu()">
                    <?php echo render_icon('close', '', '24px'); ?>
                </button>
            </div>
            
            <?php if ($isAuthenticated): ?>
                <div class="mobile-user-profile">
                    <div class="mobile-user-avatar">
                        <img src="<?php echo get_user_avatar($_SESSION['user_id'], 'large'); ?>" alt="User Avatar" class="mobile-avatar-img">
                    </div>
                    <div class="mobile-user-info">
                        <h4><?php echo get_user_display_name(); ?></h4>
                        <p><?php echo get_user_email(); ?></p>
                        <span class="mobile-user-role"><?php echo ucfirst($userRole); ?></span>
                    </div>
                </div>
            <?php endif; ?>
            
            <!-- Mobile Navigation Links -->
            <ul class="mobile-nav-list">
                <?php foreach ($this->navItems as $key => $item): ?>
                    <?php if (($item['requires_auth'] ?? false) && !$isAuthenticated) continue; ?>
                    
                    <li class="mobile-nav-item">
                        <?php if (isset($item['dropdown'])): ?>
                            <div class="mobile-nav-dropdown">
                                <button class="mobile-nav-toggle" onclick="toggleMobileDropdown('<?php echo $key; ?>')">
                                    <?php echo render_icon($item['icon'], '', '20px'); ?>
                                    <span><?php echo $item['title']; ?></span>
                                    <?php echo render_icon('arrow_drop_down', '', '20px'); ?>
                                </button>
                                
                                <div class="mobile-dropdown-menu" id="mobile-dropdown-<?php echo $key; ?>">
                                    <?php foreach ($item['dropdown'] as $subKey => $subItem): ?>
                                        <a href="<?php echo $subItem['url']; ?>" class="mobile-dropdown-item">
                                            <?php echo render_icon($subItem['icon'], '', '20px'); ?>
                                            <span><?php echo $subItem['title']; ?></span>
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php else: ?>
                            <a href="<?php echo $item['url']; ?>" class="mobile-nav-link">
                                <?php echo render_icon($item['icon'], '', '20px'); ?>
                                <span><?php echo $item['title']; ?></span>
                            </a>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
            
            <?php if ($isAuthenticated): ?>
                <div class="mobile-nav-divider"></div>
                <div class="mobile-nav-actions">
                    <a href="/stitch1/pages/citizen-services/dashboard.php" class="mobile-nav-btn mobile-nav-btn-primary">
                        <?php echo render_icon('dashboard', '', '20px'); ?>
                        <span>Dashboard</span>
                    </a>
                    <a href="/stitch1/pages/citizen-services/profile.php" class="mobile-nav-btn mobile-nav-btn-secondary">
                        <?php echo render_icon('person', '', '20px'); ?>
                        <span>Profile</span>
                    </a>
                </div>
                <div class="mobile-nav-divider"></div>
                <div class="mobile-nav-logout">
                    <a href="/stitch1/pages/auth/logout.php" class="mobile-nav-btn mobile-nav-btn-danger">
                        <?php echo render_icon('logout', '', '20px'); ?>
                        <span>Sign Out</span>
                    </a>
                </div>
            <?php else: ?>
                <div class="mobile-nav-actions">
                    <a href="/stitch1/pages/auth/login.php" class="mobile-nav-btn mobile-nav-btn-primary">
                        <?php echo render_icon('login', '', '20px'); ?>
                        <span>Sign In</span>
                    </a>
                    <a href="/stitch1/pages/auth/register.php" class="mobile-nav-btn mobile-nav-btn-secondary">
                        <?php echo render_icon('person_add', '', '20px'); ?>
                        <span>Create Account</span>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </nav>
        
        <script>
        // Toggle desktop dropdowns
        function toggleDropdown(key) {
            const dropdown = document.getElementById('dropdown-' + key);
            const button = dropdown.previousElementSibling.querySelector('.dropdown-toggle');
            
            if (dropdown.classList.contains('show')) {
                dropdown.classList.remove('show');
                button.setAttribute('aria-expanded', 'false');
            } else {
                // Close other dropdowns
                document.querySelectorAll('.dropdown-menu.show').forEach(menu => {
                    menu.classList.remove('show');
                });
                
                dropdown.classList.add('show');
                button.setAttribute('aria-expanded', 'true');
            }
        }
        
        // Toggle mobile menu
        function toggleMobileMenu() {
            const mobileNav = document.getElementById('mobileNavigation');
            const body = document.body;
            
            if (mobileNav.classList.contains('show')) {
                mobileNav.classList.remove('show');
                body.style.overflow = '';
            } else {
                mobileNav.classList.add('show');
                body.style.overflow = 'hidden';
            }
        }
        
        // Toggle mobile dropdowns
        function toggleMobileDropdown(key) {
            const dropdown = document.getElementById('mobile-dropdown-' + key);
            const button = dropdown.previousElementSibling;
            
            if (dropdown.classList.contains('show')) {
                dropdown.classList.remove('show');
                button.innerHTML = '<?php echo render_icon('arrow_drop_down', '', '20px'); ?>';
            } else {
                dropdown.classList.add('show');
                button.innerHTML = '<?php echo render_icon('arrow_drop_up', '', '20px'); ?>';
            }
        }
        
        // Toggle notifications
        function toggleNotifications() {
            const dropdown = document.getElementById('notificationDropdown');
            const button = dropdown.previousElementSibling;
            
            if (dropdown.classList.contains('show')) {
                dropdown.classList.remove('show');
            } else {
                // Close other dropdowns
                document.querySelectorAll('.dropdown-menu.show').forEach(menu => {
                    menu.classList.remove('show');
                });
                
                dropdown.classList.add('show');
            }
        }
        
        // Toggle profile
        function toggleProfile() {
            const dropdown = document.getElementById('profileDropdown');
            const button = dropdown.previousElementSibling;
            
            if (dropdown.classList.contains('show')) {
                dropdown.classList.remove('show');
                button.innerHTML = '<?php echo render_icon('arrow_drop_down', '', '20px'); ?>';
            } else {
                // Close other dropdowns
                document.querySelectorAll('.dropdown-menu.show').forEach(menu => {
                    menu.classList.remove('show');
                });
                
                dropdown.classList.add('show');
                button.innerHTML = '<?php echo render_icon('arrow_drop_up', '', '20px'); ?>';
            }
        }
        
        // Mark all notifications as read
        function markAllRead() {
            const unreadItems = document.querySelectorAll('.notification-item.unread');
            unreadItems.forEach(item => {
                item.classList.remove('unread');
            });
            
            // Update badge count
            const badge = document.getElementById('notificationCount');
            if (badge) {
                badge.textContent = '0';
                badge.style.display = 'none';
            }
        }
        
        // Close dropdowns when clicking outside
        document.addEventListener('click', function(event) {
            if (!event.target.closest('.dropdown-nav, .notifications-dropdown, .profile-dropdown')) {
                document.querySelectorAll('.dropdown-menu.show').forEach(menu => {
                    menu.classList.remove('show');
                });
                
                document.querySelectorAll('.dropdown-toggle').forEach(button => {
                    button.setAttribute('aria-expanded', 'false');
                });
            }
        });
        </script>
        
        <style>
        /* Enhanced Navigation Styles */
        .enhanced-navigation {
            background: var(--surface);
            border-bottom: 1px solid var(--outline-variant);
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: var(--shadow-sm);
        }
        
        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 64px;
        }
        
        .nav-brand .brand-link {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            text-decoration: none;
            color: var(--on-surface);
            transition: all 0.2s ease;
        }
        
        .nav-brand .brand-link:hover {
            color: var(--primary);
        }
        
        .brand-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: var(--primary);
            color: var(--on-primary);
            border-radius: 50%;
            font-size: 24px;
        }
        
        .brand-text {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }
        
        .brand-name {
            font-size: 1.125rem;
            font-weight: 600;
            line-height: 1.2;
            color: var(--on-surface);
        }
        
        .brand-tagline {
            font-size: 0.75rem;
            color: var(--on-surface-variant);
            line-height: 1;
        }
        
        .nav-menu {
            flex: 1;
        }
        
        .nav-list {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            list-style: none;
            margin: 0;
            padding: 0;
        }
        
        .nav-item {
            position: relative;
        }
        
        .nav-link {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.5rem 1rem;
            color: var(--on-surface);
            text-decoration: none;
            border-radius: 0.375rem;
            transition: all 0.2s ease;
            font-weight: 500;
        }
        
        .nav-link:hover {
            background: var(--surface-container-low);
            color: var(--primary);
        }
        
        .nav-link.active {
            background: var(--primary-container);
            color: var(--on-primary-container);
        }
        
        .dropdown-nav {
            position: relative;
        }
        
        .dropdown-toggle {
            background: none;
            border: none;
            cursor: pointer;
        }
        
        .dropdown-menu {
            position: absolute;
            top: 100%;
            left: 0;
            background: var(--surface);
            border: 1px solid var(--outline-variant);
            border-radius: 0.5rem;
            box-shadow: var(--shadow-lg);
            min-width: 280px;
            opacity: 0;
            visibility: hidden;
            transform: translateY(-10px);
            transition: all 0.2s ease;
            z-index: 1001;
        }
        
        .dropdown-menu.show {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }
        
        .dropdown-item {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            padding: 0.75rem 1rem;
            color: var(--on-surface);
            text-decoration: none;
            transition: all 0.2s ease;
        }
        
        .dropdown-item:hover {
            background: var(--surface-container-low);
            color: var(--primary);
        }
        
        .dropdown-item-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 32px;
            height: 32px;
            background: var(--surface-container-low);
            border-radius: 50%;
            flex-shrink: 0;
        }
        
        .dropdown-item-content {
            flex: 1;
            min-width: 0;
        }
        
        .dropdown-item-title {
            display: block;
            font-weight: 500;
            line-height: 1.2;
            color: var(--on-surface);
        }
        
        .dropdown-item-description {
            display: block;
            font-size: 0.875rem;
            color: var(--on-surface-variant);
            line-height: 1.3;
            margin-top: 0.25rem;
        }
        
        .nav-user {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .nav-icon-btn {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: none;
            border: none;
            color: var(--on-surface-variant);
            border-radius: 50%;
            cursor: pointer;
            transition: all 0.2s ease;
        }
        
        .nav-icon-btn:hover {
            background: var(--surface-container-low);
            color: var(--primary);
        }
        
        .notification-badge {
            position: absolute;
            top: 4px;
            right: 4px;
            min-width: 16px;
            height: 16px;
            background: var(--error);
            color: var(--on-error);
            border-radius: 8px;
            font-size: 0.75rem;
            font-weight: 600;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0 4px;
        }
        
        .nav-profile-btn {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.5rem;
            background: none;
            border: 1px solid var(--outline-variant);
            border-radius: 0.5rem;
            cursor: pointer;
            transition: all 0.2s ease;
        }
        
        .nav-profile-btn:hover {
            background: var(--surface-container-low);
            border-color: var(--outline);
        }
        
        .user-avatar {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            overflow: hidden;
        }
        
        .avatar-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .user-info {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }
        
        .user-name {
            font-size: 0.875rem;
            font-weight: 500;
            line-height: 1.2;
            color: var(--on-surface);
        }
        
        .user-role {
            font-size: 0.75rem;
            color: var(--on-surface-variant);
            line-height: 1;
        }
        
        .profile-dropdown,
        .notifications-dropdown {
            position: absolute;
            top: 100%;
            right: 0;
            background: var(--surface);
            border: 1px solid var(--outline-variant);
            border-radius: 0.5rem;
            box-shadow: var(--shadow-lg);
            min-width: 320px;
            opacity: 0;
            visibility: hidden;
            transform: translateY(-10px);
            transition: all 0.2s ease;
            z-index: 1001;
        }
        
        .profile-dropdown.show,
        .notifications-dropdown.show {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }
        
        .profile-header {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 1rem;
            border-bottom: 1px solid var(--outline-variant);
        }
        
        .profile-avatar {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            overflow: hidden;
        }
        
        .profile-avatar-large {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .profile-info h4 {
            margin: 0 0 0.25rem 0;
            font-size: 1rem;
            font-weight: 600;
            color: var(--on-surface);
        }
        
        .profile-info p {
            margin: 0 0 0.25rem 0;
            font-size: 0.875rem;
            color: var(--on-surface-variant);
            line-height: 1.3;
        }
        
        .profile-role {
            font-size: 0.75rem;
            color: var(--primary);
            font-weight: 500;
            padding: 0.25rem 0;
            border-radius: 0.25rem;
            background: var(--primary-container);
        }
        
        .profile-menu {
            padding: 0.5rem;
        }
        
        .profile-menu-item {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            padding: 0.75rem 1rem;
            color: var(--on-surface);
            text-decoration: none;
            border-radius: 0.375rem;
            transition: all 0.2s ease;
        }
        
        .profile-menu-item:hover {
            background: var(--surface-container-low);
            color: var(--primary);
        }
        
        .profile-divider {
            height: 1px;
            background: var(--outline-variant);
            margin: 0.5rem 0;
        }
        
        .profile-menu-item.logout {
            color: var(--error);
        }
        
        .profile-menu-item.logout:hover {
            background: var(--error-container);
            color: var(--on-error);
        }
        
        .nav-actions {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .mobile-menu-toggle {
            display: none;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: none;
            border: none;
            color: var(--on-surface-variant);
            border-radius: 50%;
            cursor: pointer;
            transition: all 0.2s ease;
        }
        
        .mobile-menu-toggle:hover {
            background: var(--surface-container-low);
            color: var(--primary);
        }
        
        .mobile-navigation {
            position: fixed;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100vh;
            background: var(--surface);
            z-index: 1002;
            transition: left 0.3s ease;
            overflow-y: auto;
        }
        
        .mobile-navigation.show {
            left: 0;
        }
        
        .mobile-nav-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1rem;
            border-bottom: 1px solid var(--outline-variant);
            background: var(--surface-container-low);
        }
        
        .mobile-nav-brand {
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }
        
        .mobile-nav-close {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: none;
            border: none;
            color: var(--on-surface-variant);
            border-radius: 50%;
            cursor: pointer;
            transition: all 0.2s ease;
        }
        
        .mobile-nav-close:hover {
            background: var(--surface-container-low);
            color: var(--primary);
        }
        
        .mobile-user-profile {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 1rem;
            background: var(--surface-container-low);
            border-radius: 0.5rem;
        }
        
        .mobile-user-avatar {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            overflow: hidden;
        }
        
        .mobile-avatar-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .mobile-user-info {
            text-align: center;
        }
        
        .mobile-user-info h4 {
            margin: 0 0 0.25rem 0;
            font-size: 1rem;
            font-weight: 600;
            color: var(--on-surface);
        }
        
        .mobile-user-info p {
            margin: 0 0 0.25rem 0;
            font-size: 0.875rem;
            color: var(--on-surface-variant);
            line-height: 1.3;
        }
        
        .mobile-user-role {
            font-size: 0.75rem;
            color: var(--primary);
            font-weight: 500;
            padding: 0.25rem 0;
            border-radius: 0.25rem;
            background: var(--primary-container);
        }
        
        .mobile-nav-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        .mobile-nav-item {
            margin-bottom: 0.5rem;
        }
        
        .mobile-nav-dropdown {
            background: var(--surface-container-low);
            border-radius: 0.5rem;
            margin: 0.25rem 0;
            overflow: hidden;
            max-height: 0;
            transition: max-height 0.3s ease;
        }
        
        .mobile-nav-dropdown.show {
            max-height: 300px;
        }
        
        .mobile-nav-toggle {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            padding: 0.75rem 1rem;
            background: var(--surface);
            border: 1px solid var(--outline-variant);
            border-radius: 0.375rem;
            cursor: pointer;
            transition: all 0.2s ease;
        }
        
        .mobile-nav-link {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            padding: 0.75rem 1rem;
            color: var(--on-surface);
            text-decoration: none;
            border-radius: 0.375rem;
            transition: all 0.2s ease;
        }
        
        .mobile-nav-link:hover {
            background: var(--surface-container-low);
            color: var(--primary);
        }
        
        .mobile-dropdown-menu {
            padding: 0.5rem;
        }
        
        .mobile-dropdown-item {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            padding: 0.75rem 1rem;
            color: var(--on-surface);
            text-decoration: none;
            border-radius: 0.375rem;
            transition: all 0.2s ease;
        }
        
        .mobile-dropdown-item:hover {
            background: var(--surface-container-low);
            color: var(--primary);
        }
        
        .mobile-nav-divider {
            height: 1px;
            background: var(--outline-variant);
            margin: 1rem 0;
        }
        
        .mobile-nav-actions {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
            padding: 1rem;
        }
        
        .mobile-nav-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.75rem;
            padding: 0.75rem 1rem;
            background: var(--surface);
            border: 1px solid var(--outline-variant);
            border-radius: 0.375rem;
            cursor: pointer;
            transition: all 0.2s ease;
        }
        
        .mobile-nav-btn-primary {
            background: var(--primary);
            border-color: var(--primary);
            color: var(--on-primary);
        }
        
        .mobile-nav-btn-primary:hover {
            background: var(--primary-dark);
            border-color: var(--primary-dark);
        }
        
        .mobile-nav-btn-secondary {
            background: var(--surface);
            border-color: var(--outline);
            color: var(--on-surface);
        }
        
        .mobile-nav-btn-secondary:hover {
            background: var(--surface-container-low);
            color: var(--primary);
        }
        
        .mobile-nav-btn-danger {
            background: var(--error);
            border-color: var(--error);
            color: var(--on-error);
        }
        
        .mobile-nav-btn-danger:hover {
            background: var(--error-dark);
            border-color: var(--error-dark);
        }
        
        /* Notifications Dropdown */
        .notifications-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1rem;
            border-bottom: 1px solid var(--outline-variant);
        }
        
        .notifications-header h3 {
            margin: 0;
            font-size: 1rem;
            font-weight: 600;
            color: var(--on-surface);
        }
        
        .notifications-header .btn {
            padding: 0.25rem 0.75rem;
            font-size: 0.75rem;
            border-radius: 0.25rem;
            border: 1px solid var(--outline);
            background: none;
            color: var(--on-surface);
            cursor: pointer;
            transition: all 0.2s ease;
        }
        
        .notifications-header .btn:hover {
            background: var(--surface-container-low);
            color: var(--primary);
        }
        
        .notifications-list {
            max-height: 300px;
            overflow-y: auto;
        }
        
        .notification-item {
            display: flex;
            align-items: flex-start;
            gap: 0.75rem;
            padding: 0.75rem 1rem;
            border-bottom: 1px solid var(--outline-variant);
            transition: all 0.2s ease;
        }
        
        .notification-item:hover {
            background: var(--surface-container-low);
        }
        
        .notification-item.unread {
            background: var(--primary-container);
        }
        
        .notification-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 32px;
            height: 32px;
            background: var(--surface-container-low);
            border-radius: 50%;
            flex-shrink: 0;
        }
        
        .notification-content {
            flex: 1;
            min-width: 0;
        }
        
        .notification-content h4 {
            margin: 0 0 0.25rem 0;
            font-size: 0.875rem;
            font-weight: 500;
            line-height: 1.2;
            color: var(--on-surface);
        }
        
        .notification-content p {
            margin: 0 0 0.25rem 0;
            font-size: 0.75rem;
            color: var(--on-surface-variant);
            line-height: 1.3;
        }
        
        .notification-time {
            font-size: 0.625rem;
            color: var(--on-surface-variant);
            line-height: 1;
        }
        
        .notification-actions {
            display: flex;
            align-items: center;
        }
        
        .notifications-footer {
            padding: 0.75rem 1rem;
            text-align: center;
        }
        
        .view-all-notifications {
            color: var(--primary);
            text-decoration: none;
            font-size: 0.875rem;
            font-weight: 500;
            transition: all 0.2s ease;
        }
        
        .view-all-notifications:hover {
            color: var(--primary-dark);
            text-decoration: underline;
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .nav-menu {
                display: none;
            }
            
            .mobile-menu-toggle {
                display: flex;
            }
            
            .nav-user {
                gap: 0.25rem;
            }
            
            .notification-badge {
                top: 2px;
                right: 2px;
            }
        }
        
        @media (max-width: 480px) {
            .nav-container {
                padding: 0 0.75rem;
            }
            
            .brand-name {
                font-size: 1rem;
            }
            
            .brand-tagline {
                display: none;
            }
            
            .nav-user {
                flex-direction: column;
                gap: 0.25rem;
            }
            
            .user-info {
                align-items: center;
                text-align: center;
            }
            
            .profile-dropdown,
            .notifications-dropdown {
                right: -1rem;
                left: auto;
                width: calc(100vw - 2rem);
                max-width: 280px;
            }
            
            .mobile-nav-actions {
                padding: 0.75rem;
            }
        }
        </style>
        <?php
    }
}

// Global function to render enhanced navigation
function render_enhanced_navigation() {
    $navigation = new EnhancedNavigation();
    $navigation->render();
}
?>
