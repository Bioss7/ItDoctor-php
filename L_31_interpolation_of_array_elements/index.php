<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Интерполяция элементов массива</title>
</head>
<body>
    <?
        $arr[0] = 14;
        echo "Текст $arr[0] и еще текст<br>";

        $arrNew['one'] = 14;
        echo "Текст $arrNew[one] и еще текст<br>";

        $arrNewMulti[0][0] = 14;
        echo "Текст {$arrNewMulti[0][0]} и еще текст<br>";
        echo "Текст " . $arrNewMulti[0][0] . " и еще текст<br>";

        $arrNewStr['one'][0] = 14;
        echo "Текст " . $arrNewStr['one'][0] . " и еще текст<br>";
        echo "Текст {$arrNewStr['one'][0]} и еще текст<br>";
    ?>
</body>
</html>