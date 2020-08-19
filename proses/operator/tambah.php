<?php
include "db_con.php";
$id = $_POST['id_psn1'];
$nm = $_POST['ket_nm1'];
$almt = $_POST['ket_almt1'];
$gen = $_POST['ket_gender1'];
$umur = $_POST['ket_umur1'];
$telp = $_POST['ket_telp1'];

$sql = mysql_query("INSERT INTO pasien VALUES (
                      '$id','$nm','$almt','$gen','$umur','$telp'
                    )") or die(mysql_error());
if ($sql){
    echo "<script>alert('Berhasil Menambah Pasien');location.href='../../detailpasien.php';</script>";
}else{
    echo "<script>alert('Error Menambah Pasien');location.href='../../detailpasien.php';</script>";
}
?>