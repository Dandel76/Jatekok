
<?php
require_once 'db.php';
$sql = "SELECT jatekok.id, cím, szerző, kategoriak.kategoria , jatekok.kategoria_id FROM jatekok INNER JOIN kategoriak ON kategoria_id=kategoriak.id";
$stmt = $db->query($sql);
echo json_encode($stmt->fetchAll());

?>