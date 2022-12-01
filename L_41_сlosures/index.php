<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>#41 Уроки PHP - Учим язык PHP, Замыкания и задачи на понимание функций на языке PHP</title>
</head>
<body>
    <?
        // Замыкание работает только в анонимных функциях  
        // $message = "Текстовое сообщение";
        // $mFu = function() use ($message) {
        //     echo $message;
        // };
        // $mFu();

        // $message = "Текстовое сообщение";
        // $mFu = function() use ($message) {
        //     $message = "New";
        //     return $message;
        // };
        // echo $mFu();
        // echo "<br>";
        // echo $message;

        // function odd(int $number) {
        //     if($number % 2 == 0) {
        //         return false; // пустая строка
        //     } else {
        //         return true; // 1
        //     }
        // }
        // echo odd(4);

        // function odd(int $number): bool {
        //     return $number % 2 == 0;
        // }
        // echo odd(5);

        function sum(...$items) {
            $sum = 0;
            for($i = 0; $i < count($items); $i++) {
                $sum += $items[$i];
            }
            return $sum;
        }

        echo sum(2, 3, 5);
    ?>
</body>
</html>