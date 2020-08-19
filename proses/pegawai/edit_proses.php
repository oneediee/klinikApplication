<?php
include "db_con.php";
$a = $_POST['kd_peg'];
$b = $_POST['nm_peg'];
$c = $_POST['user'];
$d = $_POST['pass'];
$e = $_POST['status'];

$sql = mysql_query("UPDATE pegawai SET
                    nm_peg='$b',username='$c',password='$d',status_peg='$e'
                    WHERE kd_peg='$a'") or die(mysql_error());
if ($sql){
    echo "<script>alert('Berhasil Menambah Pegawai');location.href='../../pegawai.php';</script>";
}else{
    echo "<script>alert('Error Menambah Pegawai');location.href='../../pegawai.php';</script>";
}
?>