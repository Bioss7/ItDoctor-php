<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>#34 Уроки PHP - Учим язык PHP, Слияние и сравнение массивов на языке php</title>
</head>
<body>
    <?
        // Слияние array_merge
        $first = ['red', 'blue'];
        $second = ['brown', 'green'];
        $con = array_merge($first, $second);
        echo "<pre>";   
        print_r($con);
        echo "</pre>";   

        if($first == $second) {
            echo 'Массивы равны<br>';
        } else {
            echo 'Массивы не равны<br>';
        }
    ?>
</body>
</html>