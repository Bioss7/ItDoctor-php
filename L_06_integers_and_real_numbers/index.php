<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>#6 Уроки PHP - Учим язык PHP, Целые и вещественные числа</title>
</head>
<body>
    <?
        $num = 1234;
        $num = -12;
        $num = 012; // Восьмеричная система счисления
        $num = 0x12A; // Шестнадцатеричная система счисления
        echo $num . '<br>';
        // Вещественные числа
        $var = 1.23456;
        // Экспоненциальная запись числа (число * 10 в -3 степени)
        $var = 1.23456e-3;
        echo $var;
    ?>
</body>
</html>