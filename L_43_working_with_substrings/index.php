<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>#43 Уроки PHP - Учим язык PHP, Работа с подстроками, функции substr, strpos, str_replace, trim</title>
</head>
<body>
    <?
        // $date = '01.01.2021';
        // echo 'день ' . substr($date, 0, 2) . '<br>';
        // echo 'месяц ' . substr($date, 3, 2) . '<br>';
        // echo 'день ' . substr($date, 6) . '<br>';

        // $date = 'Hello world';
        // echo strpos($date, 'world'); // первое вхождение подстроки индекс

        // $str = 'PHP - интерпретируемый язык';
        // echo substr($str, strpos($str, 'интер')); // интерпретируемый язык



        // $str = 'PHP - [b]интерпретируемый[/b] язык, а это [b]жирный текст[/b]';
        // echo $str . "<br>";

        // $str = str_replace('[b]', '<b>', $str);
        // $str = str_replace('[/b]', '</b>', $str);

        // $str = str_replace(['[b]', '[/b]'], ['', ''], $str, $number);
        // echo $str . "<br>";
        // echo "Осуществлен замен: " . $number;



        $str = '  Hello, world!   ';
        echo strlen($str);
        echo '<br>';
        // echo strlen(trim($str));
        echo trim($str, " H!");
    ?>
</body>
</html>