<?php

$apiKey = "2c2ef457-ead1-b1fb-5c6aabb5d0a6";

$json = file_get_contents("http://football-api.com/api/?Action=standings&APIKey=".$apiKey."&comp_id=1204");

$standings = json_decode($json, true);

$table = array();

foreach($standings['teams'] as $team) {
  array_push($table, array($team["stand_position"], $team['stand_team_name'],
  $team["stand_overall_w"], $team["stand_overall_d"], $team["stand_overall_l"],
  $team["stand_points"]));

}

?>
