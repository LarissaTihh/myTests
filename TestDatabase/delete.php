<?php
$id = $_GET['id'];
$pdo = new PDO("mysql:host=localhost; dbname=test", "root", "");
$sql = 'DELETE FROM tasks WHERE id=:id';
$statement = $pdo->prepare($sql);
$statement->bindParam(":id", $sql);
$statement->execute();



header("Location: http://localhost/MyTests/TestDatabase/Tasks2/"); exit;