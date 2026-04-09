<?php
/**
 * Bamenda E-Governance Platform
 * Design Tokens System
 * Centralized styling constants for the entire application
 */

class DesignTokens {
    
    // ========== COLOR TOKENS ==========
    public static $colors = [
        // Primary Colors
        'primary' => '#004d27',
        'primary-light' => '#006837',
        'primary-lighter' => '#8ee4a6',
        'primary-lightest' => '#9ef6b6',
        
        // Secondary Colors
        'secondary' => '#735c00',
        'secondary-light' => '#fed65b',
        'secondary-lighter' => '#e9c349',
        
        // Tertiary Colors
        'tertiary' => '#254936',
        'tertiary-light' => '#3d614d',
        'tertiary-lighter' => '#b2dac1',
        
        // Semantic Colors
        'success' => '#10b981',
        'success-light' => '#34d399',
        'success-lighter' => '#d1fae5',
        
        'warning' => '#f59e0b',
        'warning-light' => '#fbbf24',
        'warning-lighter' => '#fef3c7',
        
        'error' => '#ef4444',
        'error-light' => '#f87171',
        'error-lighter' => '#fee2e2',
        
        'info' => '#3b82f6',
        'info-light' => '#60a5fa',
        'info-lighter' => '#dbeafe',
        
        // Neutral/Surface Colors
        'surface' => '#faf9fb',
        'surface-dim' => '#dadadc',
        'surface-container' => '#eeedf0',
        'surface-container-high' => '#e8e8ea',
        'surface-container-highest' => '#e3e2e4',
        
        // Text Colors
        'text-primary' => '#1a1c1d',
        'text-secondary' => '#49454f',
        'text-tertiary' => '#79747e',
        'text-quaternary' => '#a8a8a8',
        'text-disabled' => '#d9d9d9',
        'text-white' => '#ffffff',
        'text-dark' => '#0a0e27',
        
        // Border/Outline Colors
        'border-default' => '#bec9be',
        'border-light' => '#dadadc',
        'border-lighter' => '#e8e8ea',
        'border-dark' => '#49454f',
        
        // Background
        'background' => '#faf9fb',
        'background-dark' => '#1a1c1d',
    ];
    
    // ========== SPACING TOKENS ==========
    public static $spacing = [
        'xs' => '0.25rem',      // 4px
        'sm' => '0.5rem',       // 8px
        'md' => '1rem',         // 16px
        'lg' => '1.5rem',       // 24px
        'xl' => '2rem',         // 32px
        '2xl' => '3rem',        // 48px
        '3xl' => '4rem',        // 64px
        '4xl' => '5rem',        // 80px
        '5xl' => '6rem',        // 96px
    ];
    
    // ========== TYPOGRAPHY TOKENS ==========
    public static $typography = [
        'font-family-heading' => "'Public Sans', sans-serif",
        'font-family-body' => "'Manrope', sans-serif",
        'font-family-mono' => "'Courier New', monospace",
        
        'font-size' => [
            'xs' => '0.75rem',      // 12px
            'sm' => '0.875rem',     // 14px
            'base' => '1rem',       // 16px
            'lg' => '1.125rem',     // 18px
            'xl' => '1.25rem',      // 20px
            '2xl' => '1.5rem',      // 24px
            '3xl' => '1.875rem',    // 30px
            '4xl' => '2.25rem',     // 36px
            '5xl' => '3rem',        // 48px
        ],
        
        'font-weight' => [
            'light' => 300,
            'regular' => 400,
            'medium' => 500,
            'semibold' => 600,
            'bold' => 700,
            'extrabold' => 800,
        ],
        
        'line-height' => [
            'tight' => 1.2,
            'normal' => 1.5,
            'relaxed' => 1.75,
            'loose' => 2,
        ],
    ];
    
    // ========== BORDER RADIUS TOKENS ==========
    public static $radius = [
        'none' => '0',
        'xs' => '0.125rem',
        'sm' => '0.25rem',
        'md' => '0.5rem',
        'lg' => '0.75rem',
        'xl' => '1rem',
        '2xl' => '1.5rem',
        'full' => '9999px',
    ];
    
    // ========== SHADOW TOKENS ==========
    public static $shadows = [
        'none' => 'none',
        'xs' => '0 1px 2px 0 rgba(0, 0, 0, 0.05)',
        'sm' => '0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06)',
        'md' => '0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06)',
        'lg' => '0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05)',
        'xl' => '0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04)',
        '2xl' => '0 25px 50px -12px rgba(0, 0, 0, 0.25)',
        'inner' => 'inset 0 2px 4px 0 rgba(0, 0, 0, 0.06)',
    ];
    
    // ========== TRANSITION TOKENS ==========
    public static $transitions = [
        'fast' => '150ms cubic-bezier(0.4, 0, 0.2, 1)',
        'base' => '250ms cubic-bezier(0.4, 0, 0.2, 1)',
        'slow' => '350ms cubic-bezier(0.4, 0, 0.2, 1)',
        'slower' => '500ms cubic-bezier(0.4, 0, 0.2, 1)',
    ];
    
    // ========== BREAKPOINT TOKENS ==========
    public static $breakpoints = [
        'xs' => '320px',
        'sm' => '640px',
        'md' => '768px',
        'lg' => '1024px',
        'xl' => '1280px',
        '2xl' => '1536px',
    ];
    
    // ========== BUTTON PRESETS ==========
    public static $buttons = [
        'primary' => [
            'bg' => '#004d27',
            'color' => '#ffffff',
            'hover-bg' => '#006837',
            'active-bg' => '#003d1f',
            'padding' => '0.75rem 1.5rem',
            'font-size' => '1rem',
            'font-weight' => 600,
            'border-radius' => '0.75rem',
        ],
        'secondary' => [
            'bg' => '#735c00',
            'color' => '#ffffff',
            'hover-bg' => '#8a6d00',
            'active-bg' => '#5d4900',
            'padding' => '0.75rem 1.5rem',
            'font-size' => '1rem',
            'font-weight' => 600,
            'border-radius' => '0.75rem',
        ],
        'outline' => [
            'bg' => 'transparent',
            'color' => '#004d27',
            'border' => '1px solid #004d27',
            'hover-bg' => '#f0f9f7',
            'padding' => '0.75rem 1.5rem',
            'font-size' => '1rem',
            'font-weight' => 600,
            'border-radius' => '0.75rem',
        ],
        'ghost' => [
            'bg' => 'transparent',
            'color' => '#004d27',
            'hover-bg' => '#f0f9f7',
            'padding' => '0.75rem 1rem',
            'font-size' => '1rem',
            'font-weight' => 600,
        ],
        'danger' => [
            'bg' => '#ef4444',
            'color' => '#ffffff',
            'hover-bg' => '#dc2626',
            'active-bg' => '#b91c1c',
            'padding' => '0.75rem 1.5rem',
            'font-size' => '1rem',
            'font-weight' => 600,
            'border-radius' => '0.75rem',
        ],
    ];
    
    // ========== CARD PRESETS ==========
    public static $cards = [
        'default' => [
            'bg' => '#faf9fb',
            'border' => '1px solid #dadadc',
            'border-radius' => '0.75rem',
            'padding' => '1.5rem',
            'shadow' => '0 1px 3px 0 rgba(0, 0, 0, 0.1)',
            'hover-shadow' => '0 10px 15px -3px rgba(0, 0, 0, 0.1)',
        ],
        'elevated' => [
            'bg' => '#ffffff',
            'border' => 'none',
            'border-radius' => '1rem',
            'padding' => '2rem',
            'shadow' => '0 10px 15px -3px rgba(0, 0, 0, 0.1)',
            'hover-shadow' => '0 20px 25px -5px rgba(0, 0, 0, 0.1)',
        ],
        'subtle' => [
            'bg' => '#eeedf0',
            'border' => 'none',
            'border-radius' => '0.5rem',
            'padding' => '1rem',
            'shadow' => 'none',
        ],
    ];
    
    // ========== Helper Methods ==========
    
    /**
     * Get color by name
     */
    public static function color($name) {
        return self::$colors[$name] ?? '#000000';
    }
    
    /**
     * Get spacing value
     */
    public static function spacing($size) {
        return self::$spacing[$size] ?? '1rem';
    }
    
    /**
     * Get font size
     */
    public static function fontSize($size) {
        return self::$typography['font-size'][$size] ?? '1rem';
    }
    
    /**
     * Get shadow
     */
    public static function shadow($level) {
        return self::$shadows[$level] ?? 'none';
    }
    
    /**
     * Get border radius
     */
    public static function radius($size) {
        return self::$radius[$size] ?? '0';
    }
    
    /**
     * Generate CSS variables string
     */
    public static function generateCSSVariables() {
        $css = ":root {\n";
        
        // Colors
        foreach (self::$colors as $name => $value) {
            $css .= "  --color-{$name}: {$value};\n";
        }
        
        // Spacing
        foreach (self::$spacing as $name => $value) {
            $css .= "  --spacing-{$name}: {$value};\n";
        }
        
        // Font sizes
        foreach (self::$typography['font-size'] as $name => $value) {
            $css .= "  --font-size-{$name}: {$value};\n";
        }
        
        // Shadows
        foreach (self::$shadows as $name => $value) {
            $css .= "  --shadow-{$name}: {$value};\n";
        }
        
        // Radius
        foreach (self::$radius as $name => $value) {
            $css .= "  --radius-{$name}: {$value};\n";
        }
        
        $css .= "}\n";
        return $css;
    }
}

// Export for use
function getToken($category, $name) {
    $property = "\${$category}";
    if (isset(DesignTokens::$$property[$name])) {
        return DesignTokens::$$property[$name];
    }
    return null;
}
?>
