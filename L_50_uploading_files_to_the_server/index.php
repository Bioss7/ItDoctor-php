<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>#50 Уроки PHP - Учим язык PHP, Загрузка файлов на сервер на языке PHP</title>
</head>
<body>
    Форма для загрузки файлов
    <form action="script.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="filename">
        <input type="submit" value="Отправить">
    </form>
</body>
</html>