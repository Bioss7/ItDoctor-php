<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>#17 Уроки PHP - Учим язык PHP, Арифметические операторы на языке PHP</title>
</head>
<body>
    <?
        echo 4**2; // возведение в степень
        echo '<br>';
        echo 8 % 3; // остаток от деления, деление по модулю
        echo '<br>';
        echo (int) (8 / 3); // целое число
        echo '<br>';

        if(8 % 2) echo 'Число не четное';
        else echo 'Число четное';

        echo '<br>';

        $var = 3;
        echo ++$var;
        echo '<br>';
        echo $var;
    ?>
</body>
</html>