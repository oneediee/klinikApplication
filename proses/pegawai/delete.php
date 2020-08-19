<?php
include "db_con.php";
$id = $_GET['kd_peg'];
$sql = mysql_query("DELETE FROM pegawai WHERE kd_peg='$id'") or die(mysql_error());
$a = mysql_fetch_row($sql);
echo json_encode($A);
?>