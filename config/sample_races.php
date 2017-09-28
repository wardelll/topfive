<?php

require_once('db.php');

$add_races = "INSERT INTO `races` (`id`, `name`, `type`, `start_time`, `meeting_id`) VALUES
(1, 'Race One', 'Throughbred', '2017-09-29 12:00:00', '1'),
(2, 'Race Two', 'Greyhound', '2017-09-10 12:00:00', '2'),
(3, 'Race Three', 'Harness', '2017-10-01 12:00:00', '3'),
(4, 'Race Four', 'Throughbred', '2017-10-02 12:00:00', '1'),
(5, 'Race Five', 'Greyhound', '2017-10-03 12:00:00', '2'),
(6, 'Race Six', 'Harness', '2017-10-04 12:00:00', '3'),
(7, 'Race Seven', 'Throughbred', '2017-10-05 12:00:00', '1'),
(8, 'Race Eight', 'Greyhound', '2017-10-06 12:00:00', '2'),
(9, 'Race Nine', 'Harness', '2017-10-07 12:00:00', '3'),
(10, 'Race Ten', 'Throughbred', '2017-10-08 12:00:00', '1'),
(11, 'Race Eleven', 'Greyhound', '2017-10-09 12:00:00', '2'),
(12, 'Race Twelve', 'Harness', '2017-10-10 12:00:00', '3');";

if ($mysqli->query($add_races) === TRUE) {
    echo "Races successfully added to table.";
}
elseif ($mysqli->errno) {
    echo "MySQL returned an error: " . $mysqli->error;
}

?>