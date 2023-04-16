<?php
    session_start();
    require "0connect.php";
    try{
        $request = "INSERT INTO tasks(login, task, id, isDone) VALUES (?,?,?,?)";
        
        $taskforid = $_POST['task'].$_SESSION['login'];
         

        $result = $pdo->prepare($request);
        $result->execute([$_SESSION['login'], $_POST['task'], $_POST['id'], 0]);
    }
    catch(Exception $ex)
    {
        echo "<h1>".$_SESSION['login']."</h1>";
    }

    header("Location: 4hid.php");
?>