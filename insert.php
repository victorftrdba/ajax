<?php

try {
$pdo = new PDO('mysql:host=localhost;dbname=ajax', 'root', '');
$stmt = $pdo->prepare("INSERT INTO teste (title, body) VALUES (:title, :body)");
$stmt->bindValue(':title', $_POST['title']);
$stmt->bindValue(':body', $_POST['body']);
$stmt->execute();
} catch (Exception $e) {
    "Erro: ".$e->getMessage();
}

exit();