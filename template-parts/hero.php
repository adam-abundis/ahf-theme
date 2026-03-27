<?php
declare(strict_types=1);

defined('ABSPATH') || exit;

$eyebrow    = carbon_get_post_meta( get_the_ID(), 'crb_hero_eyebrow' );
$title      = carbon_get_post_meta( get_the_ID(), 'crb_hero_title' );
$image_id   = carbon_get_post_meta( get_the_ID(), 'crb_hero_image' );
$image_alt  = carbon_get_post_meta( get_the_ID(), 'crb_hero_image_alt' );
$body       = carbon_get_post_meta( get_the_ID(), 'crb_hero_body' );
$cta1_label = carbon_get_post_meta( get_the_ID(), 'crb_hero_cta1_label' );
$cta1_url   = carbon_get_post_meta( get_the_ID(), 'crb_hero_cta1_url' );
$cta2_label = carbon_get_post_meta( get_the_ID(), 'crb_hero_cta2_label' );
$cta2_url   = carbon_get_post_meta( get_the_ID(), 'crb_hero_cta2_url' );
?>

<section class="hero <?php echo $image_id ? 'hero--has-image' : ''; ?>" aria-labelledby="hero-heading">
    <?php if ( $image_id ) : ?>
        <div class="hero__media">
            <?php echo wp_get_attachment_image( $image_id, 'full', false, [
                'class' => 'hero__image',
                'alt'   => esc_attr( $image_alt ),
            ]);  ?>
        </div>
    <?php endif; ?>
    <div class="container">
        <div class="hero__content">
            <p class="hero__eyebrow"><?php echo esc_html( $eyebrow ); ?></p>
            <h1 class="hero__title" id="hero-heading">
                <?php echo esc_html( $title ); ?>
            </h1>
            <p class="hero__body">
                <?php echo esc_html( $body ); ?>
            </p>
            <div class="hero__actions">
                <a href="<?php echo esc_url( $cta1_url ); ?>" class="btn btn--primary">
                    <?php echo esc_html( $cta1_label ); ?>
                </a>
                <a href="<?php echo esc_url( $cta2_url ); ?>" class="btn btn--secondary">
                    <?php echo esc_html( $cta2_label ); ?>
                </a>
            </div>
        </div>
    </div>
</section>
