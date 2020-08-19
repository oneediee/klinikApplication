<?php
include "db_con.php";
$id=$_POST['kd_obat'];
$nm=$_POST['nm_obat'];
$sp=$_POST['jenis'];
$almt=$_POST['kategori'];
$telp=$_POST['harga'];
$tarif=$_POST['jumlah'];

$sql = mysql_query("UPDATE obat SET
                    nm_obat='$nm',jenis_obat='$sp',kategori='$almt',harga_obat='$telp',jml_obat='$tarif'
                    WHERE kd_obat='$id'") or die(mysql_error());
if ($sql){
    echo "<script>alert('Berhasil Update Obat');location.href='../../obat.php';</script>";
}else{
    echo "<script>alert('Error Update Obat');location.href='../../obat.php';</script>";
}
?>