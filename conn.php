<?php

$dsn = 'mysql:host=localhost;dbname=recommendation';
$user = 'root';
$pass = '';
$option = array(
PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8',
);
try{
    $con = new PDO($dsn,$user,$pass,$option);
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
   $con->query("SET NAMES utf8");
   $con->query("SET CHARACTER SET utf8");
}

catch(PDOException $e){
    echo 'failed' .$e->getMessage();
}
