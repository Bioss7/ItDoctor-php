<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>#49 Уроки PHP - Учим язык PHP, Работа с элементами формы checkbox, radio, select на PHP</title>
</head>
<body>
    <!-- <form action="checkbox.php" method="POST">
        <input type="checkbox" value="1" name="html" checked>Я знаком с HTML<br>
        <input type="checkbox" value="2" name="css">Я знаком с CSS<br>
        <input type="checkbox" value="3" name="js">Я знаком с JS<br>
        <input type="checkbox" value="4" name="php" checked>Я знаком с PHP<br>
        <input type="submit" value="Отправить">
    </form> -->

    <!-- <form action="select.php" method="POST">
        <select name="fst[]" multiple size="3">
            <option value="1" selected>Первый пункт</option>
            <option value="2">Второй пункт</option>
            <option value="3">Третий пункт</option>
        </select>
        <br>
        <select name="snd">
            <option value="one">Первый пункт</option>
            <option value="two">Второй пункт</option>
            <option value="three">Третий пункт</option>
        </select>
        <br>
        <input type="submit" value="Отправить">
    </form> -->

    <form action="radio.php" method="POST">
        <input type="radio" name="mark" value="1">1<br>
        <input type="radio" name="mark" value="2">2<br>
        <input type="radio" name="mark" value="3">3<br>
        <input type="radio" name="mark" value="4" checked>4<br>
        <input type="radio" name="mark" value="5">5<br>
        <input type="submit" value="Отправить">
    </form>
</body>
</html>