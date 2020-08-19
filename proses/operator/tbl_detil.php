<?php
include "db_con.php";
$sql = mysql_query("SELECT * FROM detil");
$b = mysql_query("SELECT SUM(subTotal) as subTotal FROM detil");
$sum = mysql_fetch_array($b);
?>