<?php
$values = "Rabbit|Whale|Penguin|Bird";

$array = explode("|", $values);
print_r($array);

echo "<br /><br />";

$string = implode(" and ", $array);
echo $string;
?>