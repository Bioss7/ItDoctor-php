<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Базовые функции языка PHP</title>
</head>
<body>
    <?
        $user = "Ivan";
        // Переменная существует, проверить есть ли значение у переменной 
        if(isset($user)) {
            echo "Переменная существует";
        } else {
            echo "Переменная не существует";    
        }

        echo "<br>";

        $str = "";
        if(empty($str)) {
            echo "Строка пустая";
        } else {
            echo "В строке что то есть";
        }

        echo "<br>";

        // Проверка типа переменной
        echo gettype(123);

        echo "<br>";
        // Проверить принадлежность к типу
        if(is_int(1)) {
            echo "Это число";
        } else {
            echo "Это не число";
        }



    ?>
</body>
</html>