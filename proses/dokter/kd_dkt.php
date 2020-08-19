<?php
include 'db_con.php';
$sql = mysql_query("select kd_dkt from dokter ORDER  BY kd_dkt desc limit 1") or die(mysql_error());
$got = mysql_fetch_array($sql);
$newID = $got['kd_dkt'];
$ID = (int) substr($newID, 1,2);
$ID++;
$fin = "M".sprintf("%02s",$ID);
echo $fin;
?>