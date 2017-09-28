<?php

require_once('db.php');

$create_races = "CREATE TABLE IF NOT EXISTS `races` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `type` varchar(256) NOT NULL,
  `start_time` datetime NOT NULL,
  `meeting_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
);";

if ($mysqli->query($create_races) === TRUE) {
    echo "Table races successfully created.";
}
elseif ($mysqli->errno) {
    echo "MySQL returned an error: " . $mysqli->error;
}

?>