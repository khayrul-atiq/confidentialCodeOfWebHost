<?php  
/*
	define('DB_SERVER', 'localhost');
   	define('DB_USERNAME', 'id5175043_root');
   	define('DB_PASSWORD', '123456');
   	define('DB_DATABASE', 'id5175043_testdb');
   	$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
*/




$db  = mysqli_connect("localhost", "id5175043_root", "123456", "");
if($db) {
    echo "connected";
}

?>
