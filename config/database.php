<?php
define("DB_HOST","localhost");
define("DB_USER","Abhishek");
define("DB_PASSWORD","123456");
define("DB_NAME","personal");


$mysqli= new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

if($mysqli -> connect_error){
    echo "Failed to connect to database";
    exit();
}




?>