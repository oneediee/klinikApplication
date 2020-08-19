<?php
include "db_con.php";
$dat = date('Y-m-d');
$sql = mysql_query("SELECT noPendf,tglPendf,dokter.nm_dkt,pasien.nm_psn,biaya
                    FROM `pendaftaran`
                    JOIN dokter ON pendaftaran.kd_dkt=dokter.kd_dkt
                    JOIN pasien ON pendaftaran.kd_psn=pasien.kd_psn
                    WHERE tglPendf='$dat'") or die(mysql_error());
while($a = mysql_fetch_array($sql)){
    echo "<option value='".$a['noPendf']."'>".$a['noPendf']."</option>";
}
?>