<?php
declare(strict_types=1);

defined('ABSPATH') || exit;

$title = carbon_get_post_meta( get_the_ID(), 'crb_hwh_title' );
$intro = carbon_get_post_meta( get_the_ID(), 'crb_hwh_intro' );
$cards = carbon_get_post_meta( get_the_ID(), 'crb_hwh_cards' );
?>

<section class="how-we-help" aria-labelledby="how-we-help-heading">
    <div class="container">
        <h2 id="how-we-help-heading" class="how-we-help__title">
            <?php echo esc_html( $title ); ?>
        </h2>
        <p class="how-we-help__intro">
            <?php echo esc_html( $intro ); ?>
        </p>
        <?php if ( ! empty( $cards ) ) : ?>
        <div class="how-we-help__grid">
            <?php foreach ( $cards as $card ) : ?>
                <article class="card">
                    <?php if ( ! empty( $card['image'] ) ) : ?>
                        <div class="card__media">
                             <?php echo wp_get_attachment_image(
                                 $card['image'], 'medium', false, [
                                     'class' => 'card__image',
                                     'alt'   => esc_attr( $card['image_alt'] ),
                             ] ); ?>
                        </div>
                    <?php endif; ?>
                    <h3 class="card__title"><?php echo esc_html( $card['title'] ); ?></h3>
                    <p class="card__body"><?php echo esc_html( $card['body'] ); ?></p>
                    <a href="<?php echo esc_url( $card['link_url'] ); ?>" class="card__link">
                        <?php echo esc_html( $card['link_label'] ); ?>
                    </a>
                </article>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
</section>
