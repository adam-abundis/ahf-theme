<?php
declare(strict_types=1);

defined('ABSPATH') || exit;

$title = carbon_get_post_meta( get_the_ID(), 'crb_empathy_title' );
$body  = carbon_get_post_meta( get_the_ID(), 'crb_empathy_body' );
$items = carbon_get_post_meta( get_the_ID(), 'crb_empathy_items' );
?>

<section class="empathy" aria-labelledby="empathy-heading">
    <div class="container">
        <h2 id="empathy-heading" class="empathy__title">
            <?php echo esc_html( $title ); ?>
        </h2>
        <p class="empathy__body">
            <?php echo esc_html( $body ); ?>
        </p>
        <?php if ( ! empty( $items ) ) : ?>
        <ul class="empathy__list">
            <?php foreach ( $items as $item ) : ?>
                <li class="empathy__item">
                    <?php echo esc_html( $item['item'] ); ?>
                </li>
            <?php endforeach; ?>
        </ul>
        <?php endif; ?>
    </div>
</section>
