<?php
require_once "db.php";
$id=$_GET['id'];
$cím=$_GET['cím'];
$szerző=$_GET['szerző'];
$kategoria_id=$_GET['kategoria_id'];
$sql="Update jatekok set cím='{$cím}', szerző='{$szerző}', kategoria_id='{$kategoria_id}' where id ={$id};";
$stmt = $db->exec($sql);
if($stmt)
    echo "sikeres módosítás";
else
    echo "nem sikerült a módosítás"
?>