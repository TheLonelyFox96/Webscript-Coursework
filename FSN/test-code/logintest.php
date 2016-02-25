<?php

if (isset($_POST['name']) && isset($_POST['pass'])) {
  $name = $_POST['name'];
  $pass = $_POST['pass'];

  if( $name == "tom" && $pass == "1234" )
    {
        // Authentication successful - Set session
        session_start();
        $_SESSION['auth'] = 1;
        setcookie("username", $_POST['name'], time()+(84600*30));
        header('Location: index.php');
        exit();
    }
    else {
      echo ("ERROR: Incorrect username or password!");
    }
};
require("databasetest.php");
?>

<html>
  <head>
    <link rel="stylesheet" type="text/css" href="reset.css">
    <link rel="stylesheet" type="text/css" href="wireframe.css">
    <meta charset="utf-8">
    <link rel='icon' href='favicon.ico'>

    <title>FSN</title>
  </head>
  <body>


      <div id="heading"> FSN </div>




    <div id="pageborder2">
      <h2> Welcome to FSN, the social side of Football. </h2>
      <p> Please Login Below </p> <br>

      <div id="form">
      <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
          Username: <input type="text" name="name" value="<?php echo $_COOKIE['username']; ?>" required><br>
        Password: <input type="password" name="pass" required><br>
          <input type="submit" name="submit" value="Log In">
      </form>


        </div>
    </div>
        <footer id="footerdesign">
          <p>Owner: UP737725</p>
          <p>WebScript Programming Coursework 2015-16</p>
        </footer>
  </body>
</html>
