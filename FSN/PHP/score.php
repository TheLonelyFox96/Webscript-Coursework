<?php

$apiKey = "2c2ef457-ead1-b1fb-5c6aabb5d0a6";

$json = file_get_contents("http://football-api.com/api/?Action=today&APIKey=".$apiKey."&comp_id=1204");

$LiveScores = json_decode($json, true);

$scores = array();

if(!empty($scores)) {
  foreach($LiveScores['matches'] as $Lscore) {
    array_push($scores, array($Lscore["match_status"], $Lscore["match_time"], $Lscore["match_localteam_name"],
    $Lscore["match_localteam_score"], $Lscore["match_visitorteam_name"],
    $Lscore["match_visitorteam_score"]));
  }
} else {
  $scores = false;
}



?>
