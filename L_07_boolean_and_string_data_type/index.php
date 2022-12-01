<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>#7 Уроки PHP - Учим язык PHP, Логический и Строковый тип данных на PHP</title>
</head>
<body>
    <?
        $bool = true;
        $bool = false;
        $var = 5; 
        $str = "Hello world! $var";
        echo $str . '<br>'; 
        // Вывести как текст "экранирование" с помощью \
        $str = "Hello world! \$var"; 
        echo $str . '<br>';
        echo "Hello world! \"$var\"";
        echo "<br>";
        echo "Hello world! {$var}3"; 

        // Команды
        echo `dir`;
    ?>
</body>
</html>