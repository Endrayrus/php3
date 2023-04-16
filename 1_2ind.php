<?php
    session_start();
    if($_SESSION == null)
    {
        header('Location: 3aut.php'); 
    }

    


    if (isset($_SESSION['login'])) 
    { 
        if ($_SESSION['login'] != "admin") 
        {
            header('Location: 3aut.php');
        }
        
         
    }




    ?>