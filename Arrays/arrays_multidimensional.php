<?php
$contacts = array();

$contacts["Friends"] = array("Me", "John Doe");
$contacts["Family"] = array("Mom", "Dad");
$contacts["Enemies"] = array("Stalin", "Hitler");

foreach($contacts as $categoryName => $value)
{
    echo "<b>" . $categoryName . ":</b><br />";
    foreach($contacts[$categoryName] as $name)
    {
        echo $name . "<br />";
    }
    echo "<br />";
}
?>