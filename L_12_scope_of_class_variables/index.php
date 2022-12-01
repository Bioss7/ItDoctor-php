<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Области видимости переменных класса</title>
</head>
<body>
    <?
        require 'point.php';
    
        // Получение static переменной
        echo Point::$num;
        echo "<br>";

        $first = 5;
        $second = &$first;
        $second = 3;
        echo $first;    
        echo "<br>";  

        $first = new Point();
        $first->x = 3;
        $first->y = 3;

        $second = $first;
        $second->x = 5;
        $second->y = 5;

        echo "x: {$first->x}, y: {$first->y}";
    ?>
</body>
</html>