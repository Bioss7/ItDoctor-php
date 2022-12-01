<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Явное и неявное приведение типов на PHP</title>
</head>
<body>
    <?
        // неявное приведение
        $str = '45.2';
        $number = $str - 12;
        echo $number; // 33.2

        echo "<br>";

        $var = 0.0;
        if($var) {
            echo 'Перменная $var рассматирвается как true';
        } else {
            echo 'Перменная $var рассматирвается как false';
        }

        echo "<br>";

        // явное приведение
        $float = 4.3;
        $number = (int)$float;
        echo $number;

        echo "<br>";

        $num = 21;
        $f = (int)($num/2);
        echo "f:".$f;
        echo "<br>";
        $f = (float)($num/2) - (int)($num/2);
        if($f) {
            echo "Число нечетное";
        } else {
            echo "Число четное";
        }
    ?>
</body>
</html>