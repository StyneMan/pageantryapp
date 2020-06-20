<?php
session_start();

// initializing variables
$email = "";
$password    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'webify', 'Webify2020!!', 'papp');

?>