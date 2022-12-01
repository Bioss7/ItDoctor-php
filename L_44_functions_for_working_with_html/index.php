<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>#44 Уроки PHP - Учим язык PHP, функции для работы с html htmlspecialchars и strip_tags</title>
</head>
<body>
    <?
        // $str = "text\nhello\nphp";
        // echo $str;
        // echo '<br><br>';
        // echo nl2br($str);


    ?>

    <form action="handler.php" method="post">
        Сообщение: <br>
        <textarea name="msg" id="" cols="50" rows="5"></textarea><br>
        <input type="submit" value="Добавить">
    </form>


    <!-- strip_tags удаляет все html теги -->
    <?
        $str = '<p>Обычный текст</p><br>
                <br>Жирный текст</br>';
                echo htmlspecialchars(strip_tags($str, '<p>'));
                
    ?>
</body>
</html>