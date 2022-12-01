<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>#46 Уроки PHP - Учим язык PHP, Работа с JSON на языке PHP</title>
</head>
<body>
    <?
        $arr = [
            'name' => 'Petr',
            'phones' => [
                '888',
                '777'
            ]
        ];
        // Cериализация превратить в JSON строку
        $encodeArr = json_encode($arr);
        echo $encodeArr;
        // JSON обьект в массив php, true получаем массив
        echo '<pre>';
        print_r(json_decode($encodeArr, true));
        echo '</pre>';
    ?>
</body>
</html>