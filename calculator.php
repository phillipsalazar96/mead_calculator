<?php
/**
 * @package Mead Calculator Shortcode
 * @version 1..0.0
 */
/*
Plugin Name: Mead Calculator Shortcode
Plugin URI: https://thetastymead.com
Description: Mead calculator type thingy!!!!!!
Author: Phillip Salazar
Version: 1..0.0
Author URI: http://phillipsalazar.com
*/

function meadCalculator( $attr ) 
{
    ob_start();
    //get_template_part( 'widget.php' );
    include 'widget.php';
    return ob_get_clean();
}

function register_shortcodez(){
    add_shortcode('meadcalculator', 'meadCalculator');
 }

 add_action( 'init', 'register_shortcodez');
