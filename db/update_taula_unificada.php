<?php

//recepciona taula en format json (array)
$taula = isset($_POST["taula"]) ? $_POST["taula"] : false;

if(!$taula) die("error: taula undefined");

$db=new SQLite3("db.sqlite");

$taula = $db->escapeString($taula);

$sql="INSERT INTO taules(text) VALUES ('$taula')";

$res=$db->query($sql) or die(print_r($db->lastErrorMsg(), true));

echo "taula guardada correctament";
?>
