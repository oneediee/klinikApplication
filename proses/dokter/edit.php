<?php
include "db_con.php";
$id = $_GET['kd_dkt'];
$sql = mysql_query("SELECT * FROM dokter WHERE kd_dkt='$id'");
$a = mysql_fetch_row($sql);
echo json_encode($a);
?>