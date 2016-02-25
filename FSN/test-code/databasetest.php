<?php
$myIP = "104.155.68.199";
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

        $stmt = $_DB->prepare("SELECT * FROM Login");
        $stmt->execute();
        $results = $stmt->fetchAll();

        foreach($results as $row) {
          echo "Username: " . $row[0] . "<br>";
          echo "Password: " . $row[1] . "<br><br>";
        }
      }
  else
      {
        $_DB->query("CREATE DATABASE Web");
        $_DB->exec("USE ".$database);
        $_DB->query("CREATE TABLE Login(Username Varchar(30) PRIMARY KEY, Password Varchar(40))");
        $_DB->query("insert into Login (Username, Password) Values ('Jake', 'Web19foxxy')");
        $_DB->query("insert into Login (Username, Password) Values ('Dpayet', 'Worldie96whufc')");

        echo "Database Created";
      }

 ?>
