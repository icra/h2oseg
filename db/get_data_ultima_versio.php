<?php
$db=new SQLite3("db.sqlite",SQLITE3_OPEN_READONLY);
$sql="SELECT data FROM taules ORDER BY ID DESC LIMIT 1";
$data=$db->querySingle($sql) or die(print_r($db->lastErrorMsg(), true));
echo $data;
?>
