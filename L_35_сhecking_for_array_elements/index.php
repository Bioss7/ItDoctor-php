<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>#35 Уроки PHP - Учим язык PHP, Проверка существования и удаление элементов массива на языке PHP
</title>
</head>
<body>
    <?
        $arr = [5 => 1, 2, 3];
        // Проверка isset существования переменной 
        for($i = 0; $i < 10; $i++) {
            if(isset($arr[$i])) {
                echo "Элемент \$arr[$i] существует<br>";
            } else {
                echo "Элемент \$arr[$i] не существует<br>";
            }
        }

        // Проверка массива 
        if(is_array($arr)) {
            echo 'Это массив<br>';
        } else {
            echo 'Это не массив<br>'; // $arr[5])
        }

        // Проверка числа в массиве
        $arr = [5 => 1, 2, 3];
        if(in_array(2, $arr, true)) { // true проверка типа 
            echo 'Значение 2 найдено в массиве arr<br>';
        } else {
            echo 'Значение 2 не найдено в массиве arr<br>'; 
        }

        // Проверка ключа в массиве
        if(array_key_exists(5, $arr)) { 
            echo 'Ключ 5 найдено в массиве arr<br>';
        } else {
            echo 'Ключ 5 не найдено в массиве arr<br>'; 
        }

        // Поиск индекса по значению
        echo array_search(2, $arr);
        echo "<br>";
        echo array_search(5, $arr);

        // Удаление элементов массива 
        $arr = [5 => 1, 2, 3];
        unset($arr[6]);
        echo '<pre>'; 
        print_r($arr); 
        echo '</pre>';
        

    ?>

</body>
</html>