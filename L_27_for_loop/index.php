<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Цикл for</title>
</head>
<body>
    <?
        for($i=0; $i<5; $i++){
            echo "$i<br>";
        }

        echo "<br>";

        for($i=5; $i>0; $i--){
            echo "$i<br>";
        }

        echo "<br>";

        for($i=5, $j=0; $i>0, $j<5; $i--, $j++){
            echo "$i - $j<br>";
        }

        echo "<br>";

        // Простые числа делятся на 1 и на самих себя 
        for($i = 2; $i < 100; $i++){
            for($j=2; $j<$i; $j++){
                if(($i % $j) != 0){
                    continue;
                } else {
                    $flag = true;
                    break;
                }
            }
            if(!$flag) echo "$i ";
            $flag = false;
        }
    ?>
</body>
</html>