<?php
include "db_con.php";
$id = $_GET['kd_obat'];
$sql = mysql_query("DELETE FROM obat WHERE kd_obat='$id'") or die(mysql_error());
$a = mysql_fetch_row($sql);
echo json_encode($a);
?>