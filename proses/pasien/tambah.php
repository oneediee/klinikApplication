<?php
include "db_con.php";
$a = $_POST['kd_psn'];
$b = $_POST['nm_psn'];
$c = $_POST['almt'];
$d = $_POST['gender'];
$e = $_POST['umur'];
$f = $_POST['telp'];

$sql = mysql_query("INSERT INTO pasien VALUES (
                    '$a','$b','$c','$d','$e','$f'
                    )") or die(mysql_error());
if ($sql){
    echo "<script>alert('Berhasil Menambah Pasien');location.href='../../pasien.php';</script>";
}else{
    echo "<script>alert('Error Menambah Pasien');location.href='../../pasien.php';</script>";
}
?>