<?php
    ob_start();
    /*
    Plugin Name: organisator aanmeld plugin
    Version: 1.0
    Author: Mitchell van der Woude
    Author URI: https://github.com/Mitchfire1997
    Description: Dit wordt een organisator aanmeld pagina
    Text Domain: Test.nl
    */

    function organisator_aanmeld_plugin_shortcode()
    {
        date_default_timezone_set("Europe/Amsterdam");
        global $wpdb; 
        
   session_start();
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'conferentie');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
        ?>

<style>
        div#foutmelding {
        color: red;
        font-weight: 600;
    }
</style>

       <table>
                    <form action='http://localhost/conferentie/wordpress/organisator-aanmelden/' method='post'>
                    
                    <tr>
                        <td>Email:</td><td><input type='email' name='email'/></td>
                    </tr>
                    <tr>
                        <td>Wachtwoord:</td> <td><input type='password' name='wachtwoord' required/></td>
                    </tr>
                        <td><input type='submit' name='submit'/></td>
                    </form>
        </table>
<div id='foutmelding'>
<?php
        
          if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $rol = mysqli_real_escape_string($db,$_POST['rol']);
      $email = mysqli_real_escape_string($db,$_POST['email']);
      $wachtwoord = mysqli_real_escape_string($db,$_POST['wachtwoord']); 
      
      $sql = "SELECT id FROM user WHERE rol = 3 and email = '$email' and wachtwoord = '$wachtwoord'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         $_SESSION['user'] = $email;
         
         header("location: overzicht_sloten");
      }else {
         $error = "Your email or Password is invalid";
          echo $error;
      }
   }
        
    }

    function organisator_aanmeld_shortcode()
    {
        add_shortcode('organisator-aanmeld','organisator_aanmeld_plugin_shortcode');
    }

    add_action('init', 'organisator_aanmeld_shortcode');
?>
</div>
