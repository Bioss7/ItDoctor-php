<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>#36 Уроки PHP - Учим язык PHP, Решаем задачи на понимание массивов на языке PHP</title>
</head>
<body>
    <?
        // $array = ['red', 'green', 'blue', 'violet', 'gray'];
        // echo $array[rand(0, count($array)-1)];



        // $length = rand(5, 10);
        // $array = [];
        // for($i=0; $i<$length; $i++) {
        //     $array[$i] = rand(0, 100);
        // }
        // sort($array);
        // echo '<pre>'; print_r($array); echo '</pre>';



        $array = file('month.txt');  
        echo '<pre>'; print_r($array); echo '</pre>';


        
    ?>
</body>
</html>