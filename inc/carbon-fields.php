<?php
declare(strict_types=1);

defined('ABSPATH') || exit;


/**
 * AHF Theme - carbon-fields.php
 *
 * Carbon Fields field registration.
 * Each container maps to a homepage section so editors can control the content.
 *
 * @package AHF_Theme
 */

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', function () {
    // Hero section
    Container::make('post_meta', 'Hero Section')
        ->where('post_id', '=', get_option('page_on_front'))
        ->add_fields([
            Field::make('text', 'crb_hero_eyebrow', 'Eyebrow'),
            Field::make('text', 'crb_hero_title', 'Heading'),
            Field::make('image', 'crb_hero_image', 'Hero Image'),
            Field::make('text', 'crb_hero_image_alt', 'Hero Image Alt Text'),
            Field::make('textarea', 'crb_hero_body', 'Body'),
            Field::make('text', 'crb_hero_cta1_label', 'Primary CTA Label'),
            Field::make('text', 'crb_hero_cta1_url', 'Primary CTA URL'),
            Field::make('text', 'crb_hero_cta2_label', 'Secondary CTA Label'),
            Field::make('text', 'crb_hero_cta2_url', 'Secondary CTA URL'),
        ]);
    // Empathy Section
    Container::make('post_meta', 'Empathy Section')
        ->where('post_id', '=', get_option('page_on_front'))
        ->add_fields([
            Field::make('text', 'crb_empathy_title', 'Heading'),
            Field::make('textarea', 'crb_empathy_body', 'Body'),
            Field::make('complex', 'crb_empathy_items', 'Goals')
                ->add_fields([
                    Field::make('text', 'item', 'Goal'),
                ]),
        ]);
    // How We Help
    Container::make('post_meta', 'How We Help Section')
        ->where('post_id', '=', get_option('page_on_front'))
        ->add_fields([
            Field::make('text', 'crb_hwh_title', 'Heading'),
            Field::make('textarea', 'crb_hwh_intro', 'Intro'),
            Field::make('complex', 'crb_hwh_cards', 'Program Cards')
              ->add_fields([
                    Field::make('image', 'image', 'Card Image'),
                    Field::make('text', 'image_alt', 'Card Image Alt Text'),
                    Field::make('text', 'title', 'Card Title'),
                    Field::make('textarea', 'body', 'Card Body'),
                    Field::make('text', 'link_label', 'Link Label'),
                    Field::make('text', 'link_url', 'Link URL'),
                ]),
        ]);
    // Social Proof
    Container::make('post_meta', 'Social Proof Section')
        ->where('post_id', '=', get_option('page_on_front'))
        ->add_fields([
            Field::make('text', 'crb_sp_title', 'Heading'),
            Field::make('complex', 'crb_sp_links', 'News Links')
                ->add_fields([
                    Field::make('text', 'label', 'Link Label'),
                    Field::make('text', 'url', 'Link URL'),
                ]),
            Field::make('text', 'crb_sp_more_label', 'See All Label'),
            Field::make('text', 'crb_sp_more_url', 'See All URL'),
        ]);
    // Donor CTA
    Container::make('post_meta', 'Donor CTA Section')
        ->where('post_id', '=', get_option('page_on_front'))
        ->add_fields([
            Field::make('text', 'crb_donor_title', 'Heading'),
            Field::make('textarea', 'crb_donor_body', 'Body'),
            Field::make('text', 'crb_donor_btn_label', 'Button Label'),
            Field::make('text', 'crb_donor_btn_url', 'Button URL'),
        ]);
});
