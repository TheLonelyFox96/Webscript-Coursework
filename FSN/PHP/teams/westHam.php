

<?php

$apiKey = "565ec012251f932ea40000014fd32b7baa6846775e5afcc76252a46f";


$json = file_get_contents("http://api.football-api.com/2.0/matches?comp_id=1204%2C1198&team_id=9427&from_date=13.04.2016&to_date=16.05.2016&Authorization=565eaa22251f932b9f000001d50aaf0b55c7477c5ffcdbaf113ebbda");



$fixtures = json_decode($json, true);


$fix = array();

foreach($fixtures as $fixture) {
  array_push($fix, array($fixture["formatted_date"], $fixture['localteam_name'],
  $fixture["visitorteam_name"],
  ));

}

?>
