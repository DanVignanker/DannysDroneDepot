<?php 

$mysqli = new mysqli("localhost", "daniel", "dbDanielVignanker", "drones_site");

//checked connection to MySQL DB
if ($mysqli->connect_errno) {
    echo "failed to connect of MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$username = $_POST['username_signup'];
$fname = $_POST['first_name_signup']; 
$lname = $_POST['last_name_signup'];
$password = $_POST['password_signup'];

//Checking if inputs are empty
$allFieldsEntered = true;
if (strlen($fname) == 0) {
    echo ("Your FIRST NAME entry is empty. Please fill in! \n");
    $allFieldsEntered = false;
}
if (strlen($lname) == 0) {
    echo ("Your LAST NAME entry is empty. Please fill in! \n");
    $allFieldsEntered = false;
}
if (strlen($username) == 0) {
    echo ("Your USERNAME entry is empty. Please fill in! \n");
    $allFieldsEntered = false;
}    
if (strlen($password) == 0) {
    echo ("Your PASSWORD entry is empty. Please fill in! \n");
    $allFieldsEntered = false;
}

//MySQL Query to check if username is already in DB
$check_username = "SELECT * FROM userInformation WHERE username = '$username'";
//gets row username is in
$result_username = $mysqli->query($check_username);
//number of rows in query
$rows_username = mysqli_num_rows($result_username);

if ($rows_username == 1) {
    echo "Username Already Taken, Please enter a different Username";
} else {
    if ($allFieldsEntered) {
        $entrySQL = "INSERT INTO userInformation VALUES ('$username', '$password', '$fname','$lname')";
        $result = $mysqli->query($entrySQL);
        echo "Sign Up Successful";
        header('location:loginSignup.html');
        exit();
    }
}

$result->close();
$result_username->close();

?>