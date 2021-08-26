<?php

try {
$pdo = new PDO('mysql:host=localhost;dbname=ajax', 'root', '');
$stmt = $pdo->prepare("UPDATE teste SET title = :title, body = :body WHERE id = :id");
$stmt->bindValue(':id', $_GET['id']);
$stmt->bindValue(':title', $_POST['title']);
$stmt->bindValue(':body', $_POST['body']);
$stmt->execute();
} catch (Exception $e) {
    "Erro: ".$e->getMessage();
}

exit();