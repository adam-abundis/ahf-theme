<?php
declare(strict_types=1);

defined('ABSPATH') || exit;

/**
 * Registers navigation menu locations.
 * Defines where menus can appear. Content is assigned in WP Admin > Appearance > Menus.
 *
 * @package AHF_Theme
 */

function ahf_register_menus(): void {
    register_nav_menus([
        'primary' => 'Primary Menu',
        'footer'  => 'Footer Menu',
    ]);
}
add_action( 'after_setup_theme', 'ahf_register_menus' );
