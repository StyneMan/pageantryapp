<?php
define('USER', 'webify');
define('PASSWORD', 'Webify2020!!');
define('HOST', 'localhost');
define('DATABASE', 'pageantry_app');
 
try {
    $connection = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);
    //echo "Connected successfully";
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}
?>