<?php
include "db_con.php";
$id=$_POST['kd_dkt'];
$nm=$_POST['nm_dkt'];
$sp=$_POST['sp'];
$almt=$_POST['almt_dkt'];
$telp=$_POST['telp_dkt'];
$tarif=$_POST['tarif'];

$sql = mysql_query("INSERT INTO dokter VALUES (
                    '$id','$nm','$sp','$almt','$telp','$tarif'
                    )") or die(mysql_error());
if ($sql){
    echo "<script>alert('Berhasil Menambah Dokter');location.href='../../admin.php';</script>";
}else{
    echo "<script>alert('Error Menambah Dokter');location.href='../../admin.php';</script>";
}
?>