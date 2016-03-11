<?php
$apiKey = "2c2ef457-ead1-b1fb-5c6aabb5d0a6";

$today = date("d-m-Y");

$newDate = date('d-m-Y', strtotime("+5 days"));

$json = file_get_contents("http://football-api.com/api/?Action=fixtures&APIKey=".$apiKey.
"&comp_id=1204&&from_date=".$today."&&to_date=".$newDate."");

$fixtures = json_decode($json, true);

$returnFix = array();

if(!isset($fixtures['ERROR'])) {
  foreach($fixtures['matches'] as $fixture) {
    array_push($returnFix, array($fixture["match_date"], $fixture['match_localteam_name'], $fixture["match_visitorteam_name"]));
  }
  echo json_encode($returnFix);
} else {
  echo json_encode(false);
}
 ?>
