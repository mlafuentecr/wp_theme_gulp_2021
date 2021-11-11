<?php
/**
 * https://www.advancedcustomfields.com/resources/get-values-from-an-options-page/
 * <p><?php the_field('field_name', 'option'); ?></p>
*
*/


if (function_exists('acf_add_options_page')) {

acf_add_options_page(array(
'page_title' => 'Theme Settings',
'menu_title' => 'Theme Settings',
'menu_slug' => 'theme-general-settings',
'capability' => 'edit_posts',
'icon_url' => 'dashicons-images-alt2',
'position' => 3,
'redirect' => false
));
acf_add_options_sub_page(array(
'page_title' => 'Sliders',
'menu_title' => 'Sliders',
'parent_slug' => 'theme-general-settings',
));
acf_add_options_sub_page(array(
'page_title' => 'Banners Promo',
'menu_title' => 'Banners Promo',
'parent_slug' => 'theme-general-settings',
));
acf_add_options_sub_page(array(
'page_title' => 'Blocks',
'menu_title' => 'Blocks',
'parent_slug' => 'theme-general-settings',
));
}
