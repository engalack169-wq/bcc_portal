<?php
/**
 * Bamenda E-Governance Platform
 * Card Components Helpers
 * Functions to render various card components
 */

/**
 * Render a basic card
 */
function render_card($options = []) {
    $defaults = [
        'class' => 'card',
        'header' => '',
        'body' => '',
        'footer' => '',
        'icon' => '',
        'title' => '',
        'text' => '',
        'link_text' => 'Learn more',
        'link_url' => '#',
    ];
    
    $card = array_merge($defaults, $options);
    
    $html = '<div class="' . htmlspecialchars($card['class']) . '">';
    
    if ($card['header']) {
        $html .= '<div class="card-header">' . $card['header'] . '</div>';
    }
    
    $html .= '<div class="card-body">';
    if ($card['icon']) {
        $html .= '<span class="card-header-icon material-symbols-outlined">' . htmlspecialchars($card['icon']) . '</span>';
    }
    if ($card['title']) {
        $html .= '<h3 class="card-header-title">' . htmlspecialchars($card['title']) . '</h3>';
    }
    if ($card['text'] || $card['body']) {
        $html .= '<p class="card-body-text">' . ($card['body'] ?: htmlspecialchars($card['text'])) . '</p>';
    }
    $html .= '</div>';
    
    if ($card['link_text'] || $card['footer']) {
        $html .= '<div class="card-footer">';
        if ($card['footer']) {
            $html .= $card['footer'];
        } else {
            $html .= '<a href="' . htmlspecialchars($card['link_url']) . '" class="card-footer-link">' . htmlspecialchars($card['link_text']) . '<span class="material-symbols-outlined">arrow_forward</span></a>';
        }
        $html .= '</div>';
    }
    
    $html .= '</div>';
    
    return $html;
}

/**
 * Render a feature card
 */
function render_feature_card($options = []) {
    $defaults = [
        'icon' => 'star',
        'title' => 'Feature Title',
        'description' => 'Feature description',
        'link_text' => 'Learn more',
        'link_url' => '#',
        'icon_color' => 'linear-gradient(135deg, #004d27 0%, #006837 100%)',
    ];
    
    $card = array_merge($defaults, $options);
    
    $html = '<div class="feature-card">';
    $html .= '<div class="feature-card-icon" style="background: ' . htmlspecialchars($card['icon_color']) . '">';
    $html .= '<span class="material-symbols-outlined">' . htmlspecialchars($card['icon']) . '</span>';
    $html .= '</div>';
    $html .= '<h3 class="feature-card-title">' . htmlspecialchars($card['title']) . '</h3>';
    $html .= '<p class="feature-card-description">' . htmlspecialchars($card['description']) . '</p>';
    $html .= '<a href="' . htmlspecialchars($card['link_url']) . '" class="card-footer-link">' . htmlspecialchars($card['link_text']) . '<span class="material-symbols-outlined">arrow_forward</span></a>';
    $html .= '</div>';
    
    return $html;
}

/**
 * Render a stat card
 */
function render_stat_card($options = []) {
    $defaults = [
        'icon' => 'trending_up',
        'number' => '0',
        'label' => 'Statistic',
        'icon_color' => 'linear-gradient(135deg, #004d27 0%, #006837 100%)',
    ];
    
    $card = array_merge($defaults, $options);
    
    $html = '<div class="stat-card">';
    $html .= '<div class="stat-card-icon" style="background: ' . htmlspecialchars($card['icon_color']) . '">';
    $html .= '<span class="material-symbols-outlined">' . htmlspecialchars($card['icon']) . '</span>';
    $html .= '</div>';
    $html .= '<div class="stat-card-content">';
    $html .= '<h3>' . htmlspecialchars($card['number']) . '</h3>';
    $html .= '<p>' . htmlspecialchars($card['label']) . '</p>';
    $html .= '</div>';
    $html .= '</div>';
    
    return $html;
}

/**
 * Render a service card
 */
function render_service_card($options = []) {
    $defaults = [
        'icon' => 'checkmark',
        'title' => 'Service Title',
        'description' => 'Service description',
        'link_text' => 'Access Service',
        'link_url' => '#',
    ];
    
    $card = array_merge($defaults, $options);
    
    $html = '<div class="service-card">';
    $html .= '<div class="service-card-icon">';
    $html .= '<span class="material-symbols-outlined">' . htmlspecialchars($card['icon']) . '</span>';
    $html .= '</div>';
    $html .= '<h3 class="service-card-title">' . htmlspecialchars($card['title']) . '</h3>';
    $html .= '<p class="service-card-description">' . htmlspecialchars($card['description']) . '</p>';
    $html .= '<a href="' . htmlspecialchars($card['link_url']) . '" class="card-footer-link">' . htmlspecialchars($card['link_text']) . '<span class="material-symbols-outlined">arrow_forward</span></a>';
    $html .= '</div>';
    
    return $html;
}

/**
 * Render a card grid
 */
function render_card_grid($cards = [], $columns = 3) {
    $col_class = "cols-{$columns}";
    $html = '<div class="card-grid ' . htmlspecialchars($col_class) . '">';
    
    foreach ($cards as $card) {
        $html .= render_card($card);
    }
    
    $html .= '</div>';
    
    return $html;
}

/**
 * Render a pricing card
 */
function render_pricing_card($options = []) {
    $defaults = [
        'title' => 'Plan Name',
        'price' => '$0',
        'period' => 'per month',
        'features' => [],
        'button_text' => 'Get Started',
        'button_url' => '#',
        'featured' => false,
        'badge' => '',
    ];
    
    $card = array_merge($defaults, $options);
    
    $featured_class = $card['featured'] ? ' featured' : '';
    
    $html = '<div class="pricing-card' . htmlspecialchars($featured_class) . '">';
    
    if ($card['badge']) {
        $html .= '<div class="pricing-card-badge">' . htmlspecialchars($card['badge']) . '</div>';
    }
    
    $html .= '<h3 class="pricing-card-title">' . htmlspecialchars($card['title']) . '</h3>';
    $html .= '<div class="pricing-card-price">' . htmlspecialchars($card['price']) . '</div>';
    $html .= '<div class="pricing-card-period">' . htmlspecialchars($card['period']) . '</div>';
    
    if (!empty($card['features'])) {
        $html .= '<ul class="pricing-card-features">';
        foreach ($card['features'] as $feature) {
            $html .= '<li>' . htmlspecialchars($feature) . '</li>';
        }
        $html .= '</ul>';
    }
    
    $html .= '<a href="' . htmlspecialchars($card['button_url']) . '" class="btn btn-primary">' . htmlspecialchars($card['button_text']) . '</a>';
    $html .= '</div>';
    
    return $html;
}

/**
 * Render a testimonial card
 */
function render_testimonial_card($options = []) {
    $defaults = [
        'content' => 'Great testimonial',
        'author' => 'Author Name',
        'role' => 'Position',
        'avatar' => 'assets/images/default-profile.jpg',
    ];
    
    $card = array_merge($defaults, $options);
    
    $html = '<div class="testimonial-card">';
    $html .= '<p class="testimonial-card-content">"' . htmlspecialchars($card['content']) . '"</p>';
    $html .= '<div class="testimonial-card-author">';
    $html .= '<div class="testimonial-card-avatar"><img src="' . htmlspecialchars($card['avatar']) . '" alt="' . htmlspecialchars($card['author']) . '"></div>';
    $html .= '<div class="testimonial-card-meta">';
    $html .= '<h4>' . htmlspecialchars($card['author']) . '</h4>';
    $html .= '<p>' . htmlspecialchars($card['role']) . '</p>';
    $html .= '</div>';
    $html .= '</div>';
    $html .= '</div>';
    
    return $html;
}

/**
 * Render a product card
 */
function render_product_card($options = []) {
    $defaults = [
        'image' => 'assets/images/default-profile.jpg',
        'title' => 'Product Name',
        'price' => '$0.00',
        'link_url' => '#',
    ];
    
    $card = array_merge($defaults, $options);
    
    $html = '<div class="product-card">';
    $html .= '<div class="product-card-image"><img src="' . htmlspecialchars($card['image']) . '" alt="' . htmlspecialchars($card['title']) . '"></div>';
    $html .= '<div class="product-card-content">';
    $html .= '<h3 class="product-card-title"><a href="' . htmlspecialchars($card['link_url']) . '">' . htmlspecialchars($card['title']) . '</a></h3>';
    $html .= '<div class="product-card-price">' . htmlspecialchars($card['price']) . '</div>';
    $html .= '</div>';
    $html .= '</div>';
    
    return $html;
}

/**
 * Display card (echo)
 */
function display_card($options = []) {
    echo render_card($options);
}

function display_feature_card($options = []) {
    echo render_feature_card($options);
}

function display_stat_card($options = []) {
    echo render_stat_card($options);
}

function display_service_card($options = []) {
    echo render_service_card($options);
}

function display_card_grid($cards = [], $columns = 3) {
    echo render_card_grid($cards, $columns);
}
?>
