<?php
include "db_con.php";
    $sql = mysql_query("SELECT * FROM pasien");
    while($a=mysql_fetch_array($sql)){
        echo "<option value='".$a['nm_psn']."'>".$a['nm_psn']."</option>";
    }
?>