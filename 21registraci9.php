<?php
    
    if (isset($_POST["submitCreate"]))
    {   
        require("0connect.php");
        
        $login = $_POST["textLog"];
        //$password = $_POST["textPass"];
        $password = md5($_POST["textPass"]);

        $request = "INSERT INTO users(login, password) VALUES (?, ?)";

        $result = $pdo->prepare($request);
        try
        {

            $result ->execute([$login, $password]);

            if ($result)
            {
                header("Location: 3aut.php");
            }
            else 
            {
                echo "Введите значения";
            }
        }
        catch(Exception $e)
        {
            echo 'Login is already takes';
            

        }
    }
    

?>