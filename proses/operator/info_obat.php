<?php
include "db_con.php";
$nm = $_GET['ket_obt'];
$sql = mysql_query("SELECT harga_obat FROM obat WHERE kd_obat='$nm'") or die(mysql_error());
$a = mysql_fetch_row($sql);
echo json_encode($a);
?>