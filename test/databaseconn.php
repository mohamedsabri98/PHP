<?php
    class dbconn{

        public function connect(){

            try{
                // Database credentials
                $db_host = "localhost";
                $db_username = "root";
                $db_password = "";
                $db_name = "phplogin";

                // Connect to database
                $conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);

                // Check connection
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }
                return $conn;
               
            }
            catch(PDOException $e){
                echo "ERROR". $e->getMessage()."</br>";

            }
        }
        public function mysql(){
            
        }

    }

?>
