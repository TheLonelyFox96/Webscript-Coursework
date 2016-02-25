<?php
$myIP = "104.155.116.110";
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

        $stmt = $_DB->prepare("SELECT * FROM User");
        $stmt->execute();
        $results = $stmt->fetchAll();

        foreach($results as $row) {
          echo "ID: " . $row[0] . "<br>";
          echo "Username: " . $row[1] . "<br>";
          echo "Password: " . $row[2] . "<br>";
          echo "Team: " . $row[3] . "<br><br>";
        }
      }
  else
      {
        $_DB->query("CREATE DATABASE Web");
        $_DB->exec("USE ".$database);
        $_DB->query("CREATE TABLE User(id int PRIMARY KEY AUTO_INCREMENT, Username Varchar(30), Password Varchar(40), Team Varchar(30))");
        $_DB->query("insert into User(Username, Password, Team) Values ('Jake', 'Web19foxxy', 'Arsenal')");
        $_DB->query("insert into User(Username, Password, Team) Values ('Dpayet', 'Worldie96whufc', 'West Ham United')");

        echo "Database Created";
      }

 ?>
