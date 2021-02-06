<?php

$con = mysqli_connect('localhost','root');

if($con){
    echo "Connection Successful";
}else{
    echo "Connection Not Successful";
}  

mysqli_select_db($con, 'procricketuserdata');

$User = $_POST['User'];
$Email = $_POST['Email'];
$Mobile = $_POST['Mobile'];
$Comments = $_POST['Comments'];

$query = " insert into userinfodata (User, Email, Mobile, Comments)
values ('$User','$Email', '$Mobile', '$Comments') ";

mysqli_query($con,$query);
header('location:index.php');
?>