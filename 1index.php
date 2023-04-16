<!DOCTYPE html>
<html lang="en">
<head class = "headtxt">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Главная</title>
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
    <link rel="shortcut icon" type="x-icon" href="ic.png">
</head>
<body>
    <header class = "headertxt">
        <hl>Просто Список Пользователей</h1>
    </header>
    <nav class = "navtxt">
        <ul>
        <li>
            <a class="ssilka" href="1index.php" >Пользователи</a>
        </li>
        <li>
            <a class="ssilka" href="2reg.php">Регистрация</a>
        </li>
        <li>
            <a class="ssilka" href="3aut.php" >Авторизация</a>
        </li>
        <li>
            <a class="ssilka" href="4hid.php">Скрытая</a>
        </li>
        </ul>
    </nav>
    <main class = "maintxt">
        <div>
        Список позьзователей:
        
        </div>

        <?php
            require "0connect.php";
            $sql = "SELECT * FROM users";
            $query = $pdo -> prepare($sql);
            $query -> execute();


             
            while ($row = $query->fetch())
            {
                
                echo
                '<li>'
                .$row['login']. ' ';
                $ban = $row["isBan"];

                if ($ban == 0)
                {
                    echo 
                    '<form  method="post" action="Banning.php">
                    <input type="submit" name="ban" value="Заблокировать">
                    </form>';
                }
                else
                {echo 
                    '<form  method="post" action="Banning.php">
                    <input type="submit" name="unban" value="Разблокировать">
                    </form>';
                    
                }
                echo'
                </li>';
                
                
                 
            }
             

        ?>




    </main>
    <footer class = "footertxt">
        <br>
        <a class = "razlog" href = "./logout.php"> Разлогинитьсяㅤ</a>
        

    </footer>
</body>
</html>