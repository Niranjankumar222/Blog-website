<?php
$id=$_GET['id'];
if($id){
include("../connect.php");
$sqlDelete="DELETE FROM posts WHERE id=$id";
if(mysqli_query($conn,$sqlDelete)){
    session_start();
    $_SESSION["delete"]="Post delete successfully";
    header("location:index.php");
}else{
    die("Something is not write. Data is not delete");
}
}else{
    echo "Post not found";
}
?>