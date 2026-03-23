<?php
declare(strict_types=1);

defined('ABSPATH') || exit;

/**
 * Homepage template.
 * Always used for the front page regardless of Reading settings.
 * Sections live in the template-parts/ folder and are pulled in with get_template_part().
 *
 * @package AHF_Theme
 */

get_header();
?>

<main id="main-content">
    <?php get_template_part( 'template-parts/hero' ); ?>
    <?php get_template_part( 'template-parts/empathy' ); ?>
    <?php get_template_part( 'template-parts/how-we-help' ); ?>
    <?php get_template_part( 'template-parts/social-proof' ); ?>
    <?php get_template_part( 'template-parts/donor-cta' ); ?>
</main>

<?php get_footer(); ?>
