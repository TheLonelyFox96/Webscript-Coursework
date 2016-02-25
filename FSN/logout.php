
<?PHP

session_start();
session_destroy();
?>

<p> logout successful </p>

<?php

header('Location: login.php');
exit();
?>
