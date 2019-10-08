<?php
/* Connect to the database */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'id10588493_admin');
define('DB_PASSWORD', '123456');
define('DB_NAME', 'id10588493_gosmart');
 
/* Attempt to connect to MySQL database */
$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>