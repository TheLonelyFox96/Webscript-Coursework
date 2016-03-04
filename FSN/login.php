<?php

session_start();
 require("PHP/dbConnect.php");



  if(!isset( $_POST['Username'], $_POST['Password']))
  {

      $message = 'Please enter your details';

    }

  elseif (strlen($_POST['Username']) > 30 || strlen($_POST['Username']) <=4)
  {

    $message = 'Incorrect Username';
  }

  elseif (strlen($_POST['Password']) > 40 || strlen($_POST['Password']) < 8)
  {
      $message = 'Incorrect Password';
  }

  else
  {
    /*Cleans any inputs - guards agains attacks via SQL Injection */
    $Username = filter_var($_POST['Username'], FILTER_SANITIZE_STRING);
    $Password = filter_var($_POST['Password'], FILTER_SANITIZE_STRING);



    /* Use the Database */

    // $stmt = $_DB->prepare("USE Web");
    // $stmt->execute();

    /* Run SQL to match user entry to username & password in the Database */
    // $stmt = $_DB->prepare('SELECT id, Username, Password, Team FROM User WHERE Username = :Username AND Password = :Password');
    //
    // $stmt->bindParam(':Username', $Username);
    // $stmt->bindParam(':Password', $Password);

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
      $_SESSION['user_id'] = $user_id;
      header('Location: home.php');

      $message = 'Successfully Logged In';

    }

  }
?>

<html>
  <head>
    <link rel="stylesheet" type="text/css" href="reset.css">
    <link rel="stylesheet" type="text/css" href="wireframe.css">
    <link rel="stylesheet" type="text/css" href="flex.css">
    <link href='https://fonts.googleapis.com/css?family=Monda:400,700' rel='stylesheet' type='text/css'>
    <meta charset="utf-8">
    <link rel='icon' href='favicon.ico'>

    <title>FSN</title>
  </head>
  <body>


      <div id="heading"> FSN </div>




    <div id="pageborderLogin">
      <h2> Welcome to FSN, the social side of Football. </h2>
      <p> Please Login Below  </p> <br>

      <div id="form">
        <form action="login.php" method="post">

          Username:<input type="text" name="Username" value="" maxlength="30"/>
          Password:<input type="password" name="Password" value="" maxlength="40" /><br>
        <input type="submit" name="submit" value="Log In">

        <p><?php echo $message; ?> </p>

      </form>


        </div>
    </div>
        <footer id="footerdesign">
          <p>Owner: UP737725</p>
          <p>WebScript Programming Coursework 2015-16</p>
        </footer>
  </body>
</html>
