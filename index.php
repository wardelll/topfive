<?php

$json_url = "http://localhost/races/read.php";

ini_set("allow_url_fopen", 1);
$json = file_get_contents($json_url);
$obj = json_decode($json);
require_once('header.php');
?>

<table id="races">
  <tr><td>Name</td><td>Type</td><td>Start Time</td></tr>
  <?php 
  foreach ($obj as $races) {
    foreach ($races as $race) {
      print '<tr data-start-time="' .$race->start_time. '">
      <td><a href="/races/competitors?race='. $race->id . '">' . $race->name . '</a></td>
      <td>' .$race->type. '</td>
      <td class="start_time" data-countdown="' .$race->start_time. '">' .$race->start_time. '</td>
      </tr>';
    }
  } 
  ?>
</table>
test change 
<?php
require_once('footer.php');
?>