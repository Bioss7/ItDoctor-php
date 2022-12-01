<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=   , initial-scale=1.0">
    <title>#23 Уроки PHP - Учим язык PHP, Переключатель switch на языке PHP</title>
</head>
<body>
    <?
        $char = 'c#';
        switch($char) {
            case 'php': ?>
                <h1>Язык PHP</h1>
            <? break;
            case 'js': ?>
                    <h1>Язык JS</h1>
            <? break;
             case 'c#': ?>
                <h1>Язык C#</h1>
            <? break;
            default: ?>
            <h1>Неизвестный человечеству язык</h1>
            <?
        }

        $number = 1200;
        switch(true) {
            case($number > 0 && $number <=10):
                echo "$number меньше 10 и больше 0";
                break;
            case($number > 10 && $number <=100):
                echo "$number меньше 100 и больше 10";
                break;
            case($number > 100 && $number <=1000):
                echo "$number меньше 1000 и больше 100";
                break;
            default:
                echo "$number больше 1000 или меньше 0";
            break;
        }
    ?>
</body>
</html>