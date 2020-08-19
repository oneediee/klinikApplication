<?php
include "db_con.php";
$id = $_POST['id_pendf'];
$peg = $_POST['ket_peg'];
$nm = $_POST['ket_nm2'];
$dk = $_POST['ket_dkt'];
$biaya = $_POST['ket_biaya'];
$ket = $_POST['keterangan'];
$tgl = $_POST['tgl'];

$get1 = mysql_query("SELECT kd_peg FROM pegawai WHERE nm_peg='$peg'");
$a1 = mysql_fetch_array($get1);
$get2 = mysql_query("SELECT kd_psn FROM pasien WHERE nm_psn='$nm'");
$a2 = mysql_fetch_array($get2);
$get3 = mysql_query("SELECT kd_dkt FROM dokter WHERE nm_dkt='$dk'");
$a3 = mysql_fetch_array($get3);

$sql = mysql_query("INSERT INTO pendaftaran VALUES (
                    '$id','$tgl','".$a1['kd_peg']."','".$a3['kd_dkt']."','".$a2['kd_psn']."','$biaya','$ket'
                    )") or die(mysql_error());
if ($sql){
    echo "<script>alert('Berhasil Menambah Pendaftaran');location.href='../../operator.php';</script>";
}else{
    echo "<script>alert('Error Menambah Pendaftaran');location.href='../../operator.php';</script>";
}
?>