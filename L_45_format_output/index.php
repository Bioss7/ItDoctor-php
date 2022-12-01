<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>#45 Уроки PHP - Учим язык PHP, форматный вывод, функции printf, explode, implode</title>
</head>

<body>
    <?
    // printf("Первое число - %d<br /", 26);

    // $number = 5867;
    // printf('Двоичное число : %b<br />', $number);
    // printf('Десятичное число : %d<br />', $number);
    // printf('Число с плавающей точкой : %f<br />', $number);
    // printf('Восьмеричное число : %o<br />', $number);
    // printf('Строковое представление : %s<br />', $number);
    // printf('Шестнадцатеричное число (нижний регистр) : %x<br />', $number);
    // printf('Шестнадцатеричное число (верхний регистр) : %X<br />', $number);

    // echo "<br>";

    // $red = 255;
    // $green = 255;
    // $blue = 100;
    // printf('#%X%X%X', $red, $green, $blue); // #FFFF64

    // echo "<br>";

    // echo '<pre>';
    // printf('%4.2f', 454.54678);
    // echo '<br>';
    // printf('%.4f', 45.99774);
    // echo '</pre>';

    // Разбили строку
    // $str = 'Имя, Фамилия, e-mail';
    // echo '<pre>';
    // print_r(explode(', ', $str, 2));
    // echo '</pre>';

    // Объединили строку
    $arr = ['Имя', 'Фамилия', 'e-mail', 'Номер'];
    echo implode(', ', $arr);
    ?>
</body>

</html>