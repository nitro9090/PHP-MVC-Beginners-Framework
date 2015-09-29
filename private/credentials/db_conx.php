<?php

// the credentials for connecting to a MySQL database
$servername = "localhost";  //the web address of the database
$username = "test";  // the username to be used to access the database
$password = "blah"; // the corresponding password for said user
$database = "my_database"; // the name of the database you want access to

// the database connection object, look up mysqli to understand how to use it.  just
$db_conx = new mysqli($servername,$username,$password, $database);

//evaluate the connection (aka is there an error)
if ($db_conx->connect_error) {
  die("Connection failed: " . $db_conx->connect_error);
}