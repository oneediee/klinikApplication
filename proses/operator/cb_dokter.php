<?php
include "db_con.php";
$sql = mysql_query("SELECT * FROM dokter");
while($a=mysql_fetch_array($sql)){
    echo "<option value='".$a['nm_dkt']."'>".$a['nm_dkt']."</option>";
}
?>