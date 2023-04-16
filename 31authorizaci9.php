<?php

    if (isset($_POST["submitCreate"]))
    {   
        require("0connect.php");
        
        $login = $_POST["textLog"];
        //$password = $_POST["textPass"];
        $password = md5($_POST["textPass"]);

        $request = "SELECT * FROM users WHERE login = ? AND password = ? AND isBan is NULL";

        $result = $pdo->prepare($request);

        $result ->execute([$login, $password]);

        if ($row = $result -> fetch())
        {
            session_start();
            $_SESSION['login'] = $row['login'];

            header("Location: 4hid.php");
        }
        else
        {
            echo 'Invalid user';
            // header("Location: 3aut.php");
        }
    }


?>