<?php
$servername = "localhost";
$username = "test";
$password = "blah";
$database = "break_my_game";

$db_conx = new mysqli($servername,$username,$password, $database);

//evaluate the connection (aka is there an error)
if ($db_conx->connect_error) {
  die("Connection failed: " . $db_conx->connect_error);
}
?>