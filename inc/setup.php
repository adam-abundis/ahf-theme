<?php
declare(strict_types=1);

defined('ABSPATH') || exit;

/**
 * Turns on WordPress features this theme needs.
 * Runs early so WordPress knows what we support before it builds anything.
 *
 * @package AHF_Theme
 */

function ahf_theme_setup(): void {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support( 'html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ]);
}
add_action( 'after_setup_theme', 'ahf_theme_setup' );
