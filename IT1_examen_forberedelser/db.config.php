<?php
/*Database credentials and initializing*/
echo "HELLO";
define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'crud');


/*Attempt mySQL databse connection*/
$conn = mysql_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

//Check connction
if (mysqli_connect_error()) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "";