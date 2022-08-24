<?php
//MySQL Class Parameters | Variables should be conventionally defined in ./strings.php so it can be conveniently used through out the web app and not only including it in this file.
$servername = "localhost"; //Development Server
$username = "username";
$password = "password";
$dbname = "DB";
$port = 3306; //default MySQL Port

// Create database connection --> dbc or just db
$db = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($db->connect_error) {
  die("<b>Connection failed: </b>" . $db->connect_error);
}





?>
