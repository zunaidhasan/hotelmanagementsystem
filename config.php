<?php

$server = "localhost";
$username = "zestyhideaway_user";
$password = "password";
$database = "zestyhideawayhotel";

$conn = mysqli_connect($server,$username,$password,$database);

if(!$conn){
    die("<script>alert('connection Failed.')</script>");
}
// else{
//     echo "<script>alert('connection successfully.')</script>";
// }
?>