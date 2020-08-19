<?php
include 'db_con.php';
$sql = mysql_query("select kd_peg from pegawai ORDER  BY kd_peg desc limit 1") or die(mysql_error());
$got = mysql_fetch_array($sql);
$newID = $got['kd_peg'];
$ID = (int) substr($newID, 1,2);
$ID++;
$fin = "K".sprintf("%02s",$ID);
echo $fin;
?>