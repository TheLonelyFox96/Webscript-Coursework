<?php

$apiKey = "565ec012251f932ea40000014fd32b7baa6846775e5afcc76252a46f";

$json = file_get_contents("http://api.football-api.com/2.0/standings/1204?Authorization=565eaa22251f932b9f000001d50aaf0b55c7477c5ffcdbaf113ebbda");

$standings = json_decode($json, true);

$table = array();

foreach($standings as $team) {
  array_push($table, array($team["position"], $team['team_name'],
  $team["overall_w"], $team["overall_d"], $team["overall_l"],
  $team["points"]));

}

?>
