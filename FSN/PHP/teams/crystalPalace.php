<?php

$apiKey = "565ec012251f932ea40000014fd32b7baa6846775e5afcc76252a46f";


$json = file_get_contents('http://api.football-api.com/2.0/team/9127?Authorization=565eaa22251f932b9f000001d50aaf0b55c7477c5ffcdbaf113ebbda')

$Palace = json_decode($json, true);

$Tinfo = array();

foreach ($Palace as $CP) {
  array_push($Tinfo, array($CP['name'], $CP['founded'], $CP['venue_name'], $CP['venue_city'], $CP['venue_capacity'], $CP['coach_name']));
}


?>
