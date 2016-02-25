<?php require("PHP/leaguetable.php"); ?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="reset.css">
    <link rel="stylesheet" type="text/css" href="wireframe.css">
    <link rel="stylesheet" type="text/css" href="flex.css">
    <link href='https://fonts.googleapis.com/css?family=Monda:400,700' rel='stylesheet' type='text/css'>
    <meta charset="utf-8">

    <title>League Standings</title>
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
    <h1> League Standings</h1>
  </div>
  <div id="tablePageBorder">

    <table id='table'>
      <tr>
        <td> Position </td>
        <td> Team Name </td>
        <td> W </td>
        <td> D </td>
        <td> L </td>
        <td> Points </td>
      </tr>

    <?php
      foreach($table as $team) {
        echo "<tr>
        <td>".$team[0]."</td>
        <td>".$team[1]."</td>
        <td>".$team[2]."</td>
        <td>".$team[3]."</td>
        <td>".$team[4]."</td>
        <td>".$team[5]."</td>
        </tr>";
      }
    ?>
  </table>
  </div>

  <footer id="footerdesign">
    <p>Owner: UP737725</p>
    <p>WebScript Programming Coursework 2015-16</p>
  </footer>
  </body>
</html>
