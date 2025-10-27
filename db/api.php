<?php

$db=new SQLite3("db.sqlite",SQLITE3_OPEN_READONLY);

//agafa només la ultima versió
$sql="SELECT * FROM taules ORDER BY ID DESC LIMIT 1";

$res=$db->query($sql) or die(print_r($db->lastErrorMsg(), true));

$payload=[];
while($row=$res->fetchArray(SQLITE3_ASSOC)){
  $obj=(object)$row;
  $payload[]=$obj;
}

echo json_encode($payload);
?>
