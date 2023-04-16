<?php
    require('0connect.php');
    $pdo = pdo();
    if (isset($_POST['ban'])) {
        $id = $_POST['id'];
        $request = "UPDATE users SET isBan = 1 WHERE id = :id";
        $query = $pdo->prepare($request);
        $query->execute(['id' => $id]);
    } 
    else 
    {

        $id = $_POST['id'];
        $request = "UPDATE users SET siBan = 0 WHERE id = :id";
        $query = $pdo->prepare($request);
        $query->execute(['id' => $id]);
    }
    header("Location: 1index.php");
?>