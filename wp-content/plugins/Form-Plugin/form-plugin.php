<?php
    ob_start();
    /*
    Plugin Name: form plugin
    Version: 1.0
    Author: Mitchell van der Woude
    Author URI: https://github.com/Mitchfire1997
    Description: Dit wordt een form
    Text Domain: Test.nl
    */

    function form_plugin_shortcode()
    {
        global $wpdb; 
          session_start();
        
        
  
        if(isset($_POST["submit"]))
        {
            $pass = MD5($_POST["wachtwoord"]);
            $wpdb->query(
                        $wpdb -> prepare("INSERT INTO `user`(       `rol`,
                                                                    `voornaam`,
                                                                    `tussenvoegsel`,
                                                                    `achternaam`,
                                                                    `email`,
                                                                    `adres`,
                                                                    `wachtwoord`)
                                         VALUES
                                                                    (1,
                                                                     '%s',
                                                                     '%s',
                                                                     '%s',
                                                                     '%s',
                                                                     '%s',
                                                                     '')", 
                                                                     $_POST["voornaam"],
                                                                     $_POST["tussenvoegsel"],
                                                                     $_POST["achternaam"],
                                                                     $_POST["email"],
                                                                     $_POST["adres"],
                                                                     $pass
                                                                    )
                );
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['naam'] = $_POST['achternaam'];
            
               header("location: ticket");
        
            
        }
  
          
       $output = " 
                    <table>
                    <form action='http://localhost/conferentie/wordpress/registreren_bezoeker' method='post'>
                    <tr>
                        <td>Voornaam:</td><td><input type='text' name='voornaam' required/></td>
                    </tr>
                    <tr>
                        <td>Tussenvoegsel:</td><td> <input type='text' name='tussenvoegsel'/></td>
                    </tr>
                    <tr>
                        <td>Achternaam:</td> <td><input type='text' name='achternaam' required/></td>
                    </tr>
                    <tr>
                        <td>Email:</td> <td><input type='email' name='email' required/></td>
                    </tr>
                     <tr>
                        <td>Adres:</td> <td><input type='text' name='adres' required/></td>
                    </tr>
                        <td><input type='submit' name='submit' value='Volgende'/></td>
                    </form>
                    </table>";
        
        return $output;
    }


    function form_login_register_shortcode()
    {
        add_shortcode('form-login','form_plugin_shortcode');
    }

    add_action('init', 'form_login_register_shortcode');
?>
