<?php
include "db_con.php";
$id = $_GET['no_pendf'];
$sql = mysql_query("SELECT pasien.nm_psn,dokter.nm_dkt,dokter.spesialis,biaya
                    FROM `pendaftaran`
                    JOIN dokter ON pendaftaran.kd_dkt=dokter.kd_dkt
                    JOIN pasien ON pendaftaran.kd_psn=pasien.kd_psn
                    WHERE noPendf='$id'") or die(mysql_error());
$a = mysql_fetch_array($sql);
echo json_encode($a);
?>