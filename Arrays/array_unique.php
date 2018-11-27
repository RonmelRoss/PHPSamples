<?php
$array = array("Dog", "Tiger", "Snake", "Dog");

echo "Animals in array:<br />";
foreach($array as $value)
    echo $value . "<br />";

echo "<br />";

$array = array_unique($array);

echo "Animals in unique array:<br />";
foreach($array as $value)
    echo $value . "<br />";
?>