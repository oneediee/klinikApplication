<?php
include "db_con.php";
$a = $_POST['kd_peg'];
$b = $_POST['nm_peg'];
$c = $_POST['user'];
$d = $_POST['pass'];
$e = $_POST['status'];

$sql = mysql_query("INSERT INTO pegawai VALUES (
                    '$a','$b','$c','$d','$e'
                    )") or die(mysql_error());
if ($sql){
    echo "<script>alert('Berhasil Menambah Pegawai');location.href='../../pegawai.php';</script>";
}else{
    echo "<script>alert('Error Menambah Pegawai');location.href='../../pegawai.php';</script>";
}
?>