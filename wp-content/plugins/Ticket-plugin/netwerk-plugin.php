<?php
    ob_start();
    /*
    Plugin Name: netwerk plugin
    Version: 1.0
    Author: Mitchell van der Woude
    Author URI: https://github.com/Mitchfire1997
    Description: Dit wordt een netwerk form
    Text Domain: Test.nl
    */

    function form_netwerk_shortcode()
    {
        date_default_timezone_set("Europe/Amsterdam");
        global $wpdb;  
        
        
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "conferentie";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql =  "select beschikbaar from kaartjessoort where soort = 'overheid'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo  "Netwerkbijeenkomst kaartjes voorraad: " . $row["beschikbaar"].   "<br>";
    }
} else {
    echo "0 results";
}
       
$conn->close();
?>
        <!DOCTYPE html>
    <html>
        <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script>
        $(document).ready(function(){
               $("#button1").click(function(){
                $("ol").append("<li><select name='dag'></select> <select name='maaltijd'></select><button value='delete'</li>");
            });           
            
        });
            
    $(function(){
                var maxAppend = 0;

                $("#button1").click(function(){

                    if (maxAppend >= 250) return;

                    var newTicket = 
                    ' <tr>                                                                                                                                                                                                                       <td>Type: <select name = "soort"> <option value = "overheid" > Overheid </option> <option value = "financiëel" > Financiëel </option>  <option value = "onderwijs" > Onderwijs </option>  <option value = "development" > Development </option>                                                                                                                                        </td> <td><input type="text" name="prijs" value="25" readonly/>                                                                                                                                                                                                          <td> <button class = "delete" type = "button" > Verwijder Ticket </button></td>                                                                                                                                                                                                   </tr> ';

                $('#newTicket').append(newTicket); 

                maxAppend++;

            });

            $("#newTicket").delegate(".delete", "click", function(){

                $(this).parent().parent().remove();

                maxAppend--;

            });
        });

        
        </script>
        </head>
        <form action='http://localhost/conferentie/wordpress/netwerkbijeenkomst' method='post'>
           <tr>
                                                                                                                                                                                                                                    <td>Type: <select name = "soort"> <option value = "overheid" > Overheid </option>
                                                <option value = "financiëel" > Financiëel </option>
                                                <option value = "onderwijs" > Onderwijs </option>
                                                <option value = "development" > Development </option></select>                                                                                                                                </td> 
               <td><input type="text" name="prijs" value="25" readonly/> </td>  
            </tr>          
           <tr>     
                <button type = "button" id="button1">Ticket toevoegen</button>
                <div id='newTicket'></div>
           </tr>
                <tr>
                <td>Betaalmethode<select name="betaalmethode"><option value="IDEAL">IDEAL</option>
                                                              <option value="PAYPAL">PAYPAL</option>
                                                              <option value="CREDITCARD">CREDITCARD</option>
                    </select>
                </td>
            </tr> <br>  
        <tr>
        <td><input type='submit' name='submit' value='Bestellen'/></td>
        </tr>
        </body>
</html>

  <?php
            
        if(isset($_POST["submit"]))
        {
         
            $wpdb->query(
                        $wpdb -> prepare("INSERT INTO `bestelling`  (`user`,
                                                                    `betaalmethode`,
                                                                    `prijs_totaal`)
                                         VALUES
                                                                    ('%d',
                                                                     '%d',
                                                                     '%d')", 
                                                                     $_POST["user"],
                                                                     $_POST["betaalmethode"],
                                                                     $_POST["prijs_totaal"]
                                                                    )
                );
        var_dump($_POST);
            
       

 
       
    }
         
}
 
    function form_netwerk_register_shortcode()
    {
        add_shortcode('form-netwerk','form_netwerk_shortcode');
    }

    add_action('init', 'form_netwerk_register_shortcode');
?>
