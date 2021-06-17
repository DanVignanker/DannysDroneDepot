<?php 

session_start();

$mysqli = new mysqli("localhost", "daniel", "dbDanielVignanker", "drones_site");

//checked connection to MySQL DB
if ($mysqli->connect_errno) {
    echo "failed to connect of MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$username = $_POST['username_login'];
$password = $_POST['password_login'];

$allFieldsEntered = true;
if (strlen($username) == 0) {
    echo ("Your USERNAME entry is empty. Please fill in! \n");
    $allFieldsEntered = false;
}    
if (strlen($password) == 0) {
    echo ("Your PASSWORD entry is empty. Please fill in! \n");
    $allFieldsEntered = false;
}

if ($allFieldsEntered) {
    $sql = "SELECT * FROM userInformation WHERE username = '$username' AND  password = '$password'";

    $result = $mysqli->query($sql);

    $rowsResult = mysqli_num_rows($result);

    if ($rowsResult == 1) { 
        $_SESSION['username'] = $username;
        header('location: mainPage.php');
        exit();
    } else {
        header('location: loginSignup.html');
        exit();
    }

    $result->close();
}

?>