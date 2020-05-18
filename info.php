<?php

$con = mysqli_connect('localhost','root');
 if($con){
     echo "Connection successfull";
 }else{
     echo "No Connection";

 }
mysqli_select_db($con, 'projectwebsite');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];

$query = " INSERT INTO userdata (user, email, mobile)
values ('$user', '$email', '$mobile') ";

echo "$query";

mysqli_query($con, $query)

?>
