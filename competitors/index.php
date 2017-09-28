<?php

$json_url = "http://localhost/races/competitors/read.php?race=" . $_GET['race'];

ini_set("allow_url_fopen", 1);
$json = file_get_contents($json_url);
$obj = json_decode($json);
require_once('../header.php');
?>

<table>
  <tr><td>Name</td><td>Position</td></tr>
  <?php 
  foreach ($obj as $competitors) {
    foreach ($competitors as $competitor) {
      print '<tr>
      <td>' . $competitor->name . '</td>
      <td>' . $competitor->position . '</td>
      </tr>';
    }
  } 
  ?>
</table>
<?php
require_once('../footer.php');
?>