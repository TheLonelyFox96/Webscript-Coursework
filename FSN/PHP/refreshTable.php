<?php

$apiKey = "565ec012251f932ea40000014fd32b7baa6846775e5afcc76252a46f";

$today = date("d-m-Y");

$newDate = date('d-m-Y', strtotime("+5 days"));

$json = file_get_contents("http://api.football-api.com/2.0/matches?comp_id=1204&from_date=".$today."&to_date=".$newDate."&Authorization=565eaa22251f932b9f000001d50aaf0b55c7477c5ffcdbaf113ebbda");

$LiveScores = json_decode($json, true);

$scores = array();

if(!isset($scores['ERROR'])) {
  foreach($LiveScores as $Lscore) {
    array_push($scores, array($Lscore["status"], $Lscore["time"], $Lscore["localteam_name"],
    $Lscore["localteam_score"], $Lscore["visitorteam_name"],
    $Lscore["visitorteam_score"]));
  }
} else {
  $scores = false;
}

echo json_encode($scores);



?>
