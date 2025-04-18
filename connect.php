<?php
$dbhost= "localhost";
$dbUser="root";
$dbPass="";
$dbName="cms";
$conn=mysqli_connect($dbhost,$dbUser,$dbPass, $dbName );
if(!$conn){
    die("Something went wrong");
}
?>