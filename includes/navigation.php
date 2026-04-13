<?php
/**
 * Bamenda City Council E-Governance Platform
 * Navigation Component
 */

// Include access control first to get session variables
require_once __DIR__ . '/../core/access-control.php';

// Get current page for active state
$current_page = basename($_SERVER['PHP_SELF']);
$current_section = 'main';

// Determine current section based on URL
if (strpos($current_page, 'citizen-services') !== false) {
    $current_section = 'citizen-services';
} elseif (strpos($current_page, 'civic-engagement') !== false) {
    $current_section = 'civic-engagement';
} elseif (strpos($current_page, 'emergency') !== false) {
    $current_section = 'emergency';
} elseif (strpos($current_page, 'youth') !== false) {
    $current_section = 'youth';
} elseif (strpos($current_page, 'public-services') !== false) {
    $current_section = 'public-services';
} elseif (strpos($current_page, 'business') !== false) {
    $current_section = 'business';
} elseif (strpos($current_page, 'administration') !== false) {
    $current_section = 'administration';
} elseif (strpos($current_page, 'auth') !== false) {
    $current_section = 'auth';
}

// Check if user is logged in
$is_logged_in = is_authenticated();
$user_role = get_user_role();
$user_name = get_user_display_name();
$user_email = get_user_email();

// Determine dashboard URL based on user role
$dashboard_url = '/pages/citizen-services/dashboard.php';
if ($user_role === 'admin') {
    $dashboard_url = '/pages/administration/dashboard.php';
} elseif ($user_role === 'staff') {
    $dashboard_url = '/pages/administration/staff-portal.php';
}

// Define navigation structure
$nav_items = [
    'home' => [
        'title' => 'Home',
        'url' => '/index.php',
        'icon' => 'home',
        'section' => 'main'
    ],
    'services' => [
        'title' => 'Services',
        'url' => '/pages/citizen-services/services.php',
        'icon' => 'gavel',
        'section' => 'citizen-services',
        'dropdown' => [
            'business_license' => [
                'title' => 'Business License',
                'url' => '/pages/citizen-services/business-license.php',
                'icon' => 'business'
            ],
            'permits' => [
                'title' => 'Permits & Licenses',
                'url' => '/pages/citizen-services/permits.php',
                'icon' => 'description'
            ],
            'property_registry' => [
                'title' => 'Property Registry',
                'url' => '/pages/citizen-services/property-registry.php',
                'icon' => 'apartment'
            ],
            'tax_portal' => [
                'title' => 'Tax Portal',
                'url' => '/pages/citizen-services/tax-portal.php',
                'icon' => 'receipt'
            ],
            'payments' => [
                'title' => 'Online Payments',
                'url' => '/pages/citizen-services/payments.php',
                'icon' => 'payments'
            ],
            'service_history' => [
                'title' => 'Service History',
                'url' => '/pages/citizen-services/service-history.php',
                'icon' => 'history'
            ],
            'directory' => [
                'title' => 'City Directory',
                'url' => '/pages/citizen-services/directory.php',
                'icon' => 'contacts'
            ],
            'events' => [
                'title' => 'City Events',
                'url' => '/pages/citizen-services/events.php',
                'icon' => 'event'
            ],
            'business_license_app' => [
                'title' => 'License Application',
                'url' => '/pages/citizen-services/business-license-application.php',
                'icon' => 'description'
            ],
            'education' => [
                'title' => 'Civic Education',
                'url' => '/pages/citizen-services/education.php',
                'icon' => 'school'
            ],
            'health' => [
                'title' => 'Health Services',
                'url' => '/pages/citizen-services/health.php',
                'icon' => 'medical_services'
            ],
            'infrastructure' => [
                'title' => 'Infrastructure',
                'url' => '/pages/citizen-services/infrastructure.php',
                'icon' => 'construction'
            ],
            'transport' => [
                'title' => 'Public Transport',
                'url' => '/pages/citizen-services/transport.php',
                'icon' => 'directions_bus'
            ],
            'sanitation' => [
                'title' => 'Sanitation',
                'url' => '/pages/citizen-services/sanitation.php',
                'icon' => 'cleaning_services'
            ]
        ]
    ],
    'civic' => [
        'title' => 'Civic',
        'url' => '/pages/civic-engagement/index.php',
        'icon' => 'diversity_3',
        'section' => 'civic-engagement',
        'dropdown' => [
            'youth_council' => [
                'title' => 'Youth Council',
                'url' => '/pages/youth/youth-council.php',
                'icon' => 'school'
            ],
            'consultations' => [
                'title' => 'Public Consultations',
                'url' => '/pages/civic-engagement/consultations.php',
                'icon' => 'how_to_vote'
            ],
            'policy_proposal' => [
                'title' => 'Policy Proposal',
                'url' => '/pages/civic-engagement/policy-proposal.php',
                'icon' => 'lightbulb'
            ],
            'polls' => [
                'title' => 'Public Polls',
                'url' => '/pages/civic-engagement/polls.php',
                'icon' => 'poll'
            ],
            'volunteer' => [
                'title' => 'Volunteer',
                'url' => '/pages/civic-engagement/volunteer.php',
                'icon' => 'volunteer_activism'
            ],
            'town_hall' => [
                'title' => 'Town Hall Meetings',
                'url' => '/pages/civic-engagement/town-hall.php',
                'icon' => 'groups'
            ],
            'archives' => [
                'title' => 'Council Archives',
                'url' => '/pages/civic-engagement/archives.php',
                'icon' => 'archive'
            ],
            'live_stream' => [
                'title' => 'Live Meetings',
                'url' => '/pages/civic-engagement/live-stream.php',
                'icon' => 'live_tv'
            ],
            'transparency' => [
                'title' => 'Transparency Hub',
                'url' => '/pages/civic-engagement/transparency.php',
                'icon' => 'visibility'
            ]
        ]
    ],
    'emergency' => [
        'title' => 'Emergency',
        'url' => '/pages/emergency/index.php',
        'icon' => 'emergency_home',
        'section' => 'emergency',
        'dropdown' => [
            'alerts' => [
                'title' => 'Emergency Alerts',
                'url' => '/pages/emergency/alerts.php',
                'icon' => 'notifications_active'
            ],
            'create_alert' => [
                'title' => 'Create Alert',
                'url' => '/pages/emergency/create-alert.php',
                'icon' => 'add_alert'
            ],
            'crisis' => [
                'title' => 'Crisis Management',
                'url' => '/pages/emergency/crisis.php',
                'icon' => 'crisis_alert'
            ],
            'management' => [
                'title' => 'Crisis Management',
                'url' => '/pages/emergency/management.php',
                'icon' => 'health_and_safety'
            ],
            'recovery' => [
                'title' => 'Recovery Support',
                'url' => '/pages/emergency/recovery.php',
                'icon' => 'healing'
            ],
            'resources' => [
                'title' => 'Safety Resources',
                'url' => '/pages/emergency/resources.php',
                'icon' => 'medical_information'
            ]
        ]
    ],
    'youth' => [
        'title' => 'Youth',
        'url' => '/pages/youth/index.php',
        'icon' => 'school',
        'section' => 'youth',
        'dropdown' => [
            'youth_council' => [
                'title' => 'Youth Council',
                'url' => '/pages/youth/youth-council.php',
                'icon' => 'groups'
            ],
            'youth_application' => [
                'title' => 'Council Application',
                'url' => '/pages/youth/youth-council-application.php',
                'icon' => 'person_add'
            ],
            'employment' => [
                'title' => 'Employment Portal',
                'url' => '/pages/youth/employment.php',
                'icon' => 'work'
            ],
            'programs' => [
                'title' => 'Youth Programs',
                'url' => '/pages/youth/programs.php',
                'icon' => 'emoji_events'
            ],
            'grants' => [
                'title' => 'Grant Opportunities',
                'url' => '/pages/youth/grants.php',
                'icon' => 'savings'
            ],
            'leadership' => [
                'title' => 'Leadership Training',
                'url' => '/pages/youth/leadership.php',
                'icon' => 'psychology'
            ],
            'entrepreneurship' => [
                'title' => 'Entrepreneurship',
                'url' => '/pages/youth/entrepreneurship.php',
                'icon' => 'store'
            ]
        ]
    ],
    'public_services' => [
        'title' => 'Public Services',
        'url' => '/pages/public-services/index.php',
        'icon' => 'public',
        'section' => 'public-services',
        'dropdown' => [
            'civil_status' => [
                'title' => 'Civil Status Hub',
                'url' => '/pages/public-services/civil-status.php',
                'icon' => 'badge'
            ],
            'digital_id' => [
                'title' => 'Digital ID Wallet',
                'url' => '/pages/public-services/digital-id.php',
                'icon' => 'credit_card'
            ],
            'document_vault' => [
                'title' => 'Document Vault',
                'url' => '/pages/public-services/document-vault.php',
                'icon' => 'folder'
            ],
            'public_health' => [
                'title' => 'Public Health Hub',
                'url' => '/pages/public-services/health.php',
                'icon' => 'health_and_safety'
            ],
            'environmental' => [
                'title' => 'Environmental Zones',
                'url' => '/pages/public-services/environmental.php',
                'icon' => 'park'
            ],
            'city_map' => [
                'title' => 'Interactive City Map',
                'url' => '/pages/public-services/city-map.php',
                'icon' => 'map'
            ],
            'tenders' => [
                'title' => 'Public Tenders',
                'url' => '/pages/public-services/tenders.php',
                'icon' => 'gavel'
            ],
            'projects' => [
                'title' => 'Projects Showcase',
                'url' => '/pages/public-services/projects.php',
                'icon' => 'view_in_ar'
            ]
        ]
    ],
    'business' => [
        'title' => 'Business',
        'url' => '/pages/business/index.php',
        'icon' => 'business',
        'section' => 'business',
        'dropdown' => [
            'market_trader' => [
                'title' => 'Market Trader Portal',
                'url' => '/pages/business/market-trader.php',
                'icon' => 'storefront'
            ],
            'analytics' => [
                'title' => 'Business Analytics',
                'url' => '/pages/business/analytics.php',
                'icon' => 'analytics'
            ],
            'project_management' => [
                'title' => 'Project Management',
                'url' => '/pages/business/project-management.php',
                'icon' => 'assignment'
            ],
            'urban_planning' => [
                'title' => 'Urban Planning Permits',
                'url' => '/pages/business/urban-planning.php',
                'icon' => 'location_city'
            ]
        ]
    ]
];

// Add admin navigation items only for admin users
if ($is_logged_in && $user_role === 'admin') {
    $nav_items['admin'] = [
        'title' => 'Admin',
        'url' => '#',
        'icon' => 'admin_panel_settings',
        'section' => 'administration',
        'dropdown' => [
            'dashboard' => [
                'title' => 'Dashboard',
                'url' => '/pages/administration/dashboard.php',
                'icon' => 'dashboard'
            ],
            'staff_portal' => [
                'title' => 'Staff Portal',
                'url' => '/pages/administration/staff-portal.php',
                'icon' => 'badge'
            ],
            'analytics' => [
                'title' => 'Analytics & Reports',
                'url' => '/pages/administration/analytics.php',
                'icon' => 'analytics'
            ],
            'user_management' => [
                'title' => 'User Management',
                'url' => '/pages/administration/users.php',
                'icon' => 'people'
            ],
            'staff_tasks' => [
                'title' => 'Staff Tasks',
                'url' => '/pages/administration/staff-tasks.php',
                'icon' => 'assignment_turned_in'
            ],
            'attendance' => [
                'title' => 'Staff Attendance',
                'url' => '/pages/administration/attendance.php',
                'icon' => 'event_available'
            ],
            'settings' => [
                'title' => 'System Settings',
                'url' => '/pages/administration/settings.php',
                'icon' => 'settings'
            ],
            'archives' => [
                'title' => 'Archives',
                'url' => '/pages/administration/archives.php',
                'icon' => 'archive'
            ],
            'backup' => [
                'title' => 'Backup & Restore',
                'url' => '/pages/administration/backup.php',
                'icon' => 'backup'
            ]
        ]
    ];
} elseif ($is_logged_in && $user_role === 'staff') {
    // Add limited admin items for staff users
    $nav_items['admin'] = [
        'title' => 'Staff',
        'url' => '#',
        'icon' => 'badge',
        'section' => 'administration',
        'dropdown' => [
            'staff_portal' => [
                'title' => 'Staff Portal',
                'url' => '/pages/administration/staff-portal.php',
                'icon' => 'badge'
            ],
            'staff_tasks' => [
                'title' => 'My Tasks',
                'url' => '/pages/administration/staff-tasks.php',
                'icon' => 'assignment_turned_in'
            ],
            'attendance' => [
                'title' => 'Attendance',
                'url' => '/pages/administration/attendance.php',
                'icon' => 'event_available'
            ]
        ]
    ];
}

function is_active($item_key, $current_page) {
    global $nav_items;
    $item = $nav_items[$item_key] ?? null;
    
    if (!$item) return false;
    
    // Check if current page matches this item's URL
    if (isset($item['url']) && basename($item['url']) === $current_page) {
        return true;
    }
    
    // Check dropdown items
    if (isset($item['dropdown'])) {
        foreach ($item['dropdown'] as $dropdown_item) {
            if (isset($dropdown_item['url']) && basename($dropdown_item['url']) === $current_page) {
                return true;
            }
        }
    }
    
    return false;
}
?>

<!-- Top Navigation Bar -->
<header class="navbar">
    <div class="navbar-container">
        <!-- Logo and Brand -->
        <a href="/index.php" class="navbar-brand">
            <div class="w-10 h-10 rounded-full bg-primary flex items-center justify-center overflow-hidden">
                <img src="/assets/images/bamenda-crest.png" alt="Bamenda City Crest" 
                     data-alt="Traditional heraldic crest of Bamenda City Council with green and gold accents on a clean white background">
            </div>
            <span>Bamenda City Council</span>
        </a>

        <!-- Desktop Navigation -->
        <nav class="navbar-nav">
            <?php foreach ($nav_items as $key => $item): ?>
                <?php if (isset($item['dropdown'])): ?>
                    <!-- Dropdown Menu -->
                    <div class="nav-dropdown">
                        <button class="nav-link <?php echo is_active($key, $current_page) ? 'active' : ''; ?>">
                            <span class="material-symbols-outlined"><?php echo $item['icon']; ?></span>
                            <?php echo $item['title']; ?>
                            <span class="material-symbols-outlined">expand_more</span>
                        </button>
                        <div class="dropdown-menu">
                            <?php foreach ($item['dropdown'] as $sub_key => $sub_item): ?>
                                <a href="<?php echo $sub_item['url']; ?>" class="dropdown-item">
                                    <span class="material-symbols-outlined"><?php echo $sub_item['icon']; ?></span>
                                    <?php echo $sub_item['title']; ?>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php else: ?>
                    <!-- Simple Link -->
                    <a href="<?php echo $item['url']; ?>" class="nav-link <?php echo is_active($key, $current_page) ? 'active' : ''; ?>">
                        <span class="material-symbols-outlined"><?php echo $item['icon']; ?></span>
                        <?php echo $item['title']; ?>
                    </a>
                <?php endif; ?>
            <?php endforeach; ?>
            
            <!-- User Actions -->
            <div class="nav-actions">
                <button class="nav-link" id="theme-toggle" title="Toggle dark mode">
                    <span class="material-symbols-outlined">dark_mode</span>
                </button>
                <button class="nav-link" id="language-toggle" title="Change language">
                    <span class="material-symbols-outlined">translate</span>
                </button>
                
                <?php if ($is_logged_in): ?>
                    <!-- Logged in user menu -->
                    <div class="nav-dropdown">
                        <button class="nav-link user-menu-toggle" title="User menu">
                            <span class="material-symbols-outlined">account_circle</span>
                            <span class="user-name"><?php echo htmlspecialchars(substr($user_name, 0, 15)); ?></span>
                            <span class="material-symbols-outlined">expand_more</span>
                        </button>
                        <div class="dropdown-menu user-dropdown">
                            <div class="user-info">
                                <div class="user-avatar">
                                <img src="/assets/images/default-profile.jpg" alt="User Profile" class="nav-profile-image">
                            </div>
                                <div class="user-details">
                                    <div class="user-name-full"><?php echo htmlspecialchars($user_name); ?></div>
                                    <div class="user-email"><?php echo htmlspecialchars($user_email); ?></div>
                                    <div class="user-role"><?php echo ucfirst($user_role); ?></div>
                                </div>
                            </div>
                            <div class="dropdown-divider"></div>
                            <a href="<?php echo $dashboard_url; ?>" class="dropdown-item">
                                <span class="material-symbols-outlined">dashboard</span>
                                Dashboard
                            </a>
                            <a href="/pages/citizen-services/profile.php" class="dropdown-item">
                                <span class="material-symbols-outlined">person</span>
                                Profile
                            </a>
                            <a href="/pages/citizen-services/settings.php" class="dropdown-item">
                                <span class="material-symbols-outlined">settings</span>
                                Settings
                            </a>
                            <a href="/pages/citizen-services/notifications.php" class="dropdown-item">
                                <span class="material-symbols-outlined">notifications</span>
                                Notifications
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="/core/auth.php?action=logout" class="dropdown-item logout-item">
                                <span class="material-symbols-outlined">logout</span>
                                Logout
                            </a>
                        </div>
                    </div>
                <?php else: ?>
                    <!-- Login/Register buttons -->
                    <a href="/pages/auth/login.php" class="btn btn-outline btn-sm">
                        <span class="material-symbols-outlined">login</span>
                        Login
                    </a>
                    <a href="/pages/auth/register.php" class="btn btn-primary btn-sm">
                        <span class="material-symbols-outlined">person_add</span>
                        Register
                    </a>
                <?php endif; ?>
            </div>
        </nav>

        <!-- Mobile Menu Toggle -->
        <button class="mobile-menu-toggle" id="mobile-menu-toggle">
            <span class="material-symbols-outlined">menu</span>
        </button>
    </div>
</header>

<!-- Mobile Navigation Drawer -->
<nav class="mobile-nav" id="mobile-nav">
    <div class="mobile-nav-header">
        <div class="navbar-brand">
            <div class="w-10 h-10 rounded-full bg-primary flex items-center justify-center overflow-hidden">
                <img src="/assets/images/bamenda-crest.png" alt="Bamenda City Crest">
            </div>
            <span>Bamenda City Council</span>
        </div>
        <button class="mobile-menu-toggle" id="mobile-menu-close">
            <span class="material-symbols-outlined">close</span>
        </button>
    </div>
    
    <ul class="mobile-nav-list">
        <?php foreach ($nav_items as $key => $item): ?>
            <li>
                <?php if (isset($item['dropdown'])): ?>
                    <!-- Mobile Dropdown -->
                    <div class="mobile-dropdown">
                        <button class="mobile-nav-toggle <?php echo is_active($key, $current_page) ? 'active' : ''; ?>">
                            <span class="material-symbols-outlined"><?php echo $item['icon']; ?></span>
                            <?php echo $item['title']; ?>
                            <span class="material-symbols-outlined">expand_more</span>
                        </button>
                        <ul class="mobile-dropdown-menu">
                            <?php foreach ($item['dropdown'] as $sub_key => $sub_item): ?>
                                <li>
                                    <a href="<?php echo $sub_item['url']; ?>" class="mobile-nav-link">
                                        <span class="material-symbols-outlined"><?php echo $sub_item['icon']; ?></span>
                                        <?php echo $sub_item['title']; ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php else: ?>
                    <!-- Mobile Simple Link -->
                    <a href="<?php echo $item['url']; ?>" class="mobile-nav-link <?php echo is_active($key, $current_page) ? 'active' : ''; ?>">
                        <span class="material-symbols-outlined"><?php echo $item['icon']; ?></span>
                        <?php echo $item['title']; ?>
                    </a>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
        
        <!-- Mobile Authentication Section -->
        <li class="mobile-auth-section">
            <div class="mobile-auth-divider"></div>
            <?php if ($is_logged_in): ?>
                <!-- Logged in user section -->
                <div class="mobile-user-info">
                    <div class="mobile-user-avatar">
                        <img src="/assets/images/default-profile.jpg" alt="User Profile" class="mobile-profile-image">
                    </div>
                    <div class="mobile-user-details">
                        <div class="mobile-user-name"><?php echo htmlspecialchars($user_name); ?></div>
                        <div class="mobile-user-role"><?php echo ucfirst($user_role); ?></div>
                    </div>
                </div>
                <a href="<?php echo $dashboard_url; ?>" class="mobile-nav-link">
                    <span class="material-symbols-outlined">dashboard</span>
                    Dashboard
                </a>
                <a href="/pages/citizen-services/profile.php" class="mobile-nav-link">
                    <span class="material-symbols-outlined">person</span>
                    Profile
                </a>
                <a href="/pages/citizen-services/settings.php" class="mobile-nav-link">
                    <span class="material-symbols-outlined">settings</span>
                    Settings
                </a>
                <a href="/core/auth.php?action=logout" class="mobile-nav-link mobile-logout">
                    <span class="material-symbols-outlined">logout</span>
                    Logout
                </a>
            <?php else: ?>
                <!-- Login/Register section -->
                <a href="/pages/auth/login.php" class="mobile-nav-link">
                    <span class="material-symbols-outlined">login</span>
                    Login
                </a>
                <a href="/pages/auth/register.php" class="mobile-nav-link">
                    <span class="material-symbols-outlined">person_add</span>
                    Register
                </a>
            <?php endif; ?>
        </li>
    </ul>
</nav>

<!-- Bottom Navigation (Mobile) -->
<nav class="bottom-nav">
    <ul class="bottom-nav-list">
        <li>
            <a href="/index.php" class="bottom-nav-item <?php echo $current_page === 'index.php' ? 'active' : ''; ?>">
                <span class="material-symbols-outlined">home</span>
                <span>Home</span>
            </a>
        </li>
        <li>
            <a href="/pages/citizen-services/services.php" class="bottom-nav-item <?php echo $current_section === 'citizen-services' ? 'active' : ''; ?>">
                <span class="material-symbols-outlined">gavel</span>
                <span>Services</span>
            </a>
        </li>
        <li>
            <a href="/pages/civic-engagement/index.php" class="bottom-nav-item <?php echo $current_section === 'civic-engagement' ? 'active' : ''; ?>">
                <span class="material-symbols-outlined">diversity_3</span>
                <span>Civic</span>
            </a>
        </li>
        <li>
            <a href="/pages/emergency/index.php" class="bottom-nav-item <?php echo $current_section === 'emergency' ? 'active' : ''; ?>">
                <span class="material-symbols-outlined">emergency_home</span>
                <span>Emergency</span>
            </a>
        </li>
        <li>
            <a href="/pages/youth/index.php" class="bottom-nav-item <?php echo $current_section === 'youth' ? 'active' : ''; ?>">
                <span class="material-symbols-outlined">school</span>
                <span>Youth</span>
            </a>
        </li>
    </ul>
</nav>

<style>
/* Navigation Specific Styles */
.nav-dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-menu {
    position: absolute;
    top: 100%;
    left: 0;
    min-width: 200px;
    background-color: var(--surface-container-lowest);
    border: 1px solid var(--outline-variant);
    border-radius: var(--radius-lg);
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
    opacity: 0;
    visibility: hidden;
    transform: translateY(-10px);
    transition: all 0.2s ease;
    z-index: 100;
}

.nav-dropdown:hover .dropdown-menu {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
}

.dropdown-item {
    display: flex;
    align-items: center;
    gap: var(--spacing-sm);
    padding: var(--spacing-md);
    color: var(--on-surface);
    text-decoration: none;
    transition: background-color 0.2s ease;
    border-bottom: 1px solid var(--outline-variant);
}

.dropdown-item:first-child {
    border-radius: var(--radius-lg) var(--radius-lg) 0 0;
}

.dropdown-item:last-child {
    border-radius: 0 0 var(--radius-lg) var(--radius-lg);
    border-bottom: none;
}

.dropdown-item:hover {
    background-color: var(--surface-container-low);
}

.dropdown-item.logout-item {
    color: var(--error);
    font-weight: 500;
    transition: all 0.3s ease;
}

.dropdown-item.logout-item:hover {
    background-color: rgba(244, 67, 54, 0.1);
    transform: translateX(4px);
}

.dropdown-item.logout-item:active {
    transform: translateX(2px);
}

/* User Dropdown Styles */
.user-dropdown {
    min-width: 280px;
    padding: var(--spacing-md) 0;
}

.user-info {
    display: flex;
    align-items: center;
    gap: var(--spacing-md);
    padding: var(--spacing-md) var(--spacing-lg);
    background-color: var(--surface-container-low);
}

.user-avatar {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background-color: var(--primary);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--on-primary);
    font-size: 1.5rem;
    overflow: hidden;
}

.profile-image, .nav-profile-image, .mobile-profile-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 50%;
}

.user-details {
    flex: 1;
}

.user-name-full {
    font-weight: 600;
    color: var(--on-surface);
    font-size: 0.875rem;
}

.user-email {
    font-size: 0.75rem;
    color: var(--on-surface-variant);
    margin-top: 2px;
}

.user-role {
    font-size: 0.75rem;
    color: var(--primary);
    font-weight: 500;
    margin-top: 2px;
}

.dropdown-divider {
    height: 1px;
    background-color: var(--outline-variant);
    margin: var(--spacing-sm) 0;
}

.user-menu-toggle {
    display: flex;
    align-items: center;
    gap: var(--spacing-xs);
    padding: var(--spacing-sm) var(--spacing-md);
    border-radius: var(--radius-md);
    transition: background-color 0.2s ease;
}

.user-menu-toggle:hover {
    background-color: var(--surface-container-low);
}

.user-name {
    font-size: 0.875rem;
    font-weight: 500;
    color: var(--on-surface);
}

.nav-actions {
    display: flex;
    align-items: center;
    gap: var(--spacing-sm);
}

/* Mobile Navigation Styles */
.mobile-dropdown {
    border-bottom: 1px solid var(--outline-variant);
}

.mobile-nav-toggle {
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 100%;
    padding: var(--spacing-md);
    background: none;
    border: none;
    color: var(--on-surface);
    font-weight: 500;
    cursor: pointer;
    text-align: left;
}

.mobile-dropdown-menu {
    display: none;
    list-style: none;
    padding: 0;
    background-color: var(--surface-container-low);
}

.mobile-dropdown-menu.show {
    display: block;
}

.mobile-dropdown-menu .mobile-nav-link {
    padding-left: var(--spacing-xl);
}

/* Mobile Authentication Styles */
.mobile-auth-section {
    margin-top: var(--spacing-lg);
}

.mobile-auth-divider {
    height: 1px;
    background-color: var(--outline-variant);
    margin: var(--spacing-md) 0;
}

.mobile-user-info {
    display: flex;
    align-items: center;
    gap: var(--spacing-md);
    padding: var(--spacing-md);
    background-color: var(--surface-container-low);
    border-radius: var(--radius-md);
    margin-bottom: var(--spacing-sm);
}

.mobile-user-avatar {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    background-color: var(--primary);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--on-primary);
    font-size: 1.25rem;
}

.mobile-user-details {
    flex: 1;
}

.mobile-user-name {
    font-weight: 600;
    color: var(--on-surface);
    font-size: 0.875rem;
}

.mobile-user-role {
    font-size: 0.75rem;
    color: var(--primary);
    font-weight: 500;
    margin-top: 2px;
}

.mobile-logout {
    color: var(--error);
    border-top: 1px solid var(--outline-variant);
    margin-top: var(--spacing-sm);
    padding-top: var(--spacing-md);
    font-weight: 500;
    transition: all 0.3s ease;
}

.mobile-logout:hover {
    background-color: rgba(244, 67, 54, 0.1);
    transform: translateX(4px);
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .nav-dropdown .dropdown-menu {
        display: none;
    }
    
    .user-name {
        display: none;
    }
    
    .nav-actions .btn {
        padding: var(--spacing-sm) var(--spacing-md);
        font-size: 0.875rem;
    }
    
    .nav-actions .btn .material-symbols-outlined {
        font-size: 1.25rem;
    }
}
</style>

<script>
// Mobile Navigation Toggle
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
    const mobileMenuClose = document.getElementById('mobile-menu-close');
    const mobileNav = document.getElementById('mobile-nav');
    
    mobileMenuToggle.addEventListener('click', function() {
        mobileNav.classList.add('active');
        document.body.style.overflow = 'hidden';
    });
    
    mobileMenuClose.addEventListener('click', function() {
        mobileNav.classList.remove('active');
        document.body.style.overflow = '';
    });
    
    // Close mobile nav when clicking outside
    mobileNav.addEventListener('click', function(e) {
        if (e.target === mobileNav) {
            mobileNav.classList.remove('active');
            document.body.style.overflow = '';
        }
    });
    
    // Mobile dropdown toggles
    const mobileDropdownToggles = document.querySelectorAll('.mobile-nav-toggle');
    mobileDropdownToggles.forEach(toggle => {
        toggle.addEventListener('click', function() {
            const dropdown = this.nextElementSibling;
            dropdown.classList.toggle('show');
            
            // Rotate arrow
            const arrow = this.querySelector('.material-symbols-outlined:last-child');
            if (dropdown.classList.contains('show')) {
                arrow.style.transform = 'rotate(180deg)';
            } else {
                arrow.style.transform = 'rotate(0deg)';
            }
        });
    });
    
    // Theme toggle
    const themeToggle = document.getElementById('theme-toggle');
    themeToggle.addEventListener('click', function() {
        document.documentElement.classList.toggle('dark');
        const icon = this.querySelector('.material-symbols-outlined');
        if (document.documentElement.classList.contains('dark')) {
            icon.textContent = 'light_mode';
        } else {
            icon.textContent = 'dark_mode';
        }
    });
});
</script>
