<!DOCTYPE html>
<html lang="en">
<head class = "headtxt">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Ваш список делов</title>
    <?php
    session_start();
    if($_SESSION == null)
    {
        header('Location: 3aut.php');
    }

    ?>
    <link rel="shortcut icon" type="x-icon" href="ic.png">
</head>
<body>
    <header class = "headertxt">
        <hl><?php echo $_SESSION["login"].', ваш туду лист'; ?></h1>
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
                <form action="41AddTask.php" method="post">
            <input name ="task" autocomplete="off" class="AddInp"/>
            <input type="submit" value="Добавить дело" class="button" name="AddButton" />
            <br>
        </form>
        <!-- <a href="41AddTask.php"> add </a> -->

        <form action="" method="post" id="r1" name="form1">
                    <div class="ContentTasks">
                        <ul>
                            <?php
                                 require "0connect.php";

                                $request = "SELECT * FROM tasks WHERE login = ?";

                                $result = $pdo->prepare($request);
                                $result->execute([$_SESSION['login']]);


                                while($row = $result->fetch())

                                {
                                    echo
                                    '<li>
                                    <div class ="delo"> 
                                        '
                                        .$row['task'].
                                        ' 
                                        <a href ="43ChangeTask.php?id='.$row['id'].'?task='.$row['task'].'"> <input type="button" value="&#9998"/> </a> 
                                        
                                        <a href ="42DeleteTask.php?id='.$row['id'].'"><input type="button" value="&#128465"/></a> 
                                        
                                    </div>
                                    
                                    
                                    
                                    </li>';
                                }

                            ?>
                        
                        </ul>
                    </div>
        </form>

        </div>
    </main>
    <footer class = "footertxt">
        <br>
        <a class = "razlog" href = "./logout.php"> Разлогинитьсяㅤ</a>
    </footer>
</body>
</html>