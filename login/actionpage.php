<?php 
session_start();
$title=$_POST['title'];
$text=$_POST['text'];
$author=$_POST['author'];
 
$conn = mysqli_connect("localhost","root","","uploadstatus");
$sql ="INSERT INTO records(title,description,author) VALUES ('$title','$text','$author') ";

$result =mysqli_query($conn,$sql);

if($result){
    $_SESSION['success']=" Post created succesfully !!";
    header('Location:home.php');
    
}
else{
    $_SESSION['error']="sorry!!  post could't be created !!";
    header('Location:home.php');   
}
?>