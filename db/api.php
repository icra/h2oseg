<?php

$db=new SQLite3("db.sqlite",SQLITE3_OPEN_READONLY);

$payload=[];

$sql="SELECT * FROM fluxos";

$res=$db->query($sql) or die(print_r($db->errorInfo(), true));

while($row=$res->fetchArray(SQLITE3_ASSOC)){
  $obj=(object)$row;
  $payload[]=$obj;
}

echo json_encode($payload);
?>
