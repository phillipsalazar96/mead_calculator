<?php
/**
 * @package Sanitize Equipment Shortcode
 * @version 1..0.0
 */
/*
Plugin Name: Sanitize Equipment Shortcode
Plugin URI: https://thetastymead.com
Description: Mead calculator type thingy!!!!!!
Author: Phillip Salazar
Version: 1..0.0
Author URI: http://phillipsalazar.com
*/

function shortcodeContent () 
{
    $str = "Before we start make sure to sanitize all equipment before use, so there won't be any type of contaminations.";
    return $str;
}

function register_shortcodes(){
    add_shortcode('sanitize', 'shortcodeContent');
 }

 add_action( 'init', 'register_shortcodes');
