<?php
// Exit if accessed directly
if (!defined('ABSPATH')) exit;
// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:
if (!function_exists('chld_thm_cfg_locale_css')) :
    function chld_thm_cfg_locale_css($uri)
    {
        if (empty($uri) && is_rtl() && file_exists(get_template_directory() . '/rtl.css'))
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter('locale_stylesheet_uri', 'chld_thm_cfg_locale_css');

if (!function_exists('chld_thm_cfg_parent_css')) :
    function chld_thm_cfg_parent_css()
    {
        wp_enqueue_style('chld_thm_cfg_parent', trailingslashit(get_template_directory_uri()) . 'style.css', array());
    }
endif;
add_action('wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10);
// END ENQUEUE PARENT ACTION

// read more custom
function new_excerpt_more($more)
{
    return ' <a class="read-more" href="' . get_permalink(get_the_ID()) . '">' . __('+ info', 'your-text-domain') . '</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

//add CPT to search
add_filter( 'pre_get_posts', 'custom_post_type_search' );
function custom_post_type_search( $query ) {
     if ($query->is_search) {
          $query->set('post_type', array( 'post', 'agendakzk'));
     }
     return $query;
}
