<?php
 session_start();
require("PHP/dbConnect.php");

if(!isset($_SESSION['user_id']))
{

  header('Location: index.html');

}
else {


  /* Use the Database */

  $stmt = $_DB->prepare("USE Web");
  $stmt->execute();

  /* Run SQL to match user entry to username & password in the Database */
  $stmt = $_DB->prepare('SELECT Username FROM User WHERE id = :User_id');

  $stmt->bindParam(':User_id', $SESSION['user_id']);


  $stmt->execute();

  $user_name = $stmt->fetchColumn();

  if(empty($user_name)){
    $message = 'Error';
  }
  else {
    $message = 'Welcome '.$user_name;
  }
 }

 ?>



<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="reset.css">
    <link rel="stylesheet" type="text/css" href="wireframe.css">
    <link rel="stylesheet" type="text/css" href="flex.css">
    <link href='https://fonts.googleapis.com/css?family=Monda:400,700' rel='stylesheet' type='text/css'>
    <meta charset="utf-8">
    <link rel='icon' href='favicon.ico'>
    <script src="lib/script.js"></script>
    <title>FSN</title>
  </head>
  <body>

    <header>
    <nav>

            <h3> FSN </h3>
        <div id="navigation">
            <a href="Home.php" class="button">Home/Login</a>
            <a href="livescores.php" class="button"> Live Scores/Chat </a>
            <a href="table.php" class="button"> Table </a>
            <a href="predictions.php" class="button"> Score Predictions </a>
            <a href=# class="button"> News </a>
            <a href=# class="button"> My Account </a>
        </div>
            <div class="dropMenu">
              <button class="dropdwnButton"> Menu </button>
              <div class="menu-dropdown">
                <ul>
                  <li><a href="Home.php" class="menu">Home/Login</a></li>
                  <li><a href="livescores.php" class="menu"> Live Scores/Chat </a></li>
                  <li><a href="table.php" class="menu"> Table </a></li>
                  <li><a href="predictions.php" class="menu"> Score Predictions </a></li>
                  <li><a href=# class="menu"> News </a></li>
                  <li><a href=# class="menu"> My Account </a></li>
                </ul>
              </div>
            </div>

    </nav>
  </header>

    <div id="content">
      <h1> HOME</h1>
    </div>

    <div id="pageborder">

      <h2> Welcome to Live4Scores, the social side of Football. </h2>

      <h4> Welcome Back <?php echo $message; ?></h4>

      <div id="homepic"></div>



      <div id=form>

        <form action="logout.php" method="post">
            <input type="submit" name="submit" value="Log Out">
        </form>
      </div>


    </div>

      <footer id="footerdesign">
        <p>Owner: UP737725</p>
        <p>WebScript Programming Coursework 2015-16</p>
      </footer>
  </body>
</html>
