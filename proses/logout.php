<?php
    include "db_con.php";
    session_start();
    session_unset();
    session_destroy();
    echo"<script>alert('Sign-Out Berhasil'); location='../index.php'</script>";
?>