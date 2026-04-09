<?php
/**
 * Bamenda City Council E-Governance Platform
 * Hero Background System
 */

/**
 * Hero background configuration
 */
$hero_backgrounds = [
    'main' => [
        'image' => 'assets/images/heroes/bamenda-cityscape.svg',
        'alt' => 'Bamenda city skyline showing municipal buildings and characteristic hilly landscape of Northwest region',
        'overlay_opacity' => 0.4,
        'gradient_start' => '#1976d2',
        'gradient_end' => '#2c3e50'
    ],
    'business' => [
        'image' => 'assets/images/heroes/digital-services.svg',
        'alt' => 'business professionals working in modern office environment with market traders and entrepreneurs',
        'overlay_opacity' => 0.4,
        'gradient_start' => '#388e3c',
        'gradient_end' => '#1b5e20'
    ],
    'citizen_services' => [
        'image' => 'assets/images/heroes/government-office.svg',
        'alt' => 'Bamenda municipal building showing government services and citizen access',
        'overlay_opacity' => 0.4,
        'gradient_start' => '#1976d2',
        'gradient_end' => '#2c3e50'
    ],
    'civic_engagement' => [
        'image' => 'assets/images/heroes/community-gathering.svg',
        'alt' => 'Bamenda community meeting showing citizens engaged in policy discussion and civic participation',
        'overlay_opacity' => 0.4,
        'gradient_start' => '#7b1fa2',
        'gradient_end' => '#388e3c'
    ],
    'emergency' => [
        'image' => 'assets/images/heroes/emergency-response.svg',
        'alt' => 'Bamenda emergency services showing preparedness and response capabilities for crisis situations',
        'overlay_opacity' => 0.4,
        'gradient_start' => '#f44336',
        'gradient_end' => '#d32f2f'
    ],
    'youth' => [
        'image' => 'assets/images/heroes/youth-activities.svg',
        'alt' => 'Bamenda highlands showing young people participating in community programs and youth development activities',
        'overlay_opacity' => 0.4,
        'gradient_start' => '#9c27b0',
        'gradient_end' => '#4caf50'
    ],
    'public_services' => [
        'image' => 'assets/images/heroes/digital-services.svg',
        'alt' => 'Bamenda municipal services building showing civil status, certificates, and public documentation',
        'overlay_opacity' => 0.4,
        'gradient_start' => '#ff9800',
        'gradient_end' => '#f57c00'
    ],
    'administration' => [
        'image' => 'assets/images/heroes/government-office.svg',
        'alt' => 'Bamenda administrative building showing government operations and management systems',
        'overlay_opacity' => 0.4,
        'gradient_start' => '#3f51b5',
        'gradient_end' => '#2c3e50'
    ]
];

/**
 * Render hero section
 */
function render_hero_section($type, $title, $subtitle, $buttons = []) {
    $config = $hero_backgrounds[$type] ?? $hero_backgrounds['main'];
    
    echo '<section class="hero ' . $type . '-hero">';
    echo '    <div class="hero-background">';
    echo '        <img src="' . $config['image'] . '" alt="' . $config['alt'] . '">';
    echo '    </div>';
    echo '    <div class="hero-overlay" style="background: linear-gradient(135deg, ' . $config['gradient_start'] . ' ' . $config['overlay_opacity'] . ', ' . $config['gradient_end'] . ');"></div>';
    echo '    <div class="container">';
    echo '        <div class="hero-content fade-in">';
    echo '            <span class="badge badge-secondary">' . ucfirst(str_replace('_', ' ', $type)) . '</span>';
    echo '            <h1 class="hero-title">' . $title . '</h1>';
    echo '            <p class="hero-subtitle">' . $subtitle . '</p>';
    
    if (!empty($buttons)) {
        echo '            <div class="hero-actions">';
        foreach ($buttons as $button) {
            $icon = isset($button['icon']) ? '<span class="material-symbols-outlined">' . $button['icon'] . '</span>' : '';
            echo '                <a href="' . $button['url'] . '" class="btn ' . ($button['class'] ?? 'btn-primary') . ' ' . ($button['size'] ?? 'btn-lg') . '">';
            echo '                    ' . $icon;
            echo '                    <span>' . $button['text'] . '</span>';
            echo '                </a>';
        }
        echo '            </div>';
    }
    
    echo '        </div>';
    echo '    </div>';
    echo '</section>';
}
?>
