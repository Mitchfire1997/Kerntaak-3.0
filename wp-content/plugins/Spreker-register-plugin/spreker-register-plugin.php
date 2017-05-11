<?php
    ob_start();
    /*
    Plugin Name: spreker register plugin
    Version: 1.0
    Author: Mitchell van der Woude
    Author URI: https://github.com/Mitchfire1997
    Description: Dit wordt spreker registreer 
    Text Domain: Test.nl
    */

    function spreker_plugin_shortcode()
    {
        date_default_timezone_set("Europe/Amsterdam");
        global $wpdb;       
    
            if(isset($_POST["submit"]))
        {
            
            $wpdb->query(
                        $wpdb -> prepare("INSERT INTO `login`(      `rol`,
                                                                    `1e_slot`,
                                                                    `naam`,
                                                                    `email`,
                                                                    `adres`,
                                                                    `onderwerp`,
                                                                    `omschrijving`,
                                                                    `wensen`)
                                         VALUES
                                                                    (2,
                                                                     '%s',
                                                                     '%s',
                                                                     '%s',
                                                                     '%s',
                                                                     '%s',
                                                                     '%s',
                                                                     '%s')", 
                            
                                                                     $_POST["id"],
                                                                     $_POST["naam"],
                                                                     $_POST["email"],
                                                                     $_POST["adres"],
                                                                     $_POST["onderwerp"],
                                                                     $_POST["omschrijving"],
                                                                     $_POST["wensen"]
                                                                    
                                                                    )
                );
              
              // header("location: agenda");
                $wpdb-> query(
                    $wpdb->prepare(
                        "UPDATE slot SET Tag=2 WHERE id = '%d' ", $_POST["id"])
                       
                );
                var_dump($_POST);
        
            
        }

       ?> 


             
     <table>
                    <form action="http://localhost/conferentie/wordpress/spreker-aanmelden/" method="post">
                    <tr>
                        <td>naam:</td><td> <input type="text" name="naam"/></td>
                    </tr>    
                    <tr>
                        <td>Email:</td><td> <input type="email" name="email"/></td>
                    </tr>
                    <tr>
                        <td>Adres:</td> <td><input type="text" name="adres"/></td>
                    </tr>
                    <tr>
                        <td>Onderwerp:</td> <td><input type="text" name="onderwerp"/></td>
                    </tr>
                     <tr>
                        <td>Korte omschrijving Onderwerp:</td> <td><textarea name="omschrijving"></textarea></td>
                    </tr>
                    <tr>
                        <td>Wensen:</td> <td><input type="checkbox" name="wensen" value="Geen">Geen</td>
                    </tr>    
                     <tr>
                        <td></td> <td><input type="checkbox" name="wensen" value="Beamer">Beamer</td>
                    </tr>
                    <tr>
                        <td></td> <td><input type="checkbox" name="wensen" value="Laptop">Laptop</td>
                    </tr>
                    <tr>
                        <td></td> <td><input type="checkbox" name="wensen" value="Aanwijsstok">Aanwijsstok</td>
                    </tr>  
                    <tr>
                        <td></td> <td><input type="checkbox" name="wensen" value="Speakers">Speakers</td>
                    </tr>
                    <tr>
                        <td>1e Keus:</td><td><?php
        
            $conn = new mysqli('localhost', 'root', '', 'conferentie') 
            or die ('Cannot connect to db');

    $result = $conn->query("select id, dag, zaal, begintijd, eindtijd from slot where Tag = 1");
    
    echo "<html>";
    echo "<body>";
    echo "<select name='id'>";

    while ($row = $result->fetch_assoc()) {

                  unset($id, $dag, $zaal, $begintijd, $eindtijd);
                  $id = $row['id'];
                  $dag = $row['dag']; 
                  $zaal = $row['zaal']; 
                  $begintijd = $row['begintijd']; 
                  $eindtijd = $row['eindtijd']; 
                  echo '<option value="'.$id.'">Dag: '.$dag.' Zaal: '.$zaal.' Begintijd: '.$begintijd.' Eindtijd: '.$eindtijd.' </option>';
                 
}

    echo "</select>";
    echo "</body>";
    echo "</html>";
?></td>
                    </tr>
                        <td><input type='submit' name='submit' value='Aanmelden'/></td>
                    </form>
                    </table>

        <?php
    }


    function spreker_register_shortcode()
    {
        add_shortcode('spreker-register','spreker_plugin_shortcode');
    }

    add_action('init', 'spreker_register_shortcode');
?>
