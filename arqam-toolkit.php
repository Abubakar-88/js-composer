<?php 
/*
Plugin Name: Arqam Toolkit
*/

if(!defined('ABSPATH')){
    exit; //Exit if accessed directly
}

//defines
define( 'ARQAM_ACC_URL', WP_PLUGIN_URL . '/' . plugin_basename( dirname(__FILE__) ) . '/' );
define( 'ARQAM_ACC_PATH', plugin_dir_path( __FILE__ ) );

function arqam_toolkit_get_slide_as_list(){
    $args = wp_parse_args( array(
        'post_type' => 'slide',
        'numberposts' => -1,

    ));
   $posts = get_posts( $args );

   $post_options = array(esc_html__('--select slide--', 'arqam-toolkit')=>'');
   if( $posts ) {
       foreach ($posts as $post) {
           $post_options[ $post->post_title ] = $post->ID;
       }
   }

 return $post_options;
}
function arqam_toolkit_get_page_as_list(){
    $args = wp_parse_args( array(
        'post_type' => 'page',
        'numberposts' => -1,

    ));
   $posts = get_posts( $args );

   $post_options = array(esc_html__('--select page--', 'arqam-toolkit')=>'');
   if( $posts ) {
       foreach ($posts as $post) {
           $post_options[ $post->post_title ] = $post->ID;
       }
   }

 return $post_options;
}




//register custom post
function arqam_toolkit_custom_post() {
    register_post_type( 'slide',
        array(
            'labels' => array(
                'name' => esc_html__( 'Slides', 'arqam-toolkit' ),
                'singular_name' => esc_html__( 'Slide' )
            ),
            'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
            'public' => true,
            

        )
    );
    register_post_type( 'project',
        array(
            'labels' => array(
                'name' => esc_html__( 'Projects', 'arqam-toolkit' ),
                'singular_name' => esc_html__( 'Project' )
            ),
            'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
            'public' => true,
            

        )
    );
}
add_action( 'init', 'arqam_toolkit_custom_post' );

function arqam_toolkit_custom_post_taxonomy() {
    register_taxonomy(
        'project_cat',  
        'project',                  
        array(
            'hierarchical'          => true,
            'label'                 => 'Projects Category',  
            'query_var'             => true,
            'show_admin_column'     => true,
            'rewrite'               => array(
                'slug'              => 'project-category', 
                'with_front'    => true 
                )
            )
    );
}
add_action( 'init', 'arqam_toolkit_custom_post_taxonomy');

// Print shortcodes in widgets
add_filter( 'widget_text', 'do_shortcode' );

// Loading VC addons
//require_once(ARQAM_ACC_PATH . 'vc-addons/vc-blocks-load.php');
require_once(ARQAM_ACC_PATH . 'vc-addons/vc-slides.php');
require_once(ARQAM_ACC_PATH . 'vc-addons/vc-logo-carousel.php');
require_once(ARQAM_ACC_PATH . 'vc-addons/vc-service.php');
require_once(ARQAM_ACC_PATH . 'vc-addons/vc-arqam-btn.php');
require_once(ARQAM_ACC_PATH . 'vc-addons/vc-arqam-stat.php');
require_once(ARQAM_ACC_PATH . 'vc-addons/vc-testimonial-box.php');
require_once(ARQAM_ACC_PATH . 'vc-addons/vc-benefit-box.php');
require_once(ARQAM_ACC_PATH . 'vc-addons/vc-cta.php');
require_once(ARQAM_ACC_PATH . 'vc-addons/vc-promo-box.php');
require_once(ARQAM_ACC_PATH . 'vc-addons/vc-tile-gallery.php');
require_once(ARQAM_ACC_PATH . 'vc-addons/vc-arqam-contact-box.php');

//Template load addon
require_once(ARQAM_ACC_PATH . 'vc-addons/vc-templates.php');

// Theme shortcodes
require_once(ARQAM_ACC_PATH . 'theme-shortcodes/slides-shortcode.php');
require_once(ARQAM_ACC_PATH . 'theme-shortcodes/logo-carousel-shortcode.php');
require_once(ARQAM_ACC_PATH . 'theme-shortcodes/service-box-shortcode.php');
require_once(ARQAM_ACC_PATH . 'theme-shortcodes/arqam-btn-shortcode.php');
require_once(ARQAM_ACC_PATH . 'theme-shortcodes/arqam-stat-shortcode.php');
require_once(ARQAM_ACC_PATH . 'theme-shortcodes/benefit-box-shortcode.php');
require_once(ARQAM_ACC_PATH . 'theme-shortcodes/testimonial-shortcode.php');
require_once(ARQAM_ACC_PATH . 'theme-shortcodes/cta-shortcode.php');
require_once(ARQAM_ACC_PATH . 'theme-shortcodes/promo-box-shortcode.php');
require_once(ARQAM_ACC_PATH . 'theme-shortcodes/project-shortcode.php');
require_once(ARQAM_ACC_PATH . 'theme-shortcodes/tile-gallery-shortcode.php');
require_once(ARQAM_ACC_PATH . 'theme-shortcodes/contact-box-shortcode.php');

// Shortcodes depended on Visual Composer
///include_once(ABSPATH . 'wp-admin/inclodes/plugin.php');
//if (is_plugin_active( 'js_composer/js_composer.php' )){
 //  require_once(ARQAM_ACC_PATH . 'theme-shortcodes/staff-shortcode.php');
//}

// Registering arqam toolkit file
function arqam_toolkit_files(){
    wp_enqueue_style('owl-carousel', plugin_dir_url(__FILE__) . 'assets/css/owl.carousel.min.css');
    wp_enqueue_style('arqam-toolkit', plugin_dir_url(__FILE__) . 'assets/css/arqam-toolkit.css');
    
    wp_enqueue_script('jquery', plugin_dir_url(__FILE__) . 'assets/js/jquery.min.js', array('jquery'), '2.2.2', true);
    wp_enqueue_script('owl-carousel', plugin_dir_url(__FILE__) . 'assets/js/owl.carousel.min.js', array('jquery'), '2.3.4', true);
    wp_enqueue_script('gmap3', plugin_dir_url(__FILE__) . 'assets/js/gmap3.min.js', array('jquery'), '3.42', true);
    wp_enqueue_script('isotope', plugin_dir_url(__FILE__) . 'assets/js/isotope.pkgd.min.js', array('jquery'), '3.0.6', true);
}
add_action( 'wp_enqueue_scripts', 'arqam_toolkit_files' );

