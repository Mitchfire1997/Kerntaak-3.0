<?php
    ob_start();
    /*
    Plugin Name: Search Tags
    Version: 1.0
    Author: Mitchell van der Woude
    Author URI: https://github.com/Mitchfire1997
    Description: Dit wordt een organisator aanvraag bekijk pagina
    Text Domain: Test.nl
    */

    function search_plugin_shortcode()
    {
        
        date_default_timezone_set("Europe/Amsterdam");
        global $wpdb;  
        
       
      
    }



    function search_shortcode()
    {
        add_shortcode('search','search_plugin_shortcode');
    }

    add_action('init', 'search_shortcode');

?>