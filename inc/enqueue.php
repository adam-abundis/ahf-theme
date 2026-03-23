<?php
declare(strict_types=1);

defined('ABSPATH') || exit;

/**
 * Registers and loads theme assets like scripts and styles.
 * Points to Vite-compiled output in dist/.
 * Never edit dist/ files directly. Always edit src/ and run `npm run build` to recompile.
 *
 * @package AHF_Theme
 */

function ahf_theme_enqueue(): void {
    wp_enqueue_style(
        'ahf-styles',
        get_template_directory_uri() . '/dist/main.css',
        [],
        '1.0.0'
    );

    wp_enqueue_script(
        'ahf-scripts',
        get_template_directory_uri() . '/dist/main.js',
        [],
        '1.0.0',
        [ 'strategy' => 'defer', 'in_footer' => true ]
    );
}
add_action( 'wp_enqueue_scripts', 'ahf_theme_enqueue' );
