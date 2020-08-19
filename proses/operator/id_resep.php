<?php
include 'db_con.php';
$sql = mysql_query("select noResep from resep ORDER  BY noResep desc limit 1") or die(mysql_error());
$got = mysql_fetch_array($sql);
$newID = $got['noResep'];
$ID = (int) substr($newID, 1,2);
$ID++;
$fin = "RSP".sprintf("%02s",$ID);
echo $fin;
?>