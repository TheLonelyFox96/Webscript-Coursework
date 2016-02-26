<?php

$myIP = "130.211.94.47";
$dsn = "mysql:$myIP;charset=UTF-8";
$user = "root";
$password = "root";
$database =  "Web";
$_DB = new PDO($dsn,$user,$password);


$showquery = "show databases like 'Web'";
$showresult = $_DB->prepare($showquery);
$showresult->execute();



?>
