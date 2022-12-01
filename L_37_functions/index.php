<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Функции на языке PHP</title>
</head>
<body>
    <?
        // Параметры функции
        function myFunction($a, $b) {
            $sum = $a + $b;
            return $sum;
        }

        // Аргументы функции
        echo myFunction(2, 2);
    ?>
</body>
</html>