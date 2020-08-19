<?php
include "db_con.php";
$id=$_POST['kd_obat'];
$nm=$_POST['nm_obat'];
$sp=$_POST['jenis'];
$almt=$_POST['kategori'];
$telp=$_POST['harga'];
$tarif=$_POST['jumlah'];

$sql = mysql_query("INSERT INTO obat VALUES (
                    '$id','$nm','$sp','$almt','$telp','$tarif'
                    )") or die(mysql_error());
if ($sql){
    echo "<script>alert('Berhasil Menambah Obat');location.href='../../obat.php';</script>";
}else{
    echo "<script>alert('Error Menambah Obat');location.href='../../obat.php';</script>";
}
?>