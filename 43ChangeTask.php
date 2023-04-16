<?php
require "0connect.php";
$request = "UPDATE tasks SET task = ? WHERE id = ?";

$result = $pdo->prepare($request);
$result->execute([$_GET['id'], $_GET['task']]);
header("Location: 4hid.php");
?>