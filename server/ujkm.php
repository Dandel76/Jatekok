<?php
require_once "db.php";
$kategoria = $_GET['kategoria'];
echo "szerver oldalon megvan az adat: ".$kategoria;
$sql = "insert into kategoriak values (null,'{$kategoria}')";
$stmt = $db -> exec($sql);
echo $stmt

?>