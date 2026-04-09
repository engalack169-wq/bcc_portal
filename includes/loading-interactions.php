<?php
/**
 * Bamenda City Council E-Governance Platform
 * Loading States and Micro-interactions
 */

/**
 * Loading spinner configurations
 */
$loading_spinners = [
    'spinner' => [
        'size' => ['small' => '24px', 'medium' => '32px', 'large' => '48px'],
        'color' => ['primary' => '#1976d2', 'secondary' => '#388e3c', 'success' => '#4caf50', 'warning' => '#ff9800', 'error' => '#f44336'],
        'border_width' => ['thin' => '2px', 'normal' => '3px', 'thick' => '4px']
    ],
    'pulse' => [
        'size' => ['small' => '20px', 'medium' => '28px', 'large' => '36px'],
        'color' => ['primary' => '#1976d2', 'secondary' => '#388e3c', 'success' => '#4caf50', 'warning' => '#ff9800', 'error' => '#f44336'],
        'speed' => ['slow' => '2s', 'normal' => '1.5s', 'fast' => '1s']
    ],
    'dots' => [
        'count' => [1 => '1 dot', 2 => '2 dots', 3 => '3 dots'],
        'size' => ['small' => '8px', 'medium' => '12px', 'large' => '16px'],
        'color' => ['primary' => '#1976d2', 'secondary' => '#388e3c', 'success' => '#4caf50', 'warning' => '#ff9800', 'error' => '#f44336']
    ],
    'skeleton' => [
        'height' => ['small' => '20px', 'medium' => '24px', 'large' => '32px'],
        'width' => ['narrow' => '100px', 'normal' => '200px', 'wide' => '300px'],
        'border_radius' => '4px',
        'color' => ['base' => '#f0f0f0', 'accent' => '#e0e0e0']
    ],
    'progress' => [
        'height' => ['thin' => '4px', 'normal' => '8px', 'thick' => '12px'],
        'border_radius' => '2px',
        'color' => ['primary' => '#1976d2', 'secondary' => '#388e3c', 'success' => '#4caf50', 'warning' => '#ff9800', 'error' => '#f44336'],
        'animated' => true
    ],
    'shimmer' => [
        'height' => ['small' => '16px', 'medium' => '20px', 'large' => '24px'],
        'width' => ['narrow' => '60px', 'normal' => '120px', 'wide' => '180px'],
        'gradient' => 'linear-gradient(90deg, #f0f0f0 0%, #e0e0e0 100%)',
        'animation' => 'shimmer 2s infinite'
    ]
];

/**
 * Micro-interaction configurations
 */
$micro_interactions = [
    'hover' => [
        'scale' => '1.05',
        'shadow' => '0 8px 16px rgba(0, 0, 0, 0.15)',
        'duration' => '0.2s',
        'easing' => 'ease-out'
    ],
    'focus' => [
        'ring_width' => '2px',
        'ring_offset' => '2px',
        'ring_color' => '#1976d2',
        'transition' => '0.2s ease-out'
    ],
    'ripple' => [
        'duration' => '0.6s',
        'scale' => '1.2',
        'opacity' => '0.3',
        'color' => 'rgba(255, 255, 255, 0.5)'
    ],
    'slide' => [
        'duration' => '0.3s',
        'easing' => 'cubic-bezier(0.4, 0, 0.2, 1)',
        'transform' => 'translateY(10px)'
    ],
    'bounce' => [
        'duration' => '0.5s',
        'easing' => 'cubic-bezier(0.68, -0.55, 0.265, 1.55)',
        'transform' => 'translateY(-10px)'
    ],
    'fade' => [
        'duration' => '0.3s',
        'easing' => 'ease-in-out'
    ],
    'scale' => [
        'duration' => '0.2s',
        'easing' => 'ease-out'
    ],
    'rotate' => [
        'duration' => '0.3s',
        'easing' => 'ease-in-out'
    ],
    'shake' => [
        'duration' => '0.5s',
        'intensity' => 'light',
        'distance' => '2px'
    ]
];

/**
 * Render loading spinner
 */
function render_loading_spinner($type = 'spinner', $size = 'medium', $color = 'primary', $border_width = 'normal') {
    $config = $loading_spinners[$type] ?? $loading_spinners['spinner'];
    $size_config = $config['size'][$size] ?? $config['size']['medium'];
    $color_config = $config['color'][$color] ?? $config['color']['primary'];
    $border_config = $config['border_width'][$border_width] ?? $config['border_width']['normal'];
    
    $spinner_html = '<div class="loading-spinner loading-spinner--' . $type . ' loading-spinner--' . $size . ' loading-spinner--' . $color . '">';
    
    if ($type === 'spinner') {
        $spinner_html .= '<div class="spinner-circle"></div>';
    } elseif ($type === 'pulse') {
        $spinner_html .= '<div class="pulse-circle"></div>';
    } elseif ($type === 'dots') {
        $count = $config['count'][1] ?? $config['count'][1];
        $dot_size = $config['size'][$size] ?? $config['size']['medium'];
        $dot_color = $config['color'][$color] ?? $config['color']['primary'];
        
        for ($i = 0; $i < $count; $i++) {
            $spinner_html .= '<div class="loading-dot loading-dot--' . $size . ' loading-dot--' . $dot_color . '" style="animation-delay: ' . ($i * 0.2) . 's;"></div>';
        }
    }
    
    $spinner_html .= '</div>';
    
    return $spinner_html;
}

/**
 * Render skeleton loader
 */
function render_skeleton_loader($type = 'text', $width = 'normal', $height = 'small') {
    $config = $loading_spinners['skeleton'] ?? [];
    $width_config = $config['width'][$width] ?? $config['width']['normal'];
    $height_config = $config['height'][$height] ?? $config['height']['small'];
    $border_radius = $config['border_radius'] ?? '4px';
    $gradient = $config['gradient'] ?? $config['gradient'];
    
    $skeleton_html = '<div class="skeleton-loader skeleton-loader--' . $type . ' skeleton-loader--' . $width . ' skeleton-loader--' . $height . '"';
    
    if (!empty($gradient)) {
        $skeleton_html .= ' style="background: ' . $gradient . '; border-radius: ' . $border_radius . 'px;"';
    }
    
    $skeleton_html .= '></div>';
    
    return $skeleton_html;
}

/**
 * Render progress bar
 */
function render_progress_bar($percentage = 0, $variant = 'primary', $animated = true, $striped = false) {
    $config = $loading_spinners['progress'] ?? [];
    $height_config = $config['height'][$animated ? 'thick' : 'normal'] ?? $config['height']['normal'];
    $color_config = $config['color'][$variant] ?? $config['color']['primary'];
    
    $progress_html = '<div class="progress-bar progress-bar--' . $variant;
    
    if ($striped) {
        $progress_html .= ' progress-bar--striped';
    }
    
    if ($animated) {
        $progress_html .= ' progress-bar--animated';
    }
    
    $progress_html .= '">';
    $progress_html .= '    <div class="progress-bar__fill" style="width: ' . $percentage . '%; background: ' . $color_config . '; height: ' . $height_config . 'px;"></div>';
    $progress_html .= '    <div class="progress-bar__label">' . $percentage . '%</div>';
    $progress_html .= '</div>';
    
    return $progress_html;
}

/**
 * Generate loading CSS
 */
function generate_loading_css() {
    $css = "/* Loading States and Micro-interactions */\n\n";
    
    // Base loading styles
    $css .= ".loading-overlay {\n";
    $css .= "    position: fixed;\n";
    $css .= "    top: 0;\n";
    $css .= "    left: 0;\n";
    $css .= "    width: 100%;\n";
    $css .= "    height: 100%;\n";
    $css .= "    background: rgba(0, 0, 0, 0.5);\n";
    $css .= "    display: flex;\n";
    $css .= "    align-items: center;\n";
    $css .= "    justify-content: center;\n";
    $css .= "    z-index: 9999;\n";
    $css .= "}\n\n";
    
    // Loading spinner
    foreach ($loading_spinners['spinner']['size'] as $size => $value) {
        $css .= ".loading-spinner--{$size} {\n";
        $css .= "    width: {$value};\n";
        $css .= "    height: {$value};\n";
        $css .= "}\n\n";
    }
    
    $css .= ".spinner-circle {\n";
    $css .= "    width: 60%;\n";
    $css .= "    height: 60%;\n";
    $css .= "    border: 3px solid currentColor;\n";
    $css .= "    border-radius: 50%;\n";
    $css .= "    border-top-color: transparent;\n";
    $css .= "    animation: spin 1s linear infinite;\n";
    $css .= "}\n\n";
    
    // Pulse animation
    $css .= "@keyframes pulse {\n";
    $css .= "    0% {\n";
    $css .= "        transform: scale(1);\n";
    $css .= "        opacity: 1;\n";
    $css .= "    }\n";
    $css .= "    50% {\n";
    $css .= "        transform: scale(1.1);\n";
    $css .= "        opacity: 0.7;\n";
    $css .= "    }\n";
    $css .= "    100% {\n";
    $css .= "        transform: scale(1);\n";
    $css .= "        opacity: 1;\n";
    $css .= "    }\n";
    $css .= "}\n\n";
    
    // Dots animation
    foreach ($loading_spinners['dots']['count'] as $count => $value) {
        $css .= ".loading-dots--{$value} .loading-dot {\n";
        $css .= "    width: {$loading_spinners['dots']['size'][$value]};\n";
        $css .= "    height: {$loading_spinners['dots']['size'][$value]};\n";
        $css .= "    border-radius: 50%;\n";
        $css .= "    background: currentColor;\n";
        $css .= "    opacity: 0.3;\n";
        $css .= "    animation: loading-dots 1.4s infinite;\n";
        $css .= "}\n\n";
    }
    
    $css .= "@keyframes loading-dots {\n";
    $css .= "    0%, 80% {\n";
    $css .= "        transform: scale(0);\n";
    $css .= "        opacity: 0.5;\n";
    $css .= "    }\n";
    $css .= "    40% {\n";
    $css .= "        transform: scale(1);\n";
    $css .= "        opacity: 1;\n";
    $css .= "    }\n";
    $css .= "}\n\n";
    
    // Skeleton loader
    $css .= ".skeleton-loader {\n";
    $css .= "    background: #f0f0f0;\n";
    $css .= "    border-radius: 4px;\n";
    $css .= "    overflow: hidden;\n";
    $css .= "    position: relative;\n";
    $css .= "}\n\n";
    
    $css .= ".skeleton-loader::after {\n";
    $css .= "    content: '';\n";
    $css .= "    position: absolute;\n";
    $css .= "    top: 0;\n";
    $css .= "    left: 0;\n";
    $css .= "    width: 100%;\n";
    $css .= "    height: 100%;\n";
    $css .= "    background: linear-gradient(90deg, #f0f0f0 0%, #e0e0e0 100%);\n";
    $css .= "    animation: shimmer 2s infinite;\n";
    $css .= "}\n\n";
    
    $css .= "@keyframes shimmer {\n";
    $css .= "    0% {\n";
    $css .= "        background-position: -200% 0;\n";
    $css .= "    }\n";
    $css .= "    100% {\n";
    $css .= "        background-position: 200% 0;\n";
    $css .= "    }\n";
    $css .= "    100% {\n";
    $css .= "        background-position: 400% 0;\n";
    $css .= "    }\n";
    $css .= "}\n\n";
    
    // Progress bar
    $css .= ".progress-bar {\n";
    $css .= "    width: 100%;\n";
    $css .= "    height: 8px;\n";
    $css .= "    background: #e0e0e0;\n";
    $css .= "    border-radius: 4px;\n";
    $css .= "    overflow: hidden;\n";
    $css .= "}\n\n";
    
    $css .= ".progress-bar__fill {\n";
    $css .= "    height: 100%;\n";
    $css .= "    transition: width 0.3s ease;\n";
    $css .= "}\n\n";
    
    $css .= ".progress-bar--striped .progress-bar__fill {\n";
    $css .= "    background-image: linear-gradient(\n";
    $css .= "        45deg,\n";
    $css .= "        transparent 25%,\n";
    $css .= "        currentColor 25%,\n";
    $css .= "        transparent 50%,\n";
    $css .= "        currentColor 50%,\n";
    $css .= "        transparent 75%,\n";
    $css .= "        currentColor 100%\n";
    $css .= "    );\n";
    $css .= "    background-size: 8px 8px;\n";
    $css .= "}\n\n";
    
    $css .= ".progress-bar--animated .progress-bar__fill {\n";
    $css .= "    animation: progress-fill 1s ease-out;\n";
    $css .= "}\n\n";
    
    $css .= "@keyframes progress-fill {\n";
    $css .= "    from { width: 0; }\n";
    $css .= "    to { width: var(--progress-width, 0%); }\n";
    $css .= "}\n\n";
    
    $css .= ".progress-bar__label {\n";
    $css .= "    position: absolute;\n";
    $css .= "    top: 50%;\n";
    $css .= "    left: 50%;\n";
    $css .= "    transform: translate(-50%, -50%);\n";
    $css .= "    font-size: 0.75rem;\n";
    $css .= "    font-weight: 600;\n";
    $css .= "    color: white;\n";
    $css .= "    text-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);\n";
    $css .= "}\n\n";
    
    // Hover effects
    $css .= ".hover-lift {\n";
    $css .= "    transition: {$micro_interactions['hover']['duration']} {$micro_interactions['hover']['easing']};\n";
    $css .= "}\n\n";
    
    $css .= ".hover-lift:hover {\n";
    $css .= "    transform: {$micro_interactions['hover']['transform']};\n";
    $css .= "    box-shadow: {$micro_interactions['hover']['shadow']};\n";
    $css .= "}\n\n";
    
    // Focus effects
    $css .= ".focus-ring {\n";
    $css .= "    outline: {$micro_interactions['focus']['ring_width']} solid {$micro_interactions['focus']['ring_color']};\n";
    $css .= "    outline-offset: {$micro_interactions['focus']['ring_offset']}px;\n";
    $css .= "    transition: {$micro_interactions['focus']['transition']};\n";
    $css .= "}\n\n";
    
    // Ripple effect
    $css .= ".ripple {\n";
    $css .= "    position: absolute;\n";
    $css .= "    border-radius: 50%;\n";
    $css .= "    background: {$micro_interactions['ripple']['color']};\n";
    $css .= "    transform: scale(0);\n";
    $css .= "    opacity: 0;\n";
    $css .= "    pointer-events: none;\n";
    $css .= "    transition: {$micro_interactions['ripple']['duration']} cubic-bezier(0.4, 0, 0.2, 1);\n";
    $css .= "}\n\n";
    
    $css .= ".ripple.show {\n";
    $css .= "    transform: scale({$micro_interactions['ripple']['scale']});\n";
    $css .= "    opacity: {$micro_interactions['ripple']['opacity']};\n";
    $css .= "}\n\n";
    
    // Slide animations
    $css .= ".slide-up {\n";
    $css .= "    transform: translateY(-10px);\n";
    $css .= "    opacity: 0;\n";
    $css .= "    transition: {$micro_interactions['slide']['duration']} {$micro_interactions['slide']['easing']};\n";
    $css .= "}\n\n";
    
    $css .= ".slide-up.show {\n";
    $css .= "    transform: translateY(0);\n";
    $css .= "    opacity: 1;\n";
    $css .= "}\n\n";
    
    $css .= ".slide-down {\n";
    $css .= "    transform: translateY(10px);\n";
    $css .= "    opacity: 0;\n";
    $css .= "    transition: {$micro_interactions['slide']['duration']} {$micro_interactions['slide']['easing']};\n";
    $css .= "}\n\n";
    
    $css .= ".slide-down.show {\n";
    $css .= "    transform: translateY(0);\n";
    $css .= "    opacity: 1;\n";
    $css .= "}\n\n";
    
    // Bounce animation
    $css .= ".bounce {\n";
    $css .= "    animation: bounce {$micro_interactions['bounce']['duration']} {$micro_interactions['bounce']['easing']};\n";
    $css .= "}\n\n";
    
    $css .= "@keyframes bounce {\n";
    $css .= "    0%, 20%, 53%, 80%, 100% {\n";
    $css .= "        transform: {$micro_interactions['bounce']['transform']};\n";
    $css .= "    }\n";
    $css .= "    40%, 43% {\n";
    $css .= "        transform: {$micro_interactions['bounce']['transform']};\n";
    $css .= "    }\n";
    $css .= "    70% {\n";
    $css .= "        transform: {$micro_interactions['bounce']['transform']};\n";
    $css .= "    }\n";
    $css .= "    90% {\n";
    $css .= "        transform: {$micro_interactions['bounce']['transform']};\n";
    $css .= "    }\n";
    $css .= "}\n\n";
    
    // Scale animation
    $css .= ".scale {\n";
    $css .= "    transition: {$micro_interactions['scale']['duration']} {$micro_interactions['scale']['easing']};\n";
    $css .= "}\n\n";
    
    $css .= ".scale:hover {\n";
    $css .= "    transform: scale({$micro_interactions['scale']['scale']});\n";
    $css .= "}\n\n";
    
    // Rotate animation
    $css .= ".rotate {\n";
    $css .= "    transition: {$micro_interactions['rotate']['duration']} {$micro_interactions['rotate']['easing']};\n";
    $css .= "}\n\n";
    
    // Shake animation
    $css .= ".shake {\n";
    $css .= "    animation: shake {$micro_interactions['shake']['duration']} {$micro_interactions['shake']['intensity']};\n";
    $css .= "}\n\n";
    
    $css .= "@keyframes shake {\n";
    $css .= "    0%, 100% {\n";
    $css .= "        transform: translateX(0);\n";
    $css .= "    }\n";
    $css .= "    10%, 30%, 50%, 70%, 90% {\n";
    $css .= "        transform: translateX({$micro_interactions['shake']['distance']});\n";
    $css .= "    }\n";
    $css .= "}\n\n";
    
    // Fade animation
    $css .= ".fade {\n";
    $css .= "    transition: {$micro_interactions['fade']['duration']} {$micro_interactions['fade']['easing']};\n";
    $css .= "}\n\n";
    
    $css .= ".fade-in {\n";
    $css .= "    opacity: 0;\n";
    $css .= "    transform: translateY(20px);\n";
    $css .= "    transition: {$micro_interactions['fade']['duration']} {$micro_interactions['fade']['easing']};\n";
    $css .= "}\n\n";
    
    $css .= ".fade-in.show {\n";
    $css .= "    opacity: 1;\n";
    $css .= "    transform: translateY(0);\n";
    $css .= "}\n\n";
    
    $css .= ".fade-out {\n";
    $css .= "    opacity: 1;\n";
    $css .= "    transform: translateY(0);\n";
    $css .= "    transition: {$micro_interactions['fade']['duration']} {$micro_interactions['fade']['easing']};\n";
    $css .= "}\n\n";
    
    $css .= ".fade-out.show {\n";
    $css .= "    opacity: 0;\n";
    $css .= "    transform: translateY(-20px);\n";
    $css .= "}\n\n";
    
    // Responsive loading
    $css .= "@media (max-width: 480px) {\n";
    $css .= "    .loading-spinner--small {\n";
    $css .= "        width: 20px;\n";
    $css .= "        height: 20px;\n";
    $css .= "    }\n\n";
    $css .= "    .skeleton-loader--small {\n";
    $css .= "        height: 16px;\n";
    $css .= "        width: 60px;\n";
    $css .= "    }\n\n";
    $css .= "}\n\n";
    
    $css .= "@media (prefers-reduced-motion: reduce) {\n";
    $css .= "    .loading-spinner,\n";
    $css .= "    .skeleton-loader,\n";
    $css .= "    .progress-bar {\n";
    $css .= "        animation: none;\n";
    $css .= "        transition: none;\n";
    $css .= "    }\n\n";
    $css .= "    @keyframes spin,\n";
    $css .= "    @keyframes pulse,\n";
    $css .= "    @keyframes loading-dots,\n";
    $css .= "    @keyframes shimmer,\n";
    $css .= "    @keyframes progress-fill,\n";
    $css .= "    @keyframes bounce,\n";
    $css .= "    @keyframes shake,\n";
    $css .= "    @keyframes fade {\n";
    $css .= "        animation-duration: 0.01ms !important;\n";
    $css .= "    }\n\n";
    
    return $css;
}
?>
