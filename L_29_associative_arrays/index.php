<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ассоциативные массивы</title>
</head>
<body>
    <?
        // Ассоциативные массивы, в качестве индексов массива могут быть не только числа, но и строки, 
        // в таком случае массив называется ассоциативным, а его индексы называются ключами
        $arr = ['one'=>'1', 'two'=>'2'];
        echo '<pre>'; print_r($arr); echo '</pre>';
        echo '<br>';
        echo $arr['one'];
        echo $arr['two'];
        echo "<br>";

        $newArr['one'] = '1';
        $newArr['One'] = '1';
        $newArr['two'] = '2'; // Перезаписало значение 
        $newArr['two'] = '3';
        echo '<pre>'; print_r($newArr); echo '</pre>';
    ?>
</body>
</html>