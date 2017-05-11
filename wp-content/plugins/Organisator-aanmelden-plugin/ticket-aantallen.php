<?php
    ob_start();
    /*
    Plugin Name: aantal
    Version: 1.0
    Author: Mitchell van der Woude
    Author URI: https://github.com/Mitchfire1997
    Description: Dit wordt een organisator aanvraag bekijk pagina
    Text Domain: Test.nl
    */

    function aantal_plugin_shortcode()
    {
        
        date_default_timezone_set("Europe/Amsterdam");
        global $wpdb;  
        
       
         $vrijdag = $wpdb->get_var("SELECT count(id) from ticket where soort = 1"); 
        ?> Vrijdag: <?php  echo $vrijdag; ?> <br> <?php
        
         $zaterdag = $wpdb->get_var("SELECT count(id) from ticket where soort = 2"); 
        ?> Zaterdag: <?php  echo $zaterdag; ?> <br> <?php
        
         $zondag = $wpdb->get_var("SELECT count(id) from ticket where soort = 3"); 
        ?> Zondag: <?php  echo $zondag; ?> <br> <?php
        
         $passepartout = $wpdb->get_var("SELECT count(id) from ticket where soort = 4"); 
        ?> Passe-Partout: <?php  echo $passepartout; ?> <br> <?php
        
         $weekend = $wpdb->get_var("SELECT count(id) from ticket where soort = 5"); 
        ?> Weekend: <?php  echo $weekend; ?> <br> <?php
        
    }



    function aantal_shortcode()
    {
        add_shortcode('aantal','aantal_plugin_shortcode');
    }

    add_action('init', 'aantal_shortcode');

?>