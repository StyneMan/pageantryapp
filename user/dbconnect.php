<?php

//NEW REGISTRATION
if (isset($_POST['register'])) {
 
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $acode = $_POST['acode'];
    $password = $_POST['password'];
    $ighandle = $_POST['ighandle'];
    $haddress = $_POST['haddress'];
    $dob = $_POST['dob'];
    $sorigin = $_POST['sorigin'];
    $acity = $_POST['acity'];
    $regpic = $_POST['regpic'];
    $pnumber = $_POST['pnumber'];
 

    // Create connection
    $servername = "localhost";
    $username = "webify";
    $password = "Webify2020!!";
    $dbname = "pageantry_app";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    //User Registration
    $query = "INSERT INTO `users`(`FirstName`, `LastName`, `PhoneNumber`, `InstagramHandle`, `Address`, `DateOfBirth`, `StateOfOrigin`, `AuditionCity`, `Image`, `Password`, `EmailAddress`)
    VALUES ('$fname', '$lname', '$pnumber', '$ighandle', '$haddress', '$dob', '$sorigin', '$acity', '$regpic', '$password', '$email')";

    $result = mysqli_query ($conn, $query);

    // Check connection
    if (!$result) {
        die("Connection failed: " . mysqli_connect_error());
        }

}
 
?>