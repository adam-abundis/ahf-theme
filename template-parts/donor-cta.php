<?php
declare(strict_types=1);

defined('ABSPATH') || exit;

$title     = carbon_get_post_meta( get_the_ID(), 'crb_donor_title' );
$body      = carbon_get_post_meta( get_the_ID(), 'crb_donor_body' );
$btn_label = carbon_get_post_meta( get_the_ID(), 'crb_donor_btn_label' );
$btn_url   = carbon_get_post_meta( get_the_ID(), 'crb_donor_btn_url' );
?>

<section class="donor-cta" aria-labelledby="donor-cta-heading">
    <div class="container">
        <h2 id="donor-cta-heading" class="donor-cta__title">
            <?php echo esc_html( $title ); ?>
        </h2>
        <p class="donor-cta__body">
            <?php echo esc_html( $body ); ?>
        </p>
        <a href="<?php echo esc_url( $btn_url ); ?>" class="btn btn--primary">
            <?php echo esc_html( $btn_label ); ?>
        </a>
    </div>
</section>
