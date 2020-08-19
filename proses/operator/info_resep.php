<?php
include "db_con.php";
$sql = mysql_query("SELECT MAX(noResep) FROM resep");
$a = mysql_fetch_array($sql);
echo $a[0];
?>