<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'calendar');

//connecting DB
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//Checking connection
if($conn == false){
die('Error: chalena mauG');
} else {

    echo ".";
}

?>