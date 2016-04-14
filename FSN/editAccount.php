
  <?php
  session_start();
  require("PHP/dbConnect.php");

  if(!isset($_SESSION['user_id']))
  {

    header('Location: index.html');

  }
  elseif(!isset($_POST['Name'], $_POST['Email'], $_POST['Username'], $_POST['Password'], $_POST['Team']))
  {

      $message = 'Please enter your details';

    }

  elseif (strlen($_POST['Username']) > 30 || strlen($_POST['Username']) <= 4)
  {

    $message = 'Usernames must be between 4-30 characters long';
  }

  elseif (strlen($_POST['Password']) > 40 || strlen($_POST['Password']) < 8)
  {
      $message = 'Please enter a valid Password';
  }

  else
  {
    /*Cleans any inputs - guards agains attacks via SQL Injection */
    $Name = filter_var($_POST['Name'], FILTER_SANITIZE_STRING);
    $Email = filter_var($_POST['Email'], FILTER_SANITIZE_STRING);
    $Username = filter_var($_POST['Username'], FILTER_SANITIZE_STRING);
    $Password = filter_var($_POST['Password'], FILTER_SANITIZE_STRING);
    $Team = filter_var($_POST['Team'], FILTER_SANITIZE_STRING);
    $UserID = $_SESSION['user_id'];



    $stmt = $_DB->prepare('UPDATE User SET Name=:Name, Email=:Email, Username=:Username, Password=:Password, Team=:Team WHERE id=:User_id');

    $stmt->bindParam(':Name', $Name);
    $stmt->bindParam(':Email', $Email);
    $stmt->bindParam(':Username', $Username);
    $stmt->bindParam(':Password', $Password);
    $stmt->bindParam(':Team', $Team);
    $stmt->bindParam(':User_id', $UserID);


    $stmt->execute();
    header('Location: myAccount.php');

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
        <h1> My Account</h1>
      </div>



      <div id=pageborderAccount>

        <h2> Edit your details below: </h2>

        <div id="form">
          <form action="editAccount.php" method="post">

            Name:<input type="text" id="login" name="Name" placeholder="Name"  maxlength="40"/>
            Email:<input type="text" id="login" name="Email" placeholder="Email" maxlength="50"/>
            Username:<input type="text" id="login" name="Username" placeholder="Username" maxlength="30"/><br>
            Password:<input type="Password" name="Password" placeholder="Password" maxlength="40" />
            Favourite Team:<input type="text" id="login" name="Team" placeholder="Team" maxlength="30" /><br>

            <input type="submit" value="Save" />

          </form>

    </div>

  </div>

        <footer id="footerdesign">
          <p>Owner: UP737725</p>
          <p>WebScript Programming Coursework 2015-16</p>
        </footer>
    </body>
  </html>
