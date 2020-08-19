<?php
include "db_con.php";
$obt = $_POST['ket_obt'];
$hg = $_POST['hg_obt'];
$jml = $_POST['jml_obt'];
$tot = $_POST['tot_obt'];
$id = $_POST['resp'];
$a = mysql_query("SELECT MAX(noResep) FROM resep");
$a1 = mysql_fetch_array($a);
$b = $a1[0];
$nm = mysql_query("SELECT nm_obat,jml_obat from obat WHERE kd_obat='$obt'");
$ann = mysql_fetch_array($nm);
$obt1 = $ann[0];
$stok = $ann[1];
if($stok == "0"){
    echo "<script>alert('Jumlah Obat Telah Habis');window.location.href='../../resep.php';</script>";
}elseif ($stok < $jml){
    echo "<script>alert('Jumlah Obat Tersisa $stok');window.location.href='../../resep.php';</script>";
}else{
    $new_jml = $stok - $jml;
    $update = mysql_query("UPDATE obat SET jml_obat='$new_jml' WHERE kd_obat='$obt'") or die(mysql_error());
    $sql = mysql_query("INSERT INTO detil VALUES (
                    '$id','$obt1','$hg','$jml','$tot'
                    )") or die(mysql_error());
    if($sql){
        echo "<script>alert('Berhasil Tambah Obat');window.location.href='../../resep.php';</script>";
    }
}

?>