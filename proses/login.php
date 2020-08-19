<?php
    include "db_con.php";
    $username = $_POST['user'];
    $password = $_POST['pass'];
    $query = mysql_query("select * from pegawai WHERE username='$username' and password='$password'") or die(mysql_error());
    
        $fet = mysql_fetch_array($query);
        if($fet['username'] == $username && $fet['password'] == $password){
            $aks = $fet['status_peg'];
            $nama = $fet['nm_peg'];
            if($aks == "administrator"){
                session_start();
                $_SESSION['status_peg'] = $aks;
                $_SESSION['nm_peg'] = $nama;
                header("location:../admin.php");
            }elseif ($aks == "apoteker"){
                session_start();
                $_SESSION['status_peg'] = $aks;
                $_SESSION['nm_peg'] = $nama;
                header("location:../detailpasien.php");
            }else{
                echo "<script>alert('Anda Tidak Punya Hak Akses Untuk Ini');location.href='../index.php';</script>";
            }
        }else{
            echo "<script>alert('Username dan Password Tidak Valid');location.href='../index.php';</script>";
        }
    
?>