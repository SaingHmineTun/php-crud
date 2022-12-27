<?php
/* Database credentials. Assuming are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'id20063901_sainghminetun	');
define('DB_PASSWORD', 'NangKhamHom1500!');
define('DB_NAME', 'id20063901_my_db');
  
/* Attempt to connect to MySQL database */
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
  
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}



?>