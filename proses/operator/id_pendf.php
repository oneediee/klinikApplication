<?php
include 'db_con.php';
$sql = mysql_query("select noPendf from pendaftaran ORDER  BY noPendf desc limit 1") or die(mysql_error());
$got = mysql_fetch_array($sql);
$newID = $got['noPendf'];
$ID = (int) substr($newID, 1,3);
$ID++;
$fin = "S".sprintf("%03s",$ID);
echo $fin;
?>