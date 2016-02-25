<?php

session_start();



  if(!isset( $_POST['Username'], $_POST['Password']))
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



    $myIP = "104.155.46.200";
    $dsn = "mysql:$myIP;charset=UTF-8";
    $db_user = "root";
    $db_password = "root";
    $database =  "Web";
    $_DB = new PDO($dsn,$db_user,$db_password);

    /* Use the Database */

    $stmt = $_DB->prepare("USE Web");
    $stmt->execute();

    /* Run SQL to match user entry to username & password in the Database */
    $stmt = $_DB->prepare('SELECT id, Username, Password, Team FROM User WHERE Username = :Username AND Password = :Password');

    $stmt->bindParam(':Username', $Username);
    $stmt->bindParam(':Password', $Password);

    $stmt->execute();

    $user_id = $stmt->fetchColumn();
    //$user_id = $stmt->rowCount();

    //$row=count($user_id);

    echo "$user_id";

if(empty($user_id))
    {
      $message = 'Error! Please Enter a valid Username and Password';


    }

    else {
      $_SESSION['Username'] = $user_id;

      $message = 'Successfully Logged In';

    }

  }

  ?>

  <html>

  <head>
    <title> Login </title>

  </head>

      <body>
        <h1> Login Test </h1>

        <form action="loginphpTest.php" method="post">

          Username:<input type="text" name="Username" value="" maxlength="30"/>
          Password:<input type="text" name="Password" value="" maxlength="40" />
          <!-- Favourite Team:<input type="text" name="Team" value="" maxlength="30" /> -->

          <input type="submit" value="Login" />
        <p><?php echo $message; ?>

      </body>

  </html>
