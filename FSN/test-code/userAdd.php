<?php
session_start();

  if(!isset( $_POST['Username'], $_POST['Password'], $_POST['Team']))
  {

      $message = 'Please enter your details';

    }

  elseif (strlen($_POST['Username']) > 30 || strlen($_POST['Username']) < 1)
  {

    $message = 'Username is too long';
  }

  elseif (strlen($_POST['Password']) > 40 || strlen($_POST['Password']) < 8)
  {
      $message = 'Password is too Long or Short';
  }

  else
  {
    /*Cleans any inputs - guards agains attacks via SQL Injection */
    $Username = filter_var($_POST['Username'], FILTER_SANITIZE_STRING);
    $Password = filter_var($_POST['Password'], FILTER_SANITIZE_STRING);
    $Team = filter_var($_POST['Team'], FILTER_SANITIZE_STRING);


    $myIP = "104.155.46.200";
    $dsn = "mysql:$myIP;charset=UTF-8";
    $user = "root";
    $password = "root";
    $database =  "Web";
    $_DB = new PDO($dsn,$user,$password);

    $stmt = $_DB->prepare('Use Web; INSERT INTO User(Username, Password, Team) VALUES(:Username, :Password, :Team)');

    $stmt->bindParam(':Username', $Username);
    $stmt->bindParam(':Password', $Password);
    $stmt->bindParam(':Team', $Team);

    $stmt->execute();

    $message = 'New User Added';


  }

 ?>

<html>

  <head>

    <title> Add User Test</title>

  </head>

    <body>
      <p><?php echo $message; ?>

    </body>
</html>
