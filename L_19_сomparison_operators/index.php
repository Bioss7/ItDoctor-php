<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>#19 Уроки PHP - Учим язык PHP, Операторы сравнения на языке PHP</title>
</head>
<body>
    <?
        // $x = 1;
        // $y = '1';
        // echo $x < $y;
        // echo $x <= $y;
        // echo $x > $y;
        // echo $x >= $y;
        // echo $x == $y;
        // echo $x != $y;
        // echo $x <> $y;
        // echo $x === $y;
        // echo $x !== $y;
        // echo $x <=> $y;

        echo 1 > 0;         // true
        echo 1 > 1;         // false
        echo 1 >= 1;        // true
        echo 1 < 0;         // false
        echo 1 < 1;         // false
        echo 1 <= 1;        // true
        echo 1 == 0;        // false
        echo 1 == 1;        // true
        echo 1 != 0;        // true
        echo 1 != 1;        // false
        echo 0 == '8qes';   // false
        echo 0 == '';       // true
        echo 0 == 'Hello';  // true
        echo 0 == null;     // true
    ?>
</body>
</html>