<?php
require_once('db_connect.php');
require_once('back_login.php');

// back_login();

$id = $_GET['id'];

if (empty($id)) {
    header("Location: main.php");
    exit;
}

$pdo = db_connect();

try {
    $sql = "DELETE FROM books WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    header("Location: main.php");
    exit;
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
    die();
}
?>