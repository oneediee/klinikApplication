<?php
include "db_con.php";
$nm = $_GET['ket_dkt'];
$sql = mysql_query("SELECT spesialis,tarif FROM dokter WHERE nm_dkt='$nm'") or die(mysql_error());
$a = mysql_fetch_row($sql);
echo json_encode($a);
?>