<?php

/**
 * Plugin Name: WP Plugin by SadekurRahma225
 * Plugin URI: https://www.fiverr.com/users/sadekurrahma225/
 *Description: A Booking search tool in English Developed by Sadekurrahma225, A 5 Star Rated Developer on Fiverr and Upwork. Shortcode is search_form_en
 *Version: 1.0
 *Author: Sadekur Rahman
 *Author URI: https://www.linkedin.com/in/sadekur-rahman-a9b149143/
 *Text Domain: sadekurrahma225
 */


if (!function_exists('add_action')) {
    echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
    exit;
}

add_action('init', 'search_form_init');

function search_form_init()
{
    add_shortcode('search_form_en', 'search_form_en_function');
}

function search_form_en_function()
{
    //     $html = '<div >
    //         <div >
    // 	        <div >
    // 	        	<form id="formid"  name="order" class="form-inline"  action="">
    // 		            <div >
    // 		                <div >
    //                             <label class="STinline">Checkin Date</label>
    // 		                    <input class="STinline" id="checkInDate" type="text" name="checkInDate" value=""  />


    //                             <label class="STinline">Checkout Date</label>
    //                             <input class="STinline" id="checkOutDate" type="text" name="checkOutDate" value=""  />



    //                             <button class="STinline" id="search_button" type="submit" >
    //                                 BOOK NOW
    //                             </button>
    // 		                </div>
    // 		            </div>
    // 		        </form>
    // 	        </div>
    // 	    </div>
    // 	</div>
    // </form>';

    $html = '<form id="formid" class="form-inline" name="order" >

  <label id="ST_title_1" class="mr-sm-2">Check IN </label>
        <input id="checkInDate" type="text" name="checkInDate" value=""  class="form-control mb-2 mr-sm-2" >
        
                <span id="ST_calendar" class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                </span>
        
  <label id="ST_title_2" class="mr-sm-2">Check OUT</label>
        <input id="checkOutDate" type="text" name="checkOutDate" value=""  class="form-control mb-2 mr-sm-2" >

                <span id="ST_calendar" class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                </span>
        
  <button id="search_button" type="submit" >BOOK NOW</button>
  </form>';

    return
        $html;
}

add_action('wp_enqueue_scripts', 'custom_js');

function custom_js()
{
    wp_enqueue_script('custom_js', plugin_dir_url(__FILE__) . 'assets/js/custom_sadekurrahma225.js');
    wp_enqueue_style('custom_css', plugin_dir_url(__FILE__) . 'assets/css/custom_sadekurrahma225.css');
    wp_enqueue_script('bootstrap_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js');
    //  wp_enqueue_script('jQuery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js');
    wp_enqueue_style('wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=Merriweather&display=swap', false);
    wp_enqueue_style('wpb-google-fonts-button', 'https://fonts.googleapis.com/css2?family=Spinnaker&display=swap', false);
    wp_enqueue_style('wpb-google-fonts-checkin', 'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@700&display=swap', false);

    //links for bootstrap to work

    wp_enqueue_style('bootstrap_datepicker', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.css');
    wp_enqueue_style('bootstrap_min', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
    wp_enqueue_script('bootstrap-datepicker_js', 'https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js');

    //links for bootstrap for responsive form
    wp_enqueue_style('bootstrap_theme_min', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css');
}


//<input  id="checkInDate"  type="text" name="checkInDate" value="" onfocus ="(this.type=&#39date&#39)">
//<input id="checkOutDate"  type="text" name="checkOutDate" value="" onfocus ="(this.type=&#39date&#39)"/>