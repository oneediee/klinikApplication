<?php
include "db_con.php";
$sql = mysql_query("SELECT * FROM obat");
while($a=mysql_fetch_array($sql)){
    echo "<option value='".$a['kd_obat']."'>".$a['nm_obat']."</option>";
}
?>