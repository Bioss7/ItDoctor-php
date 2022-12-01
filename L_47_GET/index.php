<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>#47 Уроки PHP - Учим язык PHP, Передача параметров методом GET на языке PHP</title>
</head>
<body>
    <!-- Метод GET ? -->
    <!-- GET параметры автоматически помещаются php в суперглобальный массив $_GET
    и имена параметров которые мы передавали, выступают в качестве ключей этого массива-->
    <!-- http://itdoctor/L_47_GET/?id=437 -->
    <!-- http://itdoctor/L_47_GET/?id=437&name=Tom&theme=dark -->
    <!-- http://itdoctor/L_47_GET/?id[]=437&id[]=2&name=Tom&theme=dark -->
    <?
        // echo '<pre>'; print_r($_GET); echo '</pre>';

        // echo "<a href='test.php?phrase=".urlencode("Привет, мир!")."'>Ссылка</a>";

        $url = 'http://user:pass@www.site.ru/path/index.php?par=value#anch';
        echo '<pre>';
        print_r(parse_url($url, PHP_URL_USER));
        echo '</pre>';
    ?>
</body>
</html>