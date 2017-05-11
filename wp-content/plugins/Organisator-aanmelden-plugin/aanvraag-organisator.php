<?php
    ob_start();
    /*
    Plugin Name: aanvraag
    Version: 1.0
    Author: Mitchell van der Woude
    Author URI: https://github.com/Mitchfire1997
    Description: Dit wordt een organisator aanvraag bekijk pagina
    Text Domain: Test.nl
    */

    function aanvraag_plugin_shortcode()
    {
 ?>
   
<?php
        date_default_timezone_set("Europe/Amsterdam");
        global $wpdb;  
        
        if(isset ($_GET["id"])&& isset($_GET["action"])){
                if($_GET["action"] == "delete")
                {
                    $wpdb-> query(
                    $wpdb->prepare(
                        "DELETE FROM `login` WHERE `id` = '%d'" ,$_GET["id"])
                );
                }
             elseif($_GET["action"] == "update")
                {
                    $wpdb-> query(
                    $wpdb->prepare(
                        "UPDATE slot SET Tag=3 WHERE id = '%d' ", $_GET["id"])
                       
                );
                }
            
        }
       
         $result = $wpdb-> get_results(
                    "SELECT login.id, login.1e_slot, login.onderwerp, login.omschrijving FROM login INNER JOIN slot ON slot.id = login.1e_slot WHERE Tag = 2", ARRAY_A
                );

        
          echo "<table>
                <tr>
                    <th>ID</th>
                    <th>1e_slot</th>
                    <th>onderwerp</th>
                    <th>omschrijving</th>
                    <th>Accept Verander tag in 3</th>
                    <th>Delete</th>
                </tr>";
            
            for( $i = 0; $i < sizeof($result); $i++){
                echo"<tr>
                        <td>".$result[$i]["id"]."</td>
                        <td>".$result[$i]["1e_slot"]."</td>
                        <td>".$result[$i]["onderwerp"]."</td>
                        <td>".$result[$i]["omschrijving"]."</td>
                        <td><a href='http://localhost/conferentie/wordpress/aanvraag/?id=".$result[$i]["1e_slot"]."&action=update'>
                        <img src='http://localhost/conferentie/wordpress/wp-content/plugins/Organisator-aanmelden-plugin/images/vink.png' alt='vink'</a></td>
                        <td><a href='http://localhost/conferentie/wordpress/aanvraag/?id=".$result[$i]["id"]."&action=delete'>
                        <img src='http://localhost/conferentie/wordpress/wp-content/plugins/Organisator-aanmelden-plugin/images/drop.png' alt='cross'</a></td>
                    </tr>" ;  
            }
            echo "</table>";
            echo "</form>";
        


    }

    function aanvraag_shortcode()
    {
        add_shortcode('aanvraag','aanvraag_plugin_shortcode');
    }

    add_action('init', 'aanvraag_shortcode');

?>