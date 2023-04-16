<?php
require "0connect.php";
$request = "DELETE FROM tasks WHERE id = ?";

$result = $pdo->prepare($request);
$result->execute([$_GET['id']]);

header("Location: 4hid.php");
?>