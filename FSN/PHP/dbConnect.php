<?php

$myIP = "104.155.110.155";
$dsn = "mysql:$myIP;charset=UTF-8";
$user = "root";
$password = "root";
$database =  "Web";
$_DB = new PDO($dsn,$user,$password);


$showquery = "show databases like 'Web'";
$showresult = $_DB->prepare($showquery);
$showresult->execute();

if ($showresult->fetch()) //if db exists use it
    {
      $stmt = $_DB->prepare("USE Web");
      $stmt->execute();

      echo "Database Connected";

    }
else
    {
      $_DB->query("CREATE DATABASE Web");
      $_DB->exec("USE ".$database);
      $_DB->query("CREATE TABLE User(id int PRIMARY KEY AUTO_INCREMENT, Name Varchar(40), Email Varchar(50), Username Varchar(30), Password Varchar(40), Team Varchar(30))");


      echo "Database Created";
    }

    $stmt = $_DB->prepare('SELECT id, Name, Email, Username, Password, Team FROM User WHERE Username = :Username AND Password = :Password');

    $stmt->bindParam(':Username', $Username);
    $stmt->bindParam(':Password', $Password);


?>
