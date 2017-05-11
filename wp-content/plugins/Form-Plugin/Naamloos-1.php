<?php
    ob_start();
    /*
    Plugin Name: test
    Version: 1.0
    Author: Mitchell van der Woude
    Author URI: https://github.com/Mitchfire1997
    Description: Dit wordt een organisator aanmeld pagina
    Text Domain: Test.nl
    */

    
function test_plugin_shortcode()
    {
        date_default_timezone_set("Europe/Amsterdam");
        global $wpdb; 
     
   // De headers worden altijd meegestuurd als array
$headers = array();
$headers[] = 'X-Api-Key: aABHjjWGDR6mNCw907V046HnTBitIzWc7z91yPuu';

// De URL naar de API call
$url = 'https://postcode-api.apiwise.nl/v2/addresses/?postcode=1234AB';

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

// Indien de server geen TLS ondersteunt kun je met 
// onderstaande optie een onveilige verbinding forceren.
// Meestal is dit probleem te herkennen aan een lege response.
// curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

// De ruwe JSON response
$response = curl_exec($curl);

// Gebruik json_decode() om de response naar een PHP array te converteren
$data = json_decode($response);

curl_close($curl);
    }

    function test_shortcode()
    {
        add_shortcode('test','test_plugin_shortcode');
    }

    add_action('init', 'test_shortcode');

?>