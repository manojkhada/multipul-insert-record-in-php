<?php
$servername="localhost";
$username="root";
$password="";

try{
    $conn=new pdo("mysql:host=$servername;dbname=new",$username,$password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->beginTransaction();
    $conn->exec("INSERT INTO newtable( name,age )VALUES('manoj',21)");
    $conn->exec("INSERT INTO newtable( name,age )VALUES('mnoj',22)");
    $conn->exec("INSERT INTO newtable( name,age )VALUES('manj',23)");
    $conn->commit();
    echo"done new records are sessces";
}
catch(PDOException $e){
    echo"sorry somthing went be worng" .$e->getmessage();
}
?>