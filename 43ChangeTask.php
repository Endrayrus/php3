<?php
echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style2.css" rel="stylesheet" type="text/css">
    <title>Изменение</title>
    <link rel="shortcut icon" type="x-icon" href="ic.png">
</head>

<body>
        <div class="chdel"><form action="" class="frm" method="post">
            <div>
            <label>Напишите новое дело:
                <input name = "taskNew" class="vvod" type = "text" value="'.$_GET['task'].'"/>
            <input type="submit" class="button" name = "save" value="Сохранить изменение""/>
        </label></div>
        </form></div>
</body>
</html>';


if(isset($_POST["save"]))
{
require "./0connect.php";
$request = "UPDATE tasks SET task = ? WHERE id = ?";

$result = $pdo->prepare($request);
$result->execute([$_POST['taskNew'], $_GET['id']]);
header("Location: 4hid.php");
}
