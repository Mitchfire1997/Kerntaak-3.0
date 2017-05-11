<?php  
ob_start();
    /*
    Plugin Name: Agenda plugin
    Version: 1.0
    Author: Mitchell van der Woude
    Author URI: https://github.com/Mitchfire1997
    Description: Dit wordt een agenda
    Text Domain: Test.nl
    */

      function agenda_plugin_shortcode()
      {
?>      

<?php
       
       
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
                #content tr td:last-child{
                        border: 1px solid #000000;
                    }

                    #content tr td {
                        border: 1px solid rgb(0, 0, 0);
                        padding: 6px 24px;
                    }
        </style>
        <div id="AgendaBeschrijving">
            Welkom op bij de agenda van de conferentie over Games.
        </div>
        <div id="AgendaForm">
         <table>
                        <tr>
                        <td>
                            Vrijdag
                        </td>        
                            <td>
                                Zaal 1
                            </td>
                            <td>
                                Zaal 2
                            </td>
                            <td>
                                Zaal 3
                            </td>
                            <td>
                                Zaal 4
                            </td>
                    </tr>
                    <tr>  
                        <td>
                            15:30 - 16:30
                        </td>
                            <td>
                                    
                                        
                                       <?php
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

                                        //$sql = "SELECT naam, onderwerp, omschrijving FROM login where 1e_slot = 1";
                                            $sql = "SELECT login.naam, login.onderwerp, login.omschrijving
                                                    FROM login
                                                    INNER JOIN slot
                                                    ON login.1e_slot=slot.id where 1e_slot = 1 AND tag = 3";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                                echo "Naam Spreker: " . $row["naam"]. "<br> Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                 
                                        
                                          <?php
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

                                        $sql = "SELECT login.naam, login.onderwerp, login.omschrijving
                                                    FROM login
                                                    INNER JOIN slot
                                                    ON login.1e_slot=slot.id where 1e_slot = 6 AND tag = 3";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                 
                                        
                                   <?php
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

                                        $sql = "SELECT login.naam, login.onderwerp, login.omschrijving
                                                    FROM login
                                                    INNER JOIN slot
                                                    ON login.1e_slot=slot.id where 1e_slot = 11 AND tag = 3";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                                echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                 
                                        
                                   <?php
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

                                        $sql = "SELECT login.naam, login.onderwerp, login.omschrijving
                                                    FROM login
                                                    INNER JOIN slot
                                                    ON login.1e_slot=slot.id where 1e_slot = 16 AND tag = 3";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                    </tr>
                    <tr>  
                        <td>
                            16:45 - 17:45
                        </td>
                            <td>
                                 
                                        
                                  <?php
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

                                        $sql = "SELECT login.naam, login.onderwerp, login.omschrijving
                                                    FROM login
                                                    INNER JOIN slot
                                                    ON login.1e_slot=slot.id where 1e_slot = 2 AND tag = 3";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                            <td>
                                 
                                        
                                  <?php
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

                                        $sql = "SELECT login.naam, login.onderwerp, login.omschrijving
                                                    FROM login
                                                    INNER JOIN slot
                                                    ON login.1e_slot=slot.id where 1e_slot = 7 AND tag = 3";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                
                                        
                                   <?php
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

                                        $sql = "SELECT login.naam, login.onderwerp, login.omschrijving
                                                    FROM login
                                                    INNER JOIN slot
                                                    ON login.1e_slot=slot.id where 1e_slot = 12 AND tag = 3";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                 
                                        
                                   <?php
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

                                        $sql = "SELECT login.naam, login.onderwerp, login.omschrijving
                                                    FROM login
                                                    INNER JOIN slot
                                                    ON login.1e_slot=slot.id where 1e_slot = 17 AND tag = 3";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>   
                    </tr>
                    <tr>  
                        <td>
                            18:45 - 19:45
                        </td>
                            <td>
                                
                                        
                                  <?php
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

                                        $sql = "SELECT login.naam, login.onderwerp, login.omschrijving
                                                    FROM login
                                                    INNER JOIN slot
                                                    ON login.1e_slot=slot.id where 1e_slot = 3 AND tag = 3";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                             
                                        
                                   <?php
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

                                        $sql = "SELECT login.naam, login.onderwerp, login.omschrijving
                                                    FROM login
                                                    INNER JOIN slot
                                                    ON login.1e_slot=slot.id where 1e_slot = 8 AND tag = 3";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                 
                                        
                                   <?php
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

                                        $sql = "SELECT login.naam, login.onderwerp, login.omschrijving
                                                    FROM login
                                                    INNER JOIN slot
                                                    ON login.1e_slot=slot.id where 1e_slot = 13 AND tag = 3";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                
                                        
                                  <?php
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

                                        $sql = "SELECT login.naam, login.onderwerp, login.omschrijving
                                                    FROM login
                                                    INNER JOIN slot
                                                    ON login.1e_slot=slot.id where 1e_slot = 18 AND tag = 3";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                    </tr>
                    <tr>
                        <td>
                           20:00 - 21:00
                        </td>
                            <td>            
                             
                                        
                                 <?php
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

                                        $sql = "SELECT login.naam, login.onderwerp, login.omschrijving
                                                    FROM login
                                                    INNER JOIN slot
                                                    ON login.1e_slot=slot.id where 1e_slot = 4 AND tag = 3";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                 
                                        
                                   <?php
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

                                        $sql = "SELECT login.naam, login.onderwerp, login.omschrijving
                                                    FROM login
                                                    INNER JOIN slot
                                                    ON login.1e_slot=slot.id where 1e_slot = 9 AND tag = 3";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                
                                        
                                   <?php
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

                                        $sql = "SELECT login.naam, login.onderwerp, login.omschrijving
                                                    FROM login
                                                    INNER JOIN slot
                                                    ON login.1e_slot=slot.id where 1e_slot = 14 AND tag = 3";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                 
                                        
                                   <?php
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

                                        $sql = "SELECT login.naam, login.onderwerp, login.omschrijving
                                                    FROM login
                                                    INNER JOIN slot
                                                    ON login.1e_slot=slot.id where 1e_slot = 19 AND tag = 3";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td> 
                    </tr>
                    <tr>  
                        <td>
                            21:30 - 22:30
                        </td>
                            <td>   
                                 
                                        
                                  <?php
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

                                        $sql = "SELECT login.naam, login.onderwerp, login.omschrijving
                                                    FROM login
                                                    INNER JOIN slot
                                                    ON login.1e_slot=slot.id where 1e_slot = 5 AND tag = 3";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                            <td>
                                
                                        
                                  <?php
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

                                        $sql = "SELECT login.naam, login.onderwerp, login.omschrijving
                                                    FROM login
                                                    INNER JOIN slot
                                                    ON login.1e_slot=slot.id where 1e_slot = 10 AND tag = 3";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                 
                                        
                                   <?php
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

                                        $sql = "SELECT login.naam, login.onderwerp, login.omschrijving
                                                    FROM login
                                                    INNER JOIN slot
                                                    ON login.1e_slot=slot.id where 1e_slot = 15 AND tag = 3";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                 
                                        
                                   <?php
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

                                        $sql = "SELECT login.naam, login.onderwerp, login.omschrijving
                                                    FROM login
                                                    INNER JOIN slot
                                                    ON login.1e_slot=slot.id where 1e_slot = 20 AND tag = 3";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                    </tr>
                        </table>
                        <table>
                         <tr>
                        <td>
                            Zaterdag
                        </td>        
                            <td>
                                Zaal 1
                            </td>
                            <td>
                                Zaal 2
                            </td>
                            <td>
                                Zaal 3
                            </td>
                            <td>
                                Zaal 4
                            </td>
                    </tr>
                    <tr>
                    </tr>
                    <tr>  
                        <td>
                            10:15 - 11:15
                        </td>
                            <td>
                                 
                                        
                                  <?php
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

                                        $sql = "SELECT login.naam, login.onderwerp, login.omschrijving
                                                    FROM login
                                                    INNER JOIN slot
                                                    ON login.1e_slot=slot.id where 1e_slot = 21 AND tag = 3";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                 
                                        
                                   <?php
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

                                        $sql = "SELECT login.naam, login.onderwerp, login.omschrijving
                                                    FROM login
                                                    INNER JOIN slot
                                                    ON login.1e_slot=slot.id where 1e_slot = 30 AND tag = 3";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                 
                                        
                                   <?php
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

                                        $sql = "SELECT login.naam, login.onderwerp, login.omschrijving
                                                    FROM login
                                                    INNER JOIN slot
                                                    ON login.1e_slot=slot.id where 1e_slot = 39 AND tag = 3";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                 
                                        
                                   <?php
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

                                        $sql = "SELECT login.naam, login.onderwerp, login.omschrijving
                                                    FROM login
                                                    INNER JOIN slot
                                                    ON login.1e_slot=slot.id where 1e_slot = 48 AND tag = 3";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                    </tr>
                    <tr>  
                        <td>
                            11:30 - 12:30
                        </td>
                            <td>
                                 
                                        
                                 <?php
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

                                        $sql = "SELECT login.naam, login.onderwerp, login.omschrijving
                                                    FROM login
                                                    INNER JOIN slot
                                                    ON login.1e_slot=slot.id where 1e_slot = 22 AND tag = 3";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                        <td>
                                 
                                        
                              <?php
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

                                        $sql = "SELECT login.naam, login.onderwerp, login.omschrijving
                                                    FROM login
                                                    INNER JOIN slot
                                                    ON login.1e_slot=slot.id where 1e_slot = 31 AND tag = 3";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                
                                        
                                   <?php
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

                                        $sql = "SELECT login.naam, login.onderwerp, login.omschrijving
                                                    FROM login
                                                    INNER JOIN slot
                                                    ON login.1e_slot=slot.id where 1e_slot = 40 AND tag = 3";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                 
                                        
                                   <?php
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

                                        $sql = "SELECT login.naam, login.onderwerp, login.omschrijving
                                                    FROM login
                                                    INNER JOIN slot
                                                    ON login.1e_slot=slot.id where 1e_slot = 49 AND tag = 3";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                    </tr>
                    <tr>  
                        <td>
                            13:00 - 14:00
                        </td>
                            <td>
                                 
                                        
                                  <?php
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

                                        $sql = "SELECT login.naam, login.onderwerp, login.omschrijving
                                                    FROM login
                                                    INNER JOIN slot
                                                    ON login.1e_slot=slot.id where 1e_slot = 23 AND tag = 3";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td> 
                                 
                                        
                                   <?php
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

                                        $sql = "SELECT login.naam, login.onderwerp, login.omschrijving
                                                    FROM login
                                                    INNER JOIN slot
                                                    ON login.1e_slot=slot.id where 1e_slot = 32 AND tag = 3";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                 
                                        
                                   <?php
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

                                        $sql = "SELECT login.naam, login.onderwerp, login.omschrijving
                                                    FROM login
                                                    INNER JOIN slot
                                                    ON login.1e_slot=slot.id where 1e_slot = 41 AND tag = 3";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                 
                                        
                                  <?php
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

                                        $sql = "SELECT login.naam, login.onderwerp, login.omschrijving
                                                    FROM login
                                                    INNER JOIN slot
                                                    ON login.1e_slot=slot.id where 1e_slot = 50 AND tag = 3";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                    </tr>
                    <tr>
                        <td>
                           14:15 - 15:30
                        </td>
                            <td>            
                                
                                        
                                  <?php
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

                                        $sql = "SELECT login.naam, login.onderwerp, login.omschrijving
                                                    FROM login
                                                    INNER JOIN slot
                                                    ON login.1e_slot=slot.id where 1e_slot = 24 AND tag = 3";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                             <td>
                                 
                                        
                                   <?php
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

                                        $sql = "SELECT login.naam, login.onderwerp, login.omschrijving
                                                    FROM login
                                                    INNER JOIN slot
                                                    ON login.1e_slot=slot.id where 1e_slot = 33 AND tag = 3";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                 
                                        
                                   <?php
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

                                        $sql = "SELECT login.naam, login.onderwerp, login.omschrijving
                                                    FROM login
                                                    INNER JOIN slot
                                                    ON login.1e_slot=slot.id where 1e_slot = 42 AND tag = 3";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                 
                                        
                                   <?php
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

                                        $sql = "SELECT login.naam, login.onderwerp, login.omschrijving
                                                    FROM login
                                                    INNER JOIN slot
                                                    ON login.1e_slot=slot.id where 1e_slot = 51 AND tag = 3";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                    </tr>
                    <tr>  
                        <td>
                           15:30 - 16:30
                        </td>
                            <td>
                                 
                                        
                                 <?php
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

                                        $sql = "SELECT login.naam, login.onderwerp, login.omschrijving
                                                    FROM login
                                                    INNER JOIN slot
                                                    ON login.1e_slot=slot.id where 1e_slot = 25 AND tag = 3";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td> 
                             <td>
                                 
                                        
                                   <?php
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

                                        $sql = "SELECT login.naam, login.onderwerp, login.omschrijving
                                                    FROM login
                                                    INNER JOIN slot
                                                    ON login.1e_slot=slot.id where 1e_slot = 34 AND tag = 3";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td> 
                             <td>
                                
                                        
                                   <?php
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

                                        $sql = "SELECT login.naam, login.onderwerp, login.omschrijving
                                                    FROM login
                                                    INNER JOIN slot
                                                    ON login.1e_slot=slot.id where 1e_slot = 43 AND tag = 3";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td> 
                             <td>
                                 
                                        
                                   <?php
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

                                        $sql = "SELECT login.naam, login.onderwerp, login.omschrijving
                                                    FROM login
                                                    INNER JOIN slot
                                                    ON login.1e_slot=slot.id where 1e_slot = 52 AND tag = 3";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td> 
                    </tr>
                        <tr>
                        <td>
                            16:45 - 17:45
                        </td>
                            <td>            
                               
                                      
                                  <?php
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

                                        $sql = "SELECT login.naam, login.onderwerp, login.omschrijving
                                                    FROM login
                                                    INNER JOIN slot
                                                    ON login.1e_slot=slot.id where 1e_slot = 26 AND tag = 3";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                
                                        
                                  <?php
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

                                        $sql = "SELECT login.naam, login.onderwerp, login.omschrijving
                                                    FROM login
                                                    INNER JOIN slot
                                                    ON login.1e_slot=slot.id where 1e_slot = 35 AND tag = 3";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                
                                        
                                   <?php
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

                                        $sql = "SELECT login.naam, login.onderwerp, login.omschrijving
                                                    FROM login
                                                    INNER JOIN slot
                                                    ON login.1e_slot=slot.id where 1e_slot = 44 AND tag = 3";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                
                                        
                                   <?php
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

                                        $sql = "SELECT login.naam, login.onderwerp, login.omschrijving
                                                    FROM login
                                                    INNER JOIN slot
                                                    ON login.1e_slot=slot.id where 1e_slot = 53 AND tag = 3";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                    </tr>
                        <tr>
                        <td>
                           18:45 - 19:45
                        </td>
                            <td>            
                                
                                        
                                  <?php
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

                                        $sql = "SELECT login.naam, login.onderwerp, login.omschrijving
                                                    FROM login
                                                    INNER JOIN slot
                                                    ON login.1e_slot=slot.id where 1e_slot = 27 AND tag = 3";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                
                                        
                                   <?php
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

                                        $sql = "SELECT login.naam, login.onderwerp, login.omschrijving
                                                    FROM login
                                                    INNER JOIN slot
                                                    ON login.1e_slot=slot.id where 1e_slot = 36 AND tag = 3";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                
                                        
                                  <?php
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

                                        $sql = "SELECT login.naam, login.onderwerp, login.omschrijving
                                                    FROM login
                                                    INNER JOIN slot
                                                    ON login.1e_slot=slot.id where 1e_slot = 45 AND tag = 3";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                 
                                        
                                   <?php
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

                                        $sql = "SELECT login.naam, login.onderwerp, login.omschrijving
                                                    FROM login
                                                    INNER JOIN slot
                                                    ON login.1e_slot=slot.id where 1e_slot = 54 AND tag = 3";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                    </tr>
                        <tr>
                        <td>
                            20:00 - 21:00
                        </td>
                            <td>            
                                
                                        
                                  <?php
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

                                        $sql = "SELECT login.naam, login.onderwerp, login.omschrijving
                                                    FROM login
                                                    INNER JOIN slot
                                                    ON login.1e_slot=slot.id where 1e_slot = 28 AND tag = 3";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                 
                                        
                                  <?php
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

                                        $sql = "SELECT login.naam, login.onderwerp, login.omschrijving
                                                    FROM login
                                                    INNER JOIN slot
                                                    ON login.1e_slot=slot.id where 1e_slot = 37 AND tag = 3";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                 
                                        
                                   <?php
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

                                        $sql = "SELECT login.naam, login.onderwerp, login.omschrijving
                                                    FROM login
                                                    INNER JOIN slot
                                                    ON login.1e_slot=slot.id where 1e_slot = 46 AND tag = 3";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                 
                                        
                                   <?php
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

                                        $sql = "SELECT login.naam, login.onderwerp, login.omschrijving
                                                    FROM login
                                                    INNER JOIN slot
                                                    ON login.1e_slot=slot.id where 1e_slot = 55 AND tag = 3";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                    </tr>
                        <tr>
                        <td>
                           21:30 - 22:30
                        </td>
                            <td>            
                                
                                        
                                  <?php
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

                                        $sql = "SELECT login.naam, login.onderwerp, login.omschrijving
                                                    FROM login
                                                    INNER JOIN slot
                                                    ON login.1e_slot=slot.id where 1e_slot = 29 AND tag = 3";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                 
                                        
                                   <?php
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

                                        $sql = "SELECT login.naam, login.onderwerp, login.omschrijving
                                                    FROM login
                                                    INNER JOIN slot
                                                    ON login.1e_slot=slot.id where 1e_slot = 38 AND tag = 3";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                 
                                        
                                   <?php
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

                                        $sql = "SELECT login.naam, login.onderwerp, login.omschrijving
                                                    FROM login
                                                    INNER JOIN slot
                                                    ON login.1e_slot=slot.id where 1e_slot = 47 AND tag = 3";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                 
                                        
                                   <?php
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

                                        $sql = "SELECT login.naam, login.onderwerp, login.omschrijving
                                                    FROM login
                                                    INNER JOIN slot
                                                    ON login.1e_slot=slot.id where 1e_slot = 56 AND tag = 3";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                    </tr>
             </table>
                            <table>
                         <tr>
                        <td>
                            Zondag
                        </td>        
                            <td>
                                Zaal 1
                            </td>
                            <td>
                                Zaal 2
                            </td>
                            <td>
                                Zaal 3
                            </td>
                            <td>
                                Zaal 4
                            </td>
                    </tr>
                    <tr>  
                        <td>
                            12:15 - 13:15
                        </td>
                            <td>
                                 
                                        
                                  <?php
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

                                        $sql = "SELECT login.naam, login.onderwerp, login.omschrijving
                                                    FROM login
                                                    INNER JOIN slot
                                                    ON login.1e_slot=slot.id where 1e_slot = 57 AND tag = 3";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                 
                                        
                                   <?php
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

                                        $sql = "SELECT login.naam, login.onderwerp, login.omschrijving
                                                    FROM login
                                                    INNER JOIN slot
                                                    ON login.1e_slot=slot.id where 1e_slot = 61 AND tag = 3";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td> 
                                 
                                        
                                   <?php
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

                                        $sql = "SELECT login.naam, login.onderwerp, login.omschrijving
                                                    FROM login
                                                    INNER JOIN slot
                                                    ON login.1e_slot=slot.id where 1e_slot = 65 AND tag = 3";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td> 
                                 
                                        
                                    <?php
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

                                        $sql = "SELECT login.naam, login.onderwerp, login.omschrijving
                                                    FROM login
                                                    INNER JOIN slot
                                                    ON login.1e_slot=slot.id where 1e_slot = 69 AND tag = 3";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td> 
                    </tr>
                    <tr>  
                        <td>
                            13:30 - 14:30
                        </td>
                            <td>
                                 
                                        
                                   <?php
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

                                        $sql = "SELECT login.naam, login.onderwerp, login.omschrijving
                                                    FROM login
                                                    INNER JOIN slot
                                                    ON login.1e_slot=slot.id where 1e_slot = 58 AND tag = 3";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td> 
                                 
                                        
                                    <?php
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

                                        $sql = "SELECT login.naam, login.onderwerp, login.omschrijving
                                                    FROM login
                                                    INNER JOIN slot
                                                    ON login.1e_slot=slot.id where 1e_slot = 62 AND tag = 3";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                 
                                        
                                    <?php
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

                                        $sql = "SELECT login.naam, login.onderwerp, login.omschrijving
                                                    FROM login
                                                    INNER JOIN slot
                                                    ON login.1e_slot=slot.id where 1e_slot = 66 AND tag = 3";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                 
                                        
                                    <?php
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

                                        $sql = "SELECT login.naam, login.onderwerp, login.omschrijving
                                                    FROM login
                                                    INNER JOIN slot
                                                    ON login.1e_slot=slot.id where 1e_slot = 70 AND tag = 3";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                    </tr>
                    <tr>  
                        <td>
                            15:00 - 16:00
                        </td>
                            <td>
                                 
                                        
                                   <?php
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

                                        $sql = "SELECT login.naam, login.onderwerp, login.omschrijving
                                                    FROM login
                                                    INNER JOIN slot
                                                    ON login.1e_slot=slot.id where 1e_slot = 59 AND tag = 3";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                 
                                        
                                    <?php
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

                                        $sql = "SELECT login.naam, login.onderwerp, login.omschrijving
                                                    FROM login
                                                    INNER JOIN slot
                                                    ON login.1e_slot=slot.id where 1e_slot = 63 AND tag = 3";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                 
                                        
                                    <?php
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

                                        $sql = "SELECT login.naam, login.onderwerp, login.omschrijving
                                                    FROM login
                                                    INNER JOIN slot
                                                    ON login.1e_slot=slot.id where 1e_slot = 67 AND tag = 3";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                 
                                        
                                    <?php
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

                                        $sql = "SELECT login.naam, login.onderwerp, login.omschrijving
                                                    FROM login
                                                    INNER JOIN slot
                                                    ON login.1e_slot=slot.id where 1e_slot = 71 AND tag = 3";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                    </tr>
                    <tr>
                        <td>
                           16:15- 17:15
                        </td>
                            <td>            
                                
                                        
                                   <?php
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

                                        $sql = "SELECT login.naam, login.onderwerp, login.omschrijving
                                                    FROM login
                                                    INNER JOIN slot
                                                    ON login.1e_slot=slot.id where 1e_slot = 60 AND tag = 3";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                 
                                        
                                    <?php
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

                                        $sql = "SELECT login.naam, login.onderwerp, login.omschrijving
                                                    FROM login
                                                    INNER JOIN slot
                                                    ON login.1e_slot=slot.id where 1e_slot = 64 AND tag = 3";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                 
                                        
                                    <?php
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

                                        $sql = "SELECT login.naam, login.onderwerp, login.omschrijving
                                                    FROM login
                                                    INNER JOIN slot
                                                    ON login.1e_slot=slot.id where 1e_slot = 68 AND tag = 3";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                             <td>
                                 
                                        
                                    <?php
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

                                        $sql = "SELECT login.naam, login.onderwerp, login.omschrijving
                                                    FROM login
                                                    INNER JOIN slot
                                                    ON login.1e_slot=slot.id where 1e_slot = 72 AND tag = 3";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while($row = $result->fetch_assoc()) {
                                               echo "Naam Spreker: " . $row["naam"]. "<br>  Onderwerp: " . $row["onderwerp"]. "<br> " . $row["omschrijving"]. "<br>";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        $conn->close();
                                        ?>
                            </td>
                    </tr>
                    </form>
                    </table>
        
       </div>
          
    <?php  
      }

     function agenda_form_register_shortcode()
    {
        add_shortcode('agenda-form','agenda_plugin_shortcode');
    }

    add_action('init', 'agenda_form_register_shortcode');
     
     ?>