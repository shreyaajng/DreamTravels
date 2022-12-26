<?php

$con = mysqli_connect('localhost','root');

if($con){
    echo "Connection successful";
}else{
    echo "No Connection";
}

mysqli_select_db($con, 'userdata');

$username = $_POST['username'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comments = $_POST['comments'];

$query = " insert into userinfodata (username, email, mobile, comments)
values ('$username', '$email', '$mobile', '$comments')";

mysqli_query($con, $query);

header('location:index.php');
