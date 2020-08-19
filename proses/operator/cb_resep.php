<?php
include "db_con.php";
$sql = mysql_query("SELECT * FROM resep");
while($a=mysql_fetch_array($sql)){
    echo "<option value='".$a['noResep']."'>".$a['noResep']."</option>";
}
?>