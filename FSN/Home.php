<?php
 session_start();
require("PHP/dbConnect.php"); require("PHP/fixtures.php");

if(!isset($_SESSION['user_id']))
{

  header('Location: index.html');

}
else {


  /* Use the Database */



  echo $_SESSION['user_id'];
  /* Run SQL to match user entry to username & password in the Database */
  $stmt = $_DB->prepare('SELECT id, Name, Username, Team FROM User WHERE id = :User_id');

  $stmt->bindParam(':User_id', $_SESSION['user_id']);


  $stmt->execute();

  $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);


  $message = $rows[0]["Name"];
  $message2 = $rows [0]["Team"];
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
                <a href="home.php" class="button">Home/Login</a>
                <a href="livescores.php" class="button"> Live Scores/Chat </a>
                <a href="table.php" class="button"> Table </a>
                <a href="predictions.php" class="button"> Score Predictions </a>
                <a href=teamStats.php class="button"> Stats </a>
                <a href=myAccount.php class="button"> My Account </a>
            </div>
                <div class="dropMenu">
                  <button class="dropdwnButton"> Menu </button>
                  <div class="menu-dropdown">
                    <ul>
                      <li><a href="home.php" class="menu">Home/Login</a></li>
                      <li><a href="livescores.php" class="menu"> Live Scores/Chat </a></li>
                      <li><a href="table.php" class="menu"> Table </a></li>
                      <li><a href="predictions.php" class="menu"> Score Predictions </a></li>
                      <li><a href=teamStats.php class="menu"> Stats </a></li>
                      <li><a href=myAccount.php class="menu"> My Account </a></li>
                    </ul>
                  </div>
                </div>

    </nav>
  </header>

    <div id="content">
      <h1> HOME</h1>
    </div>

    <div id="pageborder">
      <div id="homeInfo">
      <marquee behavior="scroll" direction="left" scrollamount="4">
        <p> Welcome to FSN, the social side of Football.
            Upcoming Premier League Fixutres: <? foreach($fix as $fixture) {
            echo "<tr>
            <td>".$fixture[0]."</td>
            <td>:</td>
            <td>".$fixture[1]."</td>
            <td>v</td>
            <td>".$fixture[2]."</td>
            <td>--</td>
            </tr>"; }  ?></p>

      </marquee>
    </div>

      <h4> Welcome Back <?php echo $message; ?></h4>

      <div id="homepic"></div>

      <h4> Latest News for <?php echo $message2; ?> : </h4>
      <a href="http://www.premierleague.com/rss/ptv/page/ArticleIndex/0,,12306~2233528,00.xml"> </a>
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
