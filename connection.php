<?php
//for connection
$conn =new mysqli ("localhost", "root","","AIRCLARE");
if($conn->connect_error){
    die ("Oops! Database connection Failed, Try again later!" .$conn->connect_error);
}
?>