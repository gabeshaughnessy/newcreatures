<?php
/* DEFINE ENVIRONMENT GLOBAL */
$host = $_SERVER['HTTP_HOST'];
if (stristr($host, 'com') == FALSE){
    define('NC_ENVIRONMENT', "development");
    }
    elseif ((stristr($host, 'staging') !== FALSE)){
        define('NC_ENVIRONMENT', "staging");
        }
        else{
            define('NC_ENVIRONMENT', "production");
            } 
/* Plugins Activiation */
/* ################################################################################# */

    if (NC_ENVIRONMENT != 'development') {
       define('ACF_LITE', true);
    }

    /* Advanced Custome Fields */
    require_once('functions/plugins/advanced-custom-fields/acf.php');
    /* ACF Add-ons */
    //include_once( 'functions/plugins/advanced-custom-fields/add-ons/acf-repeater/acf-repeater.php' );
    //include_once( 'functions/plugins/advanced-custom-fields/add-ons/acf-flexible-content/acf-flexible-content.php' );
    //include_once( 'functions/plugins/advanced-custom-fields/add-ons/acf-options-page/acf-options-page.php' ); 
    //include_once( 'functions/plugins/advanced-custom-fields/add-ons/acf-field-date-time-picker/acf-date_time_picker.php' ); 

    if ( NC_ENVIRONMENT != 'development' ) {
        // If this is staging or production
            // load ACF declarations
            require_once('functions/plugins/advanced-custom-fields/register-fields.php'); 
        }
        else{            
            add_action( 'admin_menu', 'nc_acf_menu', 9 );
            function nc_acf_menu(){
                add_submenu_page( 'edit.php?post_type=acf', __('Custom Fields','acf'), __('Custom Fields','acf'), 'manage_options', 'edit.php?post_type=acf');
                add_submenu_page( 'edit.php?post_type=acf', __('Import ACF','acf'), __('Import ACF','acf'), 'manage_options', 'admin.php?import=wordpress');
                }

    }


add_filter('body_class','add_category_to_single');
function add_category_to_single($classes) {
	if (is_single() ) {
		global $post;
		foreach((get_the_category($post->ID)) as $category) {
			// add category slug to the $classes array
			$classes[] = $category->category_nicename;
		}
	}
	// return the $classes array
	return $classes;
}

add_image_size( 'full-screen', 1600, 9999 );


//RESPONSIVE SLIDER OPTIONS
function mySliderOptions(){
    $responsive_slides_options = array(
        'timeout' => 1000,
        'auto' => false,
        'nav'  => true,
        'pause' => true,
        'prevText'=> '&#171;',   // String: Text for the "previous" button
        'nextText' => '&#187;', 
        'navContainer' => '#slider-nav'
      
    );
    return $responsive_slides_options;
}
$responsive_slides_options = add_filter( 'responsive_slides_options', 'mySliderOptions', 10,1);

//ENQUEUE ADDITIONAL JAVASCRIPTS
//wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );
wp_enqueue_script('child-theme', get_bloginfo("stylesheet_directory").'/assets/javascripts/child-theme.js', array( 'jquery' ), false);
?>