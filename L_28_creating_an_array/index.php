<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Создание массива и обращение к его элементам</title>
</head>
<body>
    <?
        // Первый способ создания массива
        // $arr = array('Hello', 'world', '!');
        // Создание массива через [] как в js
        // 15 => Указываем индекс
        $arr = [15 => 'Hello', 5 => 'world', '!'];
        echo $arr[0];

        echo "<pre>";
        print_r($arr);
        echo "</pre>";

        $arrStr[] = 'Hello';
        $arrStr[] = 'World';
        $arrStr[] = '!';

        echo "<pre>";
        print_r($arrStr);
        echo "</pre>";

        // Создание массива с преобразованием
        $var = "Hellow world!";
        $castArr = (array)$var;
        echo "<h1>castArr:</h1>";
        echo "<pre>";
        print_r($castArr);
        echo "</pre>";


        // Пустой массив
        echo "<h1>Пустой массив:</h1>";
        $arrNew[] = null;

        echo "<pre>";
        print_r($arrNew);
        echo "</pre>";

        echo "<h1>var_dump:</h1>";
        var_dump($arrNew);
    ?>
</body>
</html>