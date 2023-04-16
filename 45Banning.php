<?php
    require('0connect.php');
    $pdo = pdo();
    if (isset($_POST['ban'])) {
        $id = $_POST['id'];
        $sql = "UPDATE users SET ban = 1 WHERE id = :id";
        $query = $pdo->prepare($sql);
        $query->execute(['id' => $id]);
    } 
    else 
    {

        $id = $_POST['id'];
        $sql = "UPDATE users SET ban = 0 WHERE id = :id";
        $query = $pdo->prepare($sql);
        $query->execute(['id' => $id]);
    }
    header("Location: 1index.php");
?>