<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>#22 Уроки PHP - Учим язык PHP, Тернарный условный оператор на PHP</title>
</head>
<body>
    <?
        // выражение1 ? выражение2 : выражение3
        // $x = -450;
        // $x = $x < 0 ? -$x : $x;
        // echo $x;
        $n = 0;

        finish: 
        $y = null;
        $y = $y ?? 1; // проверяем на null
        echo $y;
        $n++;
        if($n > 5) {
            goto end;
        }

        goto finish;
        end:

       
    ?>
</body>
</html>