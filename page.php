<?php
declare(strict_types=1);

defined('ABSPATH') || exit;

/**
 * Generic page template.
 * Used for any WordPress page without a custom template assigned.
 *
 * @package AHF_Theme
 */

get_header();
?>

<main class="page-content" id="main-content">
    <div class="container">
        <?php
        while ( have_posts() ) :
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h1 class="page-content__title">
                    <?php the_title(); ?>
                </h1>
                <div class="page-content__body">
                    <?php the_content(); ?>
                </div>
            </article>
            <?php
        endwhile;
        ?>
    </div>
</main>

<?php get_footer(); ?>
