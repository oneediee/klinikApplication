<?php
include "db_con.php";
$id=$_POST['kd_dkt'];
$nm=$_POST['nm_dkt'];
$sp=$_POST['sp'];
$almt=$_POST['almt_dkt'];
$telp=$_POST['telp_dkt'];
$tarif=$_POST['tarif'];

$sql = mysql_query("UPDATE dokter SET
                    nm_dkt='$nm',spesialis='$sp',almt_dkt='$almt',telp_dkt='$telp',tarif='$tarif'
                    WHERE kd_dkt='$id'") or die(mysql_error());
if ($sql){
    echo "<script>alert('Berhasil Update Dokter');location.href='../../admin.php';</script>";
}else{
    echo "<script>alert('Error Update Dokter');location.href='../../admin.php';</script>";
}
?>