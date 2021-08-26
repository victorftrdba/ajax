<?php

$pdo = new PDO('mysql:host=localhost;dbname=ajax', 'root', '');
$stmt = $pdo->prepare('DELETE FROM teste WHERE id = :id');
$stmt->bindValue(':id', $_GET['id']);
$stmt->execute();

exit();