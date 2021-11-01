<?php
// session started here
session_start();
$con = mysqli_connect("localhost","root","","gip");
if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
}

?>