<!DOCTYPE html>
<html lang="en">
<head class = "headtxt">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title><?= $title ?></title>
    <link rel="shortcut icon" type="x-icon" href="ic.png">
    <?= $hed ?>
</head>
<body>
    <header class = "headertxt">
        <hl><?= $page_title ?></h1>
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
        <?= $content ?>
        </div>
    </main>
    <footer class = "footertxt">
        
        <?= $futer ?>

    </footer>
</body>
</html>