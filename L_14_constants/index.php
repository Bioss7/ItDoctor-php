<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Константы на языке PHP</title>
</head>
<body>
    <?
        // Создание своей константы 
        // if(define('NUMBER', 1)) {
        //     echo 'Константа NUMBER  успешна создана и имеет значение 1';
        // }
        // if(defined('NUMBER')) {
        //     echo 'Константа уже создана';
        // }

        // $num = mt_rand(1, 10);
        // $name = "VALUE($num)";
        // define($name, $num);
        // echo constant($name);

        echo 'Имя файла ' . __FILE__ . '<br>';
        echo 'Строка ' . __LINE__ . '<br>';
    ?>
</body>
</html>