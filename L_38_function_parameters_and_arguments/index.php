<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Параметры и аргументы функций на языке PHP</title>
</head>
<body>
    <?
        // function sum(int $a, int $b) : int {
        //     return $a + $b;
        // }

        // Передача параметров по ссылке и по значению
        // объекты и массивы по ссылке по умолчанию
        // function sum(&$a) {
        //     $a = $a + 10;
        //     return $a;
        // }

        // По умолчанию
        // function sum($a, $b = 10) {
        //     return $a + $b;
        // }

        // Количество неизвестных параметров
        // function outArguments(...$items) {
        //     foreach($items as $arg) {
        //         echo "$arg<br>";
        //     }
        // }

        // outArguments('PHP', 'JS', 'C++', 'Python');

        function outArguments($a, $b, $c, $d) {
            echo "$a<br>";
            echo "$b<br>";
            echo "$c<br>";
            echo "$d<br>";
        }

        $items = ['PHP', 'JS', 'C++', 'Python'];
        outArguments(...$items);

    ?>
</body>
</html>