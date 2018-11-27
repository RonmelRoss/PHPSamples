<?php
$animals = array("Dog", "Tiger", "Snake", "Goat", "Rabbit", "Whale", "Bird");
echo "Unsorted animals: " . implode(", ", $animals);
echo "<br /><br />";

sort($animals);
echo "Sorted animals: " . implode(", ", $animals);
echo "<br /><br />";

$animals = array_reverse($animals);
echo "Sorted animals, descending order: " . implode(", ", $animals);
?>