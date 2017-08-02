<?php
/*
Plugin Name: NS Simple Intro Loader
Plugin URI: http://www.nsthemes.com
Description: This plugin include intro loader in your WordPress
Version: 1.0.1
Author: NsThemes
Author URI: http://www.nsthemes.com
License: GNU General Public License v2.0
License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/* *** include plugin option *** */
require_once( plugin_dir_path( __FILE__ ).'ns-simple-intro-loader-option.php');

/* *** include plugin settings *** */
require_once( plugin_dir_path( __FILE__ ).'ns-admin-options/ns-admin-options-setup.php');


/* *** include frontend js *** */
function ns_s_i_l_load_js( $hook ) {      
        wp_enqueue_script( 'ns-simple-intro-loader',  plugin_dir_url( __FILE__ ).'assets/js/ns-simple-intro-loader.js', array( 'jquery' ), false, true );
        $ns_disp_dim_load =  get_option('ns_simple_loader_dimension', '');
        if($ns_disp_dim_load != '' && $ns_disp_dim_load == 1){
        	wp_enqueue_script( 'ns-simple-intro-loader-custom-big',  plugin_dir_url( __FILE__ ).'assets/js/ns-simple-intro-loader-custom-big.js', array( 'jquery' ), false, true );
        }else{
        	wp_enqueue_script( 'ns-simple-intro-loader-custom-small',  plugin_dir_url( __FILE__ ).'assets/js/ns-simple-intro-loader-custom-small.js', array( 'jquery' ), false, true );                
        }
}
add_action( 'wp_enqueue_scripts', 'ns_s_i_l_load_js' );


/* *** include frontend css *** */
function ns_s_i_l_load_css($hook) {
    	wp_enqueue_style( 'ns-simple-intro-loader.min', plugin_dir_url( __FILE__ ).'assets/css/ns-simple-intro-loader.min.css', array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'ns_s_i_l_load_css' );



function nsdrawdivfunc(){
	echo '<div id="nsSimLoader" class="introLoading"></div>';
}
add_action('wp_footer', 'nsdrawdivfunc');
?>