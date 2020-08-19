<?php
include "db_con.php";
    $nm = $_GET['nm_psn'];
    $sql = mysql_query("SELECT * FROM pasien WHERE nm_psn='$nm'") or die(mysql_error());
    $a = mysql_fetch_row($sql);
    echo json_encode($a);
?>