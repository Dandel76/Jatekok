<?php
require_once 'db.php';
if(isset($_GET['id'])){
    $sql = "SELECT cím, szerző, kategoriak.kategoria FROM jatekok INNER JOIN kategoriak ON kategoria_id=kategoriak.id WHERE jatekok.kategoria_id = {$_GET['id']}";
}else{
    $sql = "SELECT cím, szerző, kategoriak.kategoria FROM jatekok INNER JOIN kategoriak ON kategoria_id=kategoriak.id";
}
$stmt = $db->query($sql);
echo json_encode($stmt->fetchAll());

?>