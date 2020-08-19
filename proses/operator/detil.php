<?php
include "db_con.php";
$res = $_POST['df_res'];
$dosis = $_POST['dosis'];
$obat = $_POST['obat'];
$jml = count($obat);
    for ($x=0;$x<$jml;$x++){
        $a = mysql_query("SELECT * FROM obat WHERE kd_obat='$obat[$x]'");
        $a1 = mysql_fetch_array($a);
        $has = $obat[$x] * $dosis[$x];
        mysql_query("INSERT INTO detil VALUES ('$res','$obat[$x]','".$a1['harga_obat']."','$dosis[$x]','$has')") or die(mysql_error());
    }


echo "Berhasil";
?>