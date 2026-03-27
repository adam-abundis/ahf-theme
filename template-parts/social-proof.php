<?php
declare(strict_types=1);

defined('ABSPATH') || exit;

$title      = carbon_get_post_meta( get_the_ID(), 'crb_sp_title' );
$links      = carbon_get_post_meta( get_the_ID(), 'crb_sp_links' );
$more_label = carbon_get_post_meta( get_the_ID(), 'crb_sp_more_label' );
$more_url   = carbon_get_post_meta( get_the_ID(), 'crb_sp_more_url' );
?>

<section class="social-proof" aria-labelledby="social-proof-heading">
    <div class="container">
        <h2 id="social-proof-heading" class="social-proof__title">
            <?php echo esc_html( $title ); ?>
        </h2>
        <?php if ( ! empty( $links ) ) : ?>
        <ul class="social-proof__list">
            <?php foreach ( $links as $link ) : ?>
                <li class="social-proof__item">
                    <a href="<?php echo esc_url( $link['url'] ); ?>" class="social-proof__link">
                        <?php echo esc_html( $link['label'] ); ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
        <?php endif; ?>
        <a href="<?php echo esc_url( $more_url ); ?>" class="social-proof__more">
            <?php echo esc_html( $more_label ); ?>
        </a>
    </div>
</section>
