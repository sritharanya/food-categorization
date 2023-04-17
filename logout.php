<?php
session_start();
if(session_destroy()){
//redirecting to home page
header("Location:login.php");
}
?>
