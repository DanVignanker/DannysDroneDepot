<?php 

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

    $userIsValid = false;

    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = $result->fetch_row()) {
            $userIsValid = true;
            echo "Valid User logged in!";
        }
    }

    if (!$userIsValid) {
        echo "The Username or Passcode you entered is incorrect. Please try again.";
    }
    $result->close();
}

?>