<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>#42 Уроки PHP - Учим язык PHP, Работа со строками на языке PHP, функции strlen, chr, ord</title>
</head>
<body>
    <?
        // $str = 'Hello world';
        // echo $str[0];
        // echo "\u{0410}";

        // пробел, запятая, восклицательный знак это 1 байт, остается 21-3=18/2 = 9 символов русских
        // $str = "Привет, мир!";
        // echo strlen($str); // 21 длина
        // echo mb_strlen($str); // 12 длина

        // $str = "Hello";
        // for($i = 0; $i < strlen($str); $i++) {
        //     echo $str[$i] . "<br>";
        // }

        // Получение символа
        echo chr(36); // $
        echo ord("$"); // 36
    ?>
</body>
</html>