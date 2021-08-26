<?php 
$pdo = new PDO('mysql:host=localhost;dbname=ajax', 'root', '');
$stmt = $pdo->prepare('INSERT INTO users (user, password) VALUES (:user, :password)');
$stmt->bindValue(':user', $_POST['user']);
$stmt->bindValue(':password', md5($_POST['password']));
$stmt->execute();