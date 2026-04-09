<?php
/**
 * Card Components Showcase
 * Demo page showing all card types and variations
 */

require_once __DIR__ . '/includes/card-components.php';
require_once __DIR__ . '/includes/header.php';
?>

<!-- Hero Section -->
<section class="hero">
    <div class="hero-background">
        <img src="assets/images/heroes/bamenda-cityscape.svg" alt="Bamenda cityscape">
    </div>
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content">
            <h1 class="hero-title">Card Components Showcase</h1>
            <p class="hero-subtitle">Professional card designs for your e-governance platform</p>
        </div>
    </div>
</section>

<section style="padding: 4rem 0;">
    <div class="container">
        
        <!-- Feature Cards -->
        <div style="margin-bottom: 4rem;">
            <h2 style="font-size: 2rem; font-weight: 800; margin-bottom: 2rem;">Feature Cards</h2>
            <div class="card-grid cols-3">
                <?php
                $features = [
                    [
                        'icon' => 'description',
                        'title' => 'Business License',
                        'description' => 'Apply for or renew your business license online',
                        'link_text' => 'Apply Now',
                        'link_url' => '#',
                        'icon_color' => 'linear-gradient(135deg, #004d27 0%, #006837 100%)',
                    ],
                    [
                        'icon' => 'apartment',
                        'title' => 'Property Registry',
                        'description' => 'Register and manage your property information',
                        'link_text' => 'Register',
                        'link_url' => '#',
                        'icon_color' => 'linear-gradient(135deg, #735c00 0%, #8a6d00 100%)',
                    ],
                    [
                        'icon' => 'receipt',
                        'title' => 'Tax Portal',
                        'description' => 'File taxes and manage municipal fees',
                        'link_text' => 'Pay Tax',
                        'link_url' => '#',
                        'icon_color' => 'linear-gradient(135deg, #254936 0%, #3d614d 100%)',
                    ],
                ];
                foreach ($features as $feature) {
                    echo render_feature_card($feature);
                }
                ?>
            </div>
        </div>

        <!-- Stat Cards -->
        <div style="margin-bottom: 4rem;">
            <h2 style="font-size: 2rem; font-weight: 800; margin-bottom: 2rem;">Statistics</h2>
            <div class="card-grid cols-4">
                <?php
                $stats = [
                    [
                        'icon' => 'groups',
                        'number' => '50,234',
                        'label' => 'Active Users',
                        'icon_color' => 'linear-gradient(135deg, #004d27 0%, #006837 100%)',
                    ],
                    [
                        'icon' => 'check_circle',
                        'number' => '12,456',
                        'label' => 'Applications',
                        'icon_color' => 'linear-gradient(135deg, #10b981 0%, #34d399 100%)',
                    ],
                    [
                        'icon' => 'trending_up',
                        'number' => '$2.4M',
                        'label' => 'Revenue',
                        'icon_color' => 'linear-gradient(135deg, #735c00 0%, #8a6d00 100%)',
                    ],
                    [
                        'icon' => 'chat',
                        'number' => '891',
                        'label' => 'Feedback',
                        'icon_color' => 'linear-gradient(135deg, #3b82f6 0%, #60a5fa 100%)',
                    ],
                ];
                foreach ($stats as $stat) {
                    echo render_stat_card($stat);
                }
                ?>
            </div>
        </div>

        <!-- Service Cards -->
        <div style="margin-bottom: 4rem;">
            <h2 style="font-size: 2rem; font-weight: 800; margin-bottom: 2rem;">Services</h2>
            <div class="card-grid cols-3">
                <?php
                $services = [
                    [
                        'icon' => 'payment',
                        'title' => 'Online Payments',
                        'description' => 'Secure payment processing for municipal fees and services',
                        'link_text' => 'Pay Now',
                        'link_url' => '#',
                    ],
                    [
                        'icon' => 'folder_open',
                        'title' => 'Document Storage',
                        'description' => 'Safe storage and retrieval of important documents',
                        'link_text' => 'View Files',
                        'link_url' => '#',
                    ],
                    [
                        'icon' => 'people',
                        'title' => 'Community Forum',
                        'description' => 'Engage with your community and share feedback',
                        'link_text' => 'Join Forum',
                        'link_url' => '#',
                    ],
                ];
                foreach ($services as $service) {
                    echo render_service_card($service);
                }
                ?>
            </div>
        </div>

        <!-- Pricing Cards -->
        <div style="margin-bottom: 4rem;">
            <h2 style="font-size: 2rem; font-weight: 800; margin-bottom: 2rem;">Pricing Plans</h2>
            <div class="card-grid cols-3">
                <?php
                $pricing = [
                    [
                        'title' => 'Basic',
                        'price' => '$9',
                        'period' => 'per month',
                        'features' => ['Basic services', 'Email support', '5GB storage'],
                        'button_text' => 'Choose Plan',
                        'button_url' => '#',
                    ],
                    [
                        'title' => 'Professional',
                        'price' => '$29',
                        'period' => 'per month',
                        'features' => ['All Basic features', 'Priority support', '100GB storage', 'Advanced analytics'],
                        'button_text' => 'Choose Plan',
                        'button_url' => '#',
                        'featured' => true,
                        'badge' => 'MOST POPULAR',
                    ],
                    [
                        'title' => 'Enterprise',
                        'price' => '$99',
                        'period' => 'per month',
                        'features' => ['All Professional features', '24/7 support', 'Unlimited storage', 'Custom integrations'],
                        'button_text' => 'Contact Sales',
                        'button_url' => '#',
                    ],
                ];
                foreach ($pricing as $plan) {
                    echo render_pricing_card($plan);
                }
                ?>
            </div>
        </div>

        <!-- Product Cards -->
        <div style="margin-bottom: 4rem;">
            <h2 style="font-size: 2rem; font-weight: 800; margin-bottom: 2rem;">Products</h2>
            <div class="card-grid cols-4">
                <?php
                $products = [
                    [
                        'image' => 'assets/images/bamenda-business-support.jpg',
                        'title' => 'Business Support',
                        'price' => '$45.00',
                        'link_url' => '#',
                    ],
                    [
                        'image' => 'assets/images/bamenda-civic-engagement.jpg',
                        'title' => 'Civic Engagement',
                        'price' => '$30.00',
                        'link_url' => '#',
                    ],
                    [
                        'image' => 'assets/images/bamenda-emergency-services.jpg',
                        'title' => 'Emergency Services',
                        'price' => '$60.00',
                        'link_url' => '#',
                    ],
                    [
                        'image' => 'assets/images/bamenda-youth-programs.jpg',
                        'title' => 'Youth Programs',
                        'price' => '$25.00',
                        'link_url' => '#',
                    ],
                ];
                foreach ($products as $product) {
                    echo render_product_card($product);
                }
                ?>
            </div>
        </div>

    </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
