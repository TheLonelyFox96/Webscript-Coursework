<?php require("PHP/score.php"); require("PHP/fixtures.php"); ?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="reset.css">
    <link rel="stylesheet" type="text/css" href="wireframe.css">
      <link rel="stylesheet" type="text/css" href="flex.css">
    <link href='https://fonts.googleapis.com/css?family=Monda:400,700' rel='stylesheet' type='text/css'>
    <meta charset="utf-8">
    <link rel='icon' href='favicon.ico'>
    <title>Scores/Chat</title>
  </head>
  <body>

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

  <div id="content">
    <h1> Live Scores and Chat</h1>
  </div>

  <div id="pageborder">
    <div id="scorebox"/>
    <meta http-equiv="refresh" content="30" />
      <table id="tables">
      <?php
      if(!empty($scores)) {
        foreach($scores as $Lscore) {
          echo "<tr>
          <td>".$Lscore[0]."</td>
          <td>".$Lscore[1]."</td>
          <td>".$Lscore[2]."</td>
          <td>".$Lscore[3]."</td>
          <td>".$Lscore[4]."</td>
          <td>".$Lscore[5]."</td>
          </tr>";
        }
      }
      else {
        foreach($fix as $fixture) {
          echo "<tr>
          <td>".$fixture[0]."</td>
          <td>".$fixture[1]."</td>
          <td>v</td>
          <td>".$fixture[2]."</td>
          </tr>";
        }

      }

      ?>
    </table>


    </div>
    <div id="chatbox">
      <p> people can chat in here </p>
    </div>

  </div>
      <footer id="footerdesign">
        <p>Owner: UP737725</p>
        <p>WebScript Programming Coursework 2015-16</p>
      </footer>
  </body>
</html>
