<?php
if(isset($_POST["create"])){
    include("../connect.php");
    $title=mysqli_real_escape_string($conn,$_POST["title"]);  //mysqli_real_escape_string(ye function hai)
    $summary=mysqli_real_escape_string($conn, $_POST["summary"]);
    $content=mysqli_real_escape_string($conn,$_POST["content"]);
    $date=mysqli_real_escape_string($conn,$_POST["date"]);

    $sqlInsert= "INSERT INTO posts( date, title, summary, content) VALUES   ( '$date', '$title', ' $summary', '  $content') ";
if(mysqli_query($conn, $sqlInsert)){
    session_start();
    $_SESSION["create"]="Post added successfully";
    header("Location:index.php");

}else{
    die("Data is not Inserted");
}
    // echo $title;
    // echo $summary;
    // echo $content;
    // echo $date;
}
?>
<?php
if(isset($_POST["update"])){
    include("../connect.php");
    $title=mysqli_real_escape_string($conn,$_POST["title"]);  //mysqli_real_escape_string(ye function hai)
    $summary=mysqli_real_escape_string($conn, $_POST["summary"]);
    $content=mysqli_real_escape_string($conn,$_POST["content"]);
    $date=mysqli_real_escape_string($conn,$_POST["date"]);
    $id=mysqli_real_escape_string($conn,$_POST["id"]);

    $sqlUpdate= "UPDATE  posts SET title='$title', summary='$summary', content='$content', date='$date' WHERE id=$id";
if(mysqli_query($conn, $sqlUpdate)){
    session_start();
    $_SESSION["update"]="Post update successfully";
    header("location:index.php");

}else{
    die("Data is not Update");
}
    
}
?>

