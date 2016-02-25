<?PHP
  session_start();

?>

<html>
<head>
  <title> Sign Up Test </title>
</head>

<body>

  <h1> Test Sign Up to database </h1>

  <form action="userAdd.php" method="post">

    Username:<input type="text" name="Username" value="" maxlength="30"/>
    Password:<input type="text" name="Password" value="" maxlength="40" />
    Favourite Team:<input type="text" name="Team" value="" maxlength="30" />

    <input type="submit" value="Login" />
  </form>
</html>
