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
      $_DB->query("CREATE DATABASE Web"); //if database doesnt exist, create it, use it and create necessary tables too.
      $_DB->exec("USE ".$database);
      $_DB->query("CREATE TABLE User(id int PRIMARY KEY AUTO_INCREMENT, Name Varchar(40), Email Varchar(50), Username Varchar(30), Password Varchar(40), Team Varchar(30))");
      //$_DB->query("CREATE TABLE Teams(id int PRIMARY KEY, Team_Name Varchar(50), Stadium_Name Varchar(50), Stadium_Capacity  City Varchar(30), Manager_Name Varchar(30), Squad_id FOREIGN KEY)")

      echo "Database Created";
    }

//prepare statement used for login
    $stmt = $_DB->prepare('SELECT id, Name, Email, Username, Password, Team FROM User WHERE Username = :Username AND Password = :Password');

    $stmt->bindParam(':Username', $Username);
    $stmt->bindParam(':Password', $Password);


?>
