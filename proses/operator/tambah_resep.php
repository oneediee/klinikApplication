<?php
include "db_con.php";
$id = $_POST['id_rsp'];
$peg = $_POST['ket_peg'];
$nm = $_POST['ket_nm2'];
$dk = $_POST['ket_dkt'];
$biaya = $_POST['tot_biaya'];
$bayar = $_POST['tot_bayar'];
$kembali = $_POST['tot_kembali'];
$tgl = $_POST['tgl'];

$get1 = mysql_query("SELECT kd_peg FROM pegawai WHERE nm_peg='$peg'");
$a1 = mysql_fetch_array($get1);
$get2 = mysql_query("SELECT kd_psn FROM pasien WHERE nm_psn='$nm'");
$a2 = mysql_fetch_array($get2);
$get3 = mysql_query("SELECT kd_dkt FROM dokter WHERE nm_dkt='$dk'");
$a3 = mysql_fetch_array($get3);

$sql = mysql_query("INSERT INTO resep VALUES (
                    '$id','$tgl','".$a1['kd_peg']."','".$a3['kd_dkt']."','".$a2['kd_psn']."','$biaya','$bayar','$kembali'
                    )") or die(mysql_error());
$sql2 = mysql_query("DELETE FROM detil WHERE noResep='$id'");
if ($sql){
    echo "<script>alert('Berhasil Menambah Resep');location.href='../../resep.php';</script>";
}else{
    echo "<script>alert('Error Menambah Resep');location.href='../../resep.php';</script>";
}
?>