<?php
session_start();

// Connect to Database
$servername = "localhost";
$username = "webify";
$dbpassword = "";
$dbname = "pageantry_app";

$conn = new mysqli($servername, $username, '', $dbname);

//.....

//NEW REGISTRATION
if (isset($_POST['register'])) {
 
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $ighandle = $_POST['ighandle'];
    $haddress = $_POST['haddress'];
    $dob = $_POST['dob'];
    $sorigin = $_POST['sorigin'];
    $acity = $_POST['acity'];
    $regpic = $_POST['regpic'];
    $pnumber = $_POST['pnumber'];
    $errors = array(); 
 

    

    // REGISTER USER
    function register(){

	// receive all input values from the form. Call the e() function
    // defined below to escape form values
    $fname = e($_POST['fname']);
    $lname = e($_POST['lname']);
    $email = e($_POST['email']);
    $password_1 = e($_POST['password_1']);
    $password_2 = e($_POST['password_2']);
    $ighandle = e($_POST['ighandle']);
    $haddress = e($_POST['haddress']);
    $dob = e($_POST['dob']);
    $sorigin = e($_POST['sorigin']);
    $acity = e($_POST['acity']);
    $regpic = e($_POST['regpic']);
    $pnumber = e($_POST['pnumber']);

	// form validation: ensure that the form is correctly filled
	if (empty($fname)) { 
		array_push($errors, "Like seriously! you don't have a name?"); 
    }
    if (empty($lname)) { 
		array_push($errors, "Please what's your fathers name?"); 
    }
    if (empty($email)) { 
		array_push($errors, "You have an email don't you?"); 
    }
    if (empty($password_1)) { 
		array_push($errors, "Password is required"); 
	}
	if ($password_1 != $password_2) {
		array_push($errors, "The passwords do not match");
	}
    if (empty($ighandle)) { 
		array_push($errors, "Don't tell me you're anti-social"); 
    }
    if (empty($haddress)) { 
		array_push($errors, "Are you from MARS?"); 
    }
    if (empty($dob)) { 
		array_push($errors, "You look sweet.. How old are you?"); 
    }
    if (empty($sorigin)) { 
		array_push($errors, "What's your state of origin?"); 
	}
	if (empty($acity)) { 
		array_push($errors, "Which city do you preffer for your audition?"); 
    }
    if (empty($regpic)) {
        array_push($errors, "Upload a picture of you.");
    }
    if (empty($pnumber)) {
        array_push($errors, "Give us your phone number please.");
    }

        if ($user) { // if user exists
            if ($user['email'] === $email) {
              array_push($errors, "Email already exists");
            }
    
        // Finally, register user if there are no errors in the form
        if (count($errors) == 0) {
            $Password = md5($password_1);//encrypt the password before saving in the database

            $query = "INSERT INTO users (`FirstName`, `LastName`, `PhoneNumber`, `InstagramHandle`, `Address`, `DateOfBirth`, `StateOfOrigin`, `AuditionCity`, `Image`, `Password`, `EmailAddress`) 
                    VALUES('$fname', '$lname', '$pnumber', '$ighandle', '$haddress', '$dob', '$sorigin', '$acity', '$regpic', '$password_1', '$password_2', '$email')";
            new mysqli_query($conn, $query);
            $_SESSION['success'] = "Registration Successful";
            header('location: login');
        }
    }
}

}
 
?>