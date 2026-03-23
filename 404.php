<?php
declare(strict_types=1);

defined( 'ABSPATH' ) || exit;

/**
 * 404 template.
 * Renders when WordPress cannot find content for a requested URL.
 *
 * @package AHF_Theme
 */

get_header();
?>

<main class="not-found" id="main-content">
    <div class="container">
        <h1 class="not-found__title">Page not found.</h1>
        <p class="not-found__message">
            The page you are looking for does not exist or has been moved.
        </p>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="not-found__link">
            Back to home
        </a>
    </div>
</main>

<?php get_footer(); ?>
