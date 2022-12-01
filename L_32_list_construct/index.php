<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Конструкция list и как поменять местами значения переменных</title>
</head>
<body>
    <?
        // list Преобразует в переменные, работает только с индексом
        $arr = [1,2,3];
        list($one, $two, $three) = $arr;
        echo $one . "<br>";
        echo $two . "<br>";
        echo $three . "<br>";

        $x = 5; 
        $y = 3;

        echo "до:<br>";
        echo "x: $x<br>";
        echo "y: $y<br>";

        // Поменяли местами переменные
        list($y, $x) = [$x, $y];

        echo "После:<br>";
        echo "x: $x<br>";
        echo "y: $y<br>";

    ?>
</body>
</html>