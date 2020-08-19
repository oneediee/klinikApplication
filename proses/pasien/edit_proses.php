<?php
include "db_con.php";
$a = $_POST['kd_psn'];
$b = $_POST['nm_psn'];
$c = $_POST['almt'];
$d = $_POST['gender'];
$e = $_POST['umur'];
$f = $_POST['telp'];

$sql = mysql_query("UPDATE pasien SET
                    nm_psn='$b',almt_psn='$c',gender_psn='$d',umur_psn='$e',telp_psn='$f'
                    WHERE kd_psn='$a'") or die(mysql_error());
if ($sql){
    echo "<script>alert('Berhasil Update Pasien');location.href='../../pasien.php';</script>";
}else{
    echo "<script>alert('Error Update Pasien');location.href='../../pasien.php';</script>";
}
?>