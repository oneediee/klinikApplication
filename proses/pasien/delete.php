<?php
include "db_con.php";
$id=$_GET['kd_psn'];
$sql = mysql_query("DELETE FROM pasien WHERE kd_psn='$id'") or die(mysql_error());
$a = mysql_fetch_row($sql);
echo json_encode($a);
?>