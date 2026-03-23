<?php
declare(strict_types=1);

defined('ABSPATH') || exit;

/**
 * AHF Theme - functions.php
 *
 * This file is a router only. No logic lives here.
 * Each inc/ file owns exactly one responsibility.
 *
 * @package AHF_Theme
 */

require get_template_directory() . '/inc/setup.php';
require get_template_directory() . '/inc/enqueue.php';
require get_template_directory() . '/inc/menus.php';
