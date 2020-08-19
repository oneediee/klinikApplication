<?php
include 'db_con.php';
    $sql = mysql_query("select kd_psn from pasien ORDER  BY kd_psn desc limit 1") or die(mysql_error());
    $got = mysql_fetch_array($sql);
    $newID = $got['kd_psn'];
    $ID = (int) substr($newID, 2,5);
    $ID++;
    $fin = "PS".sprintf("%05s",$ID);
    echo $fin;
?>