<?php 
$pdo = new PDO('mysql:host=localhost;dbname=ajax', 'root', '');
$stmt = $pdo->prepare('SELECT * FROM users WHERE user = :user');
$stmt->bindValue(':user', $_POST['user']);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_OBJ);

if($result->user && $result->password === md5($_POST['password'])) {
    session_start();
    $_SESSION['user'] = $result->user;
    header("Location: show.php");
} else {
    header("Location: login.php");
}

?>