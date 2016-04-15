<?php require("PHP/fixtures.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="reset.css">
    <link rel="stylesheet" type="text/css" href="wireframe.css">
    <link href='https://fonts.googleapis.com/css?family=Monda:400,700' rel='stylesheet' type='text/css'>
    <meta charset="utf-8">
    <link rel='icon' href='favicon.ico'>
    <script src='lib/script.js'></script>
    <title>Predictions</title>
  </head>
  <body>

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

  <div id= "content">
    <h1> Vote Here Now!</h1>
  </div>
  <div id="pageborder">
    <p> People can cast votes and see other peoples results in here </p>
    <p> example below</p><br>
     <form>

         <div id=matches>
        <strong>Matches</strong><br>

        <table id=table>
        <?php
        foreach($fix as $fixture) {
          echo "<tr>
          <td>".$fixture[0]."</td>
          <td>".$fixture[1]."</td>
          <td>".$fixture[2]."</td>
          </tr>";
        }
        ?>
      </table>

         <input type="button" value="submit" onclick="scores()">

         </div>
       </form>
    </div>

    <footer id="footerdesign">
        <p>Owner: UP737725</p>
        <p>WebScript Programming Coursework 2015-16</p>
    </footer>

  </body>
</html>
