<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>#15 Уроки PHP - Учим язык PHP, Константы класса и путь к файлу на PHP</title>
</head>
<body>
    <?
        echo 'Путь к файлу ' . __DIR__ . '<br>';
        // .. позволяют выйти на каталог выше 
        require_once  __DIR__ . '/../L_13_distance_between_two_points/point.php';

        $p1 = new Point();
        $p1->x = 10;
        $p1->y = 34;

        $p2 = new Point();
        $p2->x = 3;
        $p2->y = 10;

        $distance = sqrt((pow(($p2->x-$p1->x), 2) + pow(($p2->y-$p1->y), 2)));
        echo $distance;

        class ConstClass {
            const NAME = "str";
        }

        if(defined('ConstClass::NAME')) {
            echo "Константа определена";
        } else {
            echo "Константа не определена";
        }

        
    ?>
</body>
</html>