<?php
/**
 * Bamenda City Council E-Governance Platform
 * Responsive Design System
 */

/**
 * Breakpoint configuration
 */
$breakpoints = [
    'mobile' => 480,
    'tablet' => 768,
    'desktop' => 1024,
    'large' => 1280,
    'xlarge' => 1536
];

/**
 * Container max widths
 */
$container_max_widths = [
    'mobile' => '100%',
    'tablet' => '720px',
    'desktop' => '960px',
    'large' => '1140px',
    'xlarge' => '1320px'
];

/**
 * Grid system columns
 */
$grid_columns = [
    'mobile' => 1,
    'tablet' => 2,
    'desktop' => 3,
    'large' => 4,
    'xlarge' => 4
];

/**
 * Spacing scale
 */
$spacing_scale = [
    0 => '0',
    1 => '0.25rem',
    2 => '0.5rem',
    3 => '0.75rem',
    4 => '1rem',
    5 => '1.25rem',
    6 => '1.5rem',
    8 => '2rem',
    10 => '2.5rem',
    12 => '3rem',
    16 => '4rem',
    20 => '5rem',
    24 => '6rem'
];

/**
 * Generate responsive utility classes
 */
function get_responsive_class($base_class, $breakpoint, $condition = 'min-width') {
    global $breakpoints;
    
    if ($condition === 'min-width') {
        return $base_class . '-' . $breakpoint;
    } else {
        return $base_class . '-max-' . $breakpoint;
    }
}

/**
 * Generate responsive grid classes
 */
function get_grid_class($columns, $breakpoint = 'desktop') {
    global $grid_columns;
    
    $cols = $grid_columns[$breakpoint] ?? 3;
    return 'grid-cols-' . $cols;
}

/**
 * Generate spacing classes
 */
function get_spacing_class($size, $direction = '', $property = 'margin') {
    global $spacing_scale;
    
    $value = $spacing_scale[$size] ?? '1';
    $prefix = $property === 'padding' ? 'p' : 'm';
    $suffix = $direction === 'x' ? 'x' : ($direction === 'y' ? 'y' : '');
    
    return $prefix . ($suffix ? '-' . $suffix : '') . '-' . $value;
}

/**
 * Generate responsive typography classes
 */
function get_typography_class($size, $breakpoint = 'desktop', $weight = 'normal', $transform = 'none') {
    $class = 'text-' . $size;
    
    if ($breakpoint !== 'desktop') {
        $class .= '-' . $breakpoint;
    }
    
    if ($weight !== 'normal') {
        $class .= ' font-' . $weight;
    }
    
    if ($transform !== 'none') {
        $class .= ' ' . $transform;
    }
    
    return $class;
}

/**
 * Generate component classes
 */
function get_component_classes($component, $variant = '', $size = 'md') {
    $classes = [$component];
    
    if (!empty($variant)) {
        $classes[] = $component . '--' . $variant;
    }
    
    if ($size !== 'md') {
        $classes[] = $component . '--' . $size;
    }
    
    return implode(' ', $classes);
}

/**
 * Generate responsive hero classes
 */
function get_hero_classes($type = '', $size = 'normal') {
    $classes = ['hero'];
    
    if (!empty($type)) {
        $classes[] = 'hero--' . $type;
    }
    
    if ($size !== 'normal') {
        $classes[] = 'hero--' . $size;
    }
    
    return implode(' ', $classes);
}

/**
 * Generate card classes
 */
function get_card_classes($variant = '', $elevated = false, $interactive = false) {
    $classes = ['card'];
    
    if (!empty($variant)) {
        $classes[] = 'card--' . $variant;
    }
    
    if ($elevated) {
        $classes[] = 'card--elevated';
    }
    
    if ($interactive) {
        $classes[] = 'card--interactive';
    }
    
    return implode(' ', $classes);
}

/**
 * Generate button classes
 */
function get_button_classes($variant = 'primary', $size = 'md', $outline = false) {
    $classes = ['btn'];
    
    $classes[] = 'btn--' . $variant;
    $classes[] = 'btn--' . $size;
    
    if ($outline) {
        $classes[] = 'btn--outline';
    }
    
    return implode(' ', $classes);
}

/**
 * Generate form classes
 */
function get_form_classes($size = 'md') {
    $classes = ['form'];
    
    if ($size !== 'md') {
        $classes[] = 'form--' . $size;
    }
    
    return implode(' ', $classes);
}

/**
 * Generate navigation classes
 */
function get_nav_classes($variant = '', $active = false) {
    $classes = ['nav'];
    
    if (!empty($variant)) {
        $classes[] = 'nav--' . $variant;
    }
    
    if ($active) {
        $classes[] = 'nav--active';
    }
    
    return implode(' ', $classes);
}

/**
 * Generate utility classes
 */
function get_utility_classes($utilities = []) {
    $classes = [];
    
    foreach ($utilities as $utility) {
        $classes[] = $utility;
    }
    
    return implode(' ', $classes);
}

/**
 * Generate layout classes
 */
function get_layout_classes($layout = '', $alignment = 'center') {
    $classes = ['layout'];
    
    if (!empty($layout)) {
        $classes[] = 'layout--' . $layout;
    }
    
    if ($alignment !== 'center') {
        $classes[] = 'layout--' . $alignment;
    }
    
    return implode(' ', $classes);
}

/**
 * Generate responsive image classes
 */
function get_image_classes($size = 'responsive', $shape = 'square') {
    $classes = ['img'];
    
    $classes[] = 'img--' . $size;
    $classes[] = 'img--' . $shape;
    
    return implode(' ', $classes);
}

/**
 * Generate animation classes
 */
function get_animation_classes($animation = '', $duration = 'normal') {
    $classes = ['animate'];
    
    if (!empty($animation)) {
        $classes[] = 'animate--' . $animation;
    }
    
    if ($duration !== 'normal') {
        $classes[] = 'animate--' . $duration;
    }
    
    return implode(' ', $classes);
}

/**
 * Generate state classes
 */
function get_state_classes($state = '', $variant = '') {
    $classes = ['state'];
    
    if (!empty($state)) {
        $classes[] = 'state--' . $state;
    }
    
    if (!empty($variant)) {
        $classes[] = 'state--' . $variant;
    }
    
    return implode(' ', $classes);
}

/**
 * Generate responsive container classes
 */
function get_container_classes($fluid = false, $centered = false) {
    $classes = ['container'];
    
    if ($fluid) {
        $classes[] = 'container--fluid';
    }
    
    if ($centered) {
        $classes[] = 'container--centered';
    }
    
    return implode(' ', $classes);
}

/**
 * Generate responsive table classes
 */
function get_table_classes($variant = '', $responsive = true) {
    $classes = ['table'];
    
    if (!empty($variant)) {
        $classes[] = 'table--' . $variant;
    }
    
    if ($responsive) {
        $classes[] = 'table--responsive';
    }
    
    return implode(' ', $classes);
}

/**
 * Generate modal classes
 */
function get_modal_classes($size = 'md', $backdrop = true) {
    $classes = ['modal'];
    
    if ($size !== 'md') {
        $classes[] = 'modal--' . $size;
    }
    
    if ($backdrop) {
        $classes[] = 'modal--backdrop';
    }
    
    return implode(' ', $classes);
}

/**
 * Generate notification classes
 */
function get_notification_classes($type = 'info', $dismissible = false) {
    $classes = ['notification'];
    
    $classes[] = 'notification--' . $type;
    
    if ($dismissible) {
        $classes[] = 'notification--dismissible';
    }
    
    return implode(' ', $classes);
}

/**
 * Generate badge classes
 */
function get_badge_classes($variant = 'primary', $size = 'md') {
    $classes = ['badge'];
    
    $classes[] = 'badge--' . $variant;
    $classes[] = 'badge--' . $size;
    
    return implode(' ', $classes);
}

/**
 * Generate progress classes
 */
function get_progress_classes($variant = 'primary', $size = 'md', $striped = false) {
    $classes = ['progress'];
    
    $classes[] = 'progress--' . $variant;
    $classes[] = 'progress--' . $size;
    
    if ($striped) {
        $classes[] = 'progress--striped';
    }
    
    return implode(' ', $classes);
}

/**
 * Generate responsive utility functions
 */
function is_mobile() {
    return isset($_SERVER['HTTP_USER_AGENT']) && 
           (strpos($_SERVER['HTTP_USER_AGENT'], 'Mobile') !== false || 
           strpos($_SERVER['HTTP_USER_AGENT'], 'Android') !== false || 
           strpos($_SERVER['HTTP_USER_AGENT'], 'iPhone') !== false);
}

function is_tablet() {
    return !is_mobile() && 
           (isset($_SERVER['HTTP_USER_AGENT']) && 
           (strpos($_SERVER['HTTP_USER_AGENT'], 'iPad') !== false || 
           strpos($_SERVER['HTTP_USER_AGENT'], 'Tablet') !== false));
}

function is_desktop() {
    return !is_mobile() && !is_tablet();
}

/**
 * Generate responsive CSS output
 */
function generate_responsive_css() {
    global $breakpoints, $container_max_widths, $grid_columns, $spacing_scale;
    
    $css = "/* Responsive Design System */\n\n";
    
    // Container classes
    $css .= ".container {\n";
    $css .= "    width: 100%;\n";
    $css .= "    max-width: {$container_max_widths['desktop']};\n";
    $css .= "    margin: 0 auto;\n";
    $css .= "    padding: 0 1rem;\n";
    $css .= "}\n\n";
    
    $css .= ".container--fluid {\n";
    $css .= "    width: 100%;\n";
    $css .= "    padding: 0 1rem;\n";
    $css .= "}\n\n";
    
    // Responsive containers
    foreach ($breakpoints as $name => $width) {
        $css .= "@media (max-width: {$width}px) {\n";
        $css .= "    .container {\n";
        $css .= "        max-width: {$container_max_widths[$name]};\n";
        $css .= "        padding: 0 0.75rem;\n";
        $css .= "    }\n";
        $css .= "}\n\n";
    }
    
    // Grid system
    $css .= ".grid {\n";
    $css .= "    display: grid;\n";
    $css .= "    gap: 1rem;\n";
    $css .= "    grid-template-columns: repeat({$grid_columns['desktop']}, 1fr);\n";
    $css .= "}\n\n";
    
    // Responsive grid
    foreach ($breakpoints as $name => $width) {
        $css .= "@media (max-width: {$width}px) {\n";
        $css .= "    .grid {\n";
        $css .= "        grid-template-columns: repeat({$grid_columns[$name]}, 1fr);\n";
        $css .= "    }\n";
        $css .= "}\n\n";
    }
    
    // Typography
    $css .= ".text-xs { font-size: 0.75rem; }\n";
    $css .= ".text-sm { font-size: 0.875rem; }\n";
    $css .= ".text-base { font-size: 1rem; }\n";
    $css .= ".text-lg { font-size: 1.125rem; }\n";
    $css .= ".text-xl { font-size: 1.25rem; }\n";
    $css .= ".text-2xl { font-size: 1.5rem; }\n";
    $css .= ".text-3xl { font-size: 1.875rem; }\n";
    $css .= ".text-4xl { font-size: 2.25rem; }\n";
    $css .= ".text-5xl { font-size: 3rem; }\n\n";
    
    // Spacing
    foreach ($spacing_scale as $size => $value) {
        $css .= ".m-{$size} { margin: {$value}; }\n";
        $css .= ".p-{$size} { padding: {$value}; }\n";
        $css .= ".mx-{$size} { margin-left: {$value}; margin-right: {$value}; }\n";
        $css .= ".my-{$size} { margin-top: {$value}; margin-bottom: {$value}; }\n";
        $css .= ".px-{$size} { padding: {$value}; margin: {$value}; }\n";
    }
    
    // Components
    $css .= ".card {\n";
    $css .= "    background: white;\n";
    $css .= "    border: 1px solid #e0e0e0;\n";
    $css .= "    border-radius: 0.5rem;\n";
    $css .= "    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);\n";
    $css .= "    padding: 1.5rem;\n";
    $css .= "    transition: all 0.2s ease;\n";
    $css .= "}\n\n";
    
    $css .= ".card:hover {\n";
    $css .= "    transform: translateY(-2px);\n";
    $css .= "    box-shadow: 0 4px 16px rgba(0, 0, 0, 0.15);\n";
    $css .= "}\n\n";
    
    // Buttons
    $css .= ".btn {\n";
    $css .= "    display: inline-flex;\n";
    $css .= "    align-items: center;\n";
    $css .= "    gap: 0.5rem;\n";
    $css .= "    padding: 0.75rem 1.5rem;\n";
    $css .= "    border: 1px solid transparent;\n";
    $css .= "    border-radius: 0.375rem;\n";
    $css .= "    font-size: 0.875rem;\n";
    $css .= "    font-weight: 500;\n";
    $css .= "    text-decoration: none;\n";
    $css .= "    cursor: pointer;\n";
    $css .= "    transition: all 0.2s ease;\n";
    $css .= "}\n\n";
    
    $css .= ".btn:hover {\n";
    $css .= "    transform: translateY(-1px);\n";
    $css .= "    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);\n";
    $css .= "}\n\n";
    
    // Forms
    $css .= ".form-group {\n";
    $css .= "    margin-bottom: 1.5rem;\n";
    $css .= "}\n\n";
    
    $css .= ".form-control {\n";
    $css .= "    width: 100%;\n";
    $css .= "    padding: 0.75rem 1rem;\n";
    $css .= "    border: 1px solid #e0e0e0;\n";
    $css .= "    border-radius: 0.375rem;\n";
    $css .= "    font-size: 0.875rem;\n";
    $css .= "    transition: all 0.2s ease;\n";
    $css .= "}\n\n";
    
    $css .= ".form-control:focus {\n";
    $css .= "    outline: 2px solid #1976d2;\n";
    $css .= "    outline-offset: 2px;\n";
    $css .= "}\n\n";
    
    // Navigation
    $css .= ".nav {\n";
    $css .= "    background: white;\n";
    $css .= "    border-bottom: 1px solid #e0e0e0;\n";
    $css .= "    padding: 1rem 0;\n";
    $css .= "}\n\n";
    
    // Responsive design
    $css .= "@media (max-width: 768px) {\n";
    $css .= "    .container {\n";
    $css .= "        padding: 0 0.75rem;\n";
    $css .= "    }\n";
    $css .= "    \n";
    $css .= "    .grid {\n";
    $css .= "        grid-template-columns: 1fr;\n";
    $css .= "    }\n";
    $css .= "    \n";
    $css .= "    .nav {\n";
    $css .= "        flex-direction: column;\n";
    $css .= "    }\n";
    $css .= "}\n\n";
    
    $css .= "@media (max-width: 480px) {\n";
    $css .= "    .btn {\n";
    $css .= "        width: 100%;\n";
    $css .= "        justify-content: center;\n";
    $css .= "    }\n";
    $css .= "    \n";
    $css .= "    .form-control {\n";
    $css .= "        font-size: 16px;\n";
    $css .= "    }\n";
    $css .= "}\n\n";
    
    return $css;
}
?>
