<?php 
session_start();
session_destroy();

header('location:loginSignup.html');
exit();

?>