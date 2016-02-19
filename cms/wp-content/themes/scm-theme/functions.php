<?php
function theme_enqueue_styles() {

    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style )
    );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

add_action( 'wp_enqueue_scripts', 'theme_js' );

function theme_js() {
	wp_register_script('ajax_call', get_stylesheet_directory_uri() .'/main.js', array('jquery'), true);
	wp_enqueue_script('ajax_call');
	$translation_array = array( 'templateUrl' => get_stylesheet_directory_uri() );
	//after wp_enqueue_script
	wp_localize_script( 'ajax_call', 'object_name', $translation_array );
}

//register template menu
// function register_my_menu() {
//   register_nav_menu('megamenu',__( 'megamenu' ));
// }
// add_action( 'init', 'register_my_menu' );

// enable featured image on pages/posts
add_theme_support( 'post-thumbnails' );

/* increase the limit of srcset
 * more info: http://wordpress.stackexchange.com/questions/211368/wp-4-4-responsive-images-browser-choosing-the-wrong-one
 */

add_image_size( 'featuredImage_mobile', 768, 600, true );
add_image_size( 'featuredImage_desktop', 1920, 600, true );


/* increase the limit of srcset
 * more info: http://wordpress.stackexchange.com/questions/211368/wp-4-4-responsive-images-browser-choosing-the-wrong-one
 */
add_filter('max_srcset_image_width', function($max_srcset_image_width, $size_array){
    return 2000;
}, 10, 2);


function scm_menu() {
    include 'template/megamenu.php';
}
function scm_language() {
    include 'template/language.php';
}
@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

    register_sidebar(array(
            'name' => 'Sidebar',
            'before_widget' => '<div>',
            'after_widget' => '</div>',
            'before_title' => '<h2>',
            'after_title' => '</h2>',
    ));

?>