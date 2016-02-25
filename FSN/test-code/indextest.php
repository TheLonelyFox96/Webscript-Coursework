<?php
session_start();
if (!isset($_SESSION['auth']) || $_SESSION['auth'] != 1) {
   header('Location: login.php');
   exit();
};

require("databasetest.php");

?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="reset.css">
    <link rel="stylesheet" type="text/css" href="wireframe.css">
    <meta charset="utf-8">
    <link rel='icon' href='favicon.ico'>
    <script src="lib/script.js"></script>
    <title>FSN</title>
  </head>
  <body>

    <nav>
      <h3> FSN </h3>
      <a href="index.php" class="button">Home/Login</a>
      <a href="livescores.php" class="button"> Live Scores/Chat </a>
      <a href="table.php" class="button"> Table </a>
      <a href="predictions.html" class="button"> Score Predictions </a>

    </nav>

    <div id="content">
      <h1> HOME</h1>
    </div>

    <div id="pageborder">
      <h2> Welcome to Live4Scores, the social side of Football. </h2>


        <h4> myFunction();</h4>

        <div id=form>
        <form action="logout.php" method="post">
            <input type="submit" name="submit" value="Log Out">
        </form>
      </div>


        </div>
    </div>
        <footer id="footerdesign">
          <p>Owner: UP737725</p>
          <p>WebScript Programming Coursework 2015-16</p>
        </footer>
  </body>
</html>
