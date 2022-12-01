<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>#16 Уроки PHP - Учим язык PHP, Конкатенация строк на языке PHP</title>
</head>
<body>
    <?
        $num = 7;
        // $num = $num . '+5';
        $num .= '+5';
        echo 'Выводим на экран число ' . $num . ' другой текст';
    ?>
</body>
</html>