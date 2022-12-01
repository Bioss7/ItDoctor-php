<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>#24 Уроки PHP - Учим язык PHP, Чтение из файла и запись в файл на PHP</title>
</head>
<body>
    <?
        $homepage = file_get_contents('text.txt');
        $homepage .= "\n\t Еще одна строка";
        $filename = date("d-m-Y-H-i-s").'.txt';
        file_put_contents($filename, $homepage);
    ?>
</body>
</html>