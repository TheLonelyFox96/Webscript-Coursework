<?php  ?>
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
            <a href=news.html class="button"> News </a>
            <a href=myAccount.html class="button"> My Account </a>
        </div>
            <div class="dropMenu">
              <button class="dropdwnButton"> Menu </button>
              <div class="menu-dropdown">
                <ul>
                  <li><a href="home.php" class="menu">Home/Login</a></li>
                  <li><a href="livescores.php" class="menu"> Live Scores/Chat </a></li>
                  <li><a href="table.php" class="menu"> Table </a></li>
                  <li><a href="predictions.php" class="menu"> Score Predictions </a></li>
                  <li><a href=news.html class="menu"> News </a></li>
                  <li><a href=myAccount.html class="menu"> My Account </a></li>
                </ul>
              </div>
            </div>

    </nav>
  </header>

    <div id="content">
      <h1> Team Stats</h1>
    </div>

    <input form="searchform" action="" name="search" autofocus placeholder="Search" id="search" type="text" maxlength="200" autocomplete="off">

    <div id=pageBordStats>

    <div id="teamInfo">
      <p> Team Information </p>
    </div>

    <div id="Squad">
      <p> Squad </p>
    </div>

    <div id="Transfers">
      <p> Latest Transfers </p>
    </div>

    <div id="Injuries">
      <p> Latest Injuries </p>
    </div>

  </div>

      <footer id="footerdesign">
        <p>Owner: UP737725</p>
        <p>WebScript Programming Coursework 2015-16</p>
      </footer>
  </body>
</html>
