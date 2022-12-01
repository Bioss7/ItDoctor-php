<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>#48 Уроки PHP - Учим язык PHP, Валидация формы и отправка параметров методом POST</title>
</head>
<body>
    <form method="GET" action="">
        <input type="text" name="first"><br>
        <input type="text" name="second"><br>
        <input type="submit" name="Отправить"><br>
    </form>
    <?
        if(!empty($_GET['first']) && !empty($_GET['second'])) {
            echo '<pre>'; print_r($_GET); echo '</pre>';
        } else {
            exit('Текстовые поля не заполнены');
        }
    ?>
</body>
</html>