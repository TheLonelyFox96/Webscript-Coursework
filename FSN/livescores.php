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

  <div id="content">
    <h1> Live Scores and Chat</h1>
  </div>

  <div id="pageborder">
    <div id="scorebox">

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
      <script>
      function getFixtures() {
        var target, xhr, success;

        target = document.getElementById("tables");

        xhr = new XMLHttpRequest();

        success = function(){
          var fixtures = JSON.parse(xhr.responseText);
          target.innerHTML = "";
          if(fixtures != false) {
            for (var fix in fixtures) {
              target.innerHTML += "<tr>\
                <td>"+fix[0]+"</td>\
                <td>"+fix[1]+"</td>\
                <td>v</td>\
                <td>"+fix[2]+"</td>\
              </tr>";
            }
          }

          console.log(JSON.parse(xhr.responseText));

        }


        xhr.open("GET", "PHP/refreshFixtures.php", true);
        xhr.addEventListener("load", success);
        xhr.send();
      }

      function getScores() {
        setInterval(function() {
          var target, xhr, success;

          target = document.getElementById("tables");

          xhr = new XMLHttpRequest();

          success = function(){
            var scores = JSON.parse(xhr.responseText);
            target.innerHTML = "";
            if(scores != false){
              for (var Lscore in scores) {
                target.innerHTML += "<tr>\
                  <td>"+Lscore[0]+"</td>\
                  <td>"+Lscore[1]+"</td>\
                  <td>"+Lscore[2]+"</td>\
                  <td>"+Lscore[3]+"</td>\
                  <td>"+Lscore[4]+"</td>\
                  <td>"+Lscore[5]+"</td>\
                </tr>";
              }
            } else {
              target.innerHTML = "No Scores available... getting fixtures...";
              getFixtures();
            }
              console.log(JSON.parse(xhr.responseText));
          }

          xhr.open("GET", "PHP/refreshTable.php", true);
          xhr.addEventListener("load", success);
          xhr.send();
        }, 5000);
      }

      window.addEventListener("load", getScores());

      </script>
  </body>
</html>
