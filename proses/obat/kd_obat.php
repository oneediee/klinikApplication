<?php
include 'db_con.php';
$sql = mysql_query("select kd_obat from obat ORDER  BY kd_obat desc limit 1") or die(mysql_error());
$got = mysql_fetch_array($sql);
$newID = $got['kd_obat'];
$ID = (int) substr($newID, 1,2);
$ID++;
$fin = "J".sprintf("%02s",$ID);
echo $fin;
?>