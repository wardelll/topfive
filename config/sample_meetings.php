<?php

require_once('db.php');

$add_meetings = "INSERT INTO `meetings` (`id`, `type`, `name`) VALUES
(1, 'Throughbred', 'Throughbred Track'),
(2, 'Greyhound', 'Greyhound Track'),
(3, 'Harness', 'Harness Track');";

if ($mysqli->query($add_meetings) === TRUE) {
    echo "Meetings successfully added to table.";
}
elseif ($mysqli->errno) {
    echo "MySQL returned an error: " . $mysqli->error;
}

?>