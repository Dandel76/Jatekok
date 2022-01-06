<?php
require_once 'db.php';
$sql = "SELECT kategoria, id FROM kategoriak";
$stmt = $db->query($sql);
echo json_encode($stmt->fetchAll());

?>