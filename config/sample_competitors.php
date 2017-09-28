<?php

require_once('db.php');

$add_competitors = "INSERT INTO `competitors` (`id`, `name`, `position`, `race_id`) VALUES
(1, 'Green Caviar', '1', '1'),
(2, 'Hasta Manana', '2', '1'),
(3, 'There She Goes', '3', '1'),
(4, 'Toot Toot Beep Beep', '4', '1'),
(5, 'Whirldwind', '1', '2'),
(6, 'Dog of War', '2', '2'),
(7, 'Fido', '3', '2'),
(8, 'Santas Little Helper', '4', '2'),
(9, 'Ajax', '1', '3'),
(10, 'Bam Bam', '2', '3'),
(11, 'Roundabout', '3', '3'),
(12, 'Speedy', '4', '3'),
(13, 'Green Caviar', '1', '4'),
(14, 'Hasta Manana', '2', '4'),
(15, 'There She Goes', '3', '4'),
(16, 'Toot Toot Beep Beep', '4', '4'),
(17, 'Whirldwind', '1', '5'),
(18, 'Dog of War', '2', '5'),
(19, 'Fido', '3', '5'),
(20, 'Santas Little Helper', '4', '5'),
(21, 'Ajax', '1', '6'),
(22, 'Bam Bam', '2', '6'),
(23, 'Roundabout', '3', '6'),
(24, 'Speedy', '4', '6'),
(25, 'Green Caviar', '1', '7'),
(26, 'Hasta Manana', '2', '7'),
(27, 'There She Goes', '3', '7'),
(28, 'Toot Toot Beep Beep', '4', '7'),
(29, 'Whirldwind', '1', '8'),
(30, 'Dog of War', '2', '8'),
(31, 'Fido', '3', '8'),
(32, 'Santas Little Helper', '4', '8'),
(33, 'Ajax', '1', '9'),
(34, 'Bam Bam', '2', '9'),
(35, 'Roundabout', '3', '9'),
(36, 'Speedy', '4', '9'),
(37, 'Green Caviar', '1', '10'),
(38, 'Hasta Manana', '2', '10'),
(39, 'There She Goes', '3', '10'),
(40, 'Toot Toot Beep Beep', '4', '10'),
(41, 'Whirldwind', '1', '11'),
(42, 'Dog of War', '2', '11'),
(43, 'Fido', '3', '11'),
(44, 'Santas Little Helper', '4', '11'),
(45, 'Ajax', '1', '12'),
(46, 'Bam Bam', '2', '12'),
(47, 'Roundabout', '3', '12'),
(48, 'Speedy', '4', '12');";

if ($mysqli->query($add_competitors) === TRUE) {
    echo "Competitors successfully added to table.";
}
elseif ($mysqli->errno) {
    echo "MySQL returned an error: " . $mysqli->error;
}

?>