<?php 
$link=$_POST['link'];
$user_id=$_POST['user_id'];
$service_id=$_POST['service_id'];

$db = mysqli_connect('localhost', 'root', '', 'recommendation');
mysqli_query($db,"SET NAMES 'utf8'");
$query = "INSERT INTO tracking (user_id,service_id) 
  			  VALUES('$user_id','$service_id')";
      mysqli_query($db, $query);

      
header("Location:$link");
