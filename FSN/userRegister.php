<?PHP
  session_start();
  require("PHP/dbConnect.php");

  if(!isset( $_POST['Username'], $_POST['Password'], $_POST['Team']))
  {

      $message = 'Please enter your details';

    }

  elseif (strlen($_POST['Username']) > 30 || strlen($_POST['Username']) < 1)
  {

    $message = 'Username is too long';
  }

  elseif (strlen($_POST['Password']) > 40 || strlen($_POST['Password']) < 8)
  {
      $message = 'Please enter a valid Password';
  }

  else
  {
    /*Cleans any inputs - guards agains attacks via SQL Injection */
    $Username = filter_var($_POST['Username'], FILTER_SANITIZE_STRING);
    $Password = filter_var($_POST['Password'], FILTER_SANITIZE_STRING);
    $Team = filter_var($_POST['Team'], FILTER_SANITIZE_STRING);




    $stmt = $_DB->prepare('INSERT INTO User(Username, Password, Team) VALUES(:Username, :Password, :Team)');

    $stmt->bindParam(':Username', $Username);
    $stmt->bindParam(':Password', $Password);
    $stmt->bindParam(':Team', $Team);

    $stmt->execute();

    $message = 'New User Added';
    header('Location: login.php');


  }

?>

  <html>
    <head>
      <link rel="stylesheet" type="text/css" href="reset.css">
      <link rel="stylesheet" type="text/css" href="wireframe.css">
      <link rel="stylesheet" type="text/css" href="flex.css">
      <link href='https://fonts.googleapis.com/css?family=Monda:400,700' rel='stylesheet' type='text/css'>
      <meta charset="utf-8">
      <link rel='icon' href='favicon.ico'>

      <title>FSN</title>
    </head>
    <body>


        <div id="heading"> FSN </div>




      <div id="pageborderLogin">
        <h2> Welcome to FSN, the social side of Football. </h2>
        <p> Please Register Here!  </p> <br>

        <div id="form">
          <form action="userRegister.php" method="post">

            Username:<input type="text" name="Username" value="Username" maxlength="30"/>
            Password:<input type="Password" name="Password" value="Passowrd" maxlength="40" />
            Favourite Team:<input type="text" name="Team" value="Team" maxlength="30" /><br>

            <input type="submit" value="Register!" />
          </form>

        <p>  <?php echo $message; ?></p>

          </div>
      </div>
          <footer id="footerdesign">
            <p>Owner: UP737725</p>
            <p>WebScript Programming Coursework 2015-16</p>
          </footer>
    </body>
  </html>
