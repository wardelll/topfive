<?php

require_once('db.php');

$create_competitors = "CREATE TABLE IF NOT EXISTS `competitors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `position` int(11) NOT NULL ,
  `race_id` int(11) NOT NULL ,
  PRIMARY KEY (`id`)
);";

if ($mysqli->query($create_competitors) === TRUE) {
    echo "Table competitors successfully created.";
}
elseif ($mysqli->errno) {
    echo "MySQL returned an error: " . $mysqli->error;
}

?>