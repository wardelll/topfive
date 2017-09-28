<?php

require_once('db.php');

$create_meetings = "CREATE TABLE IF NOT EXISTS `meetings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(256) NOT NULL,
  `name` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
);";

if ($mysqli->query($create_meetings) === TRUE) {
    echo "Table meetings successfully created.";
}
elseif ($mysqli->errno) {
    echo "MySQL returned an error: " . $mysqli->error;
}

?>