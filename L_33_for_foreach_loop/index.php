<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Обход массива циклом for и foreach</title>
</head>
<body>
    <?
        $number = ['1', '2', '3', 'hello', true, 54];
        for($i = 0; $i < count($number); $i++){
            echo "$number[$i]<br>";
        }

        // Обход ассоциативного массива с помощью foreach
        $arr = [
            'auto' => 'Dodge',
            'plane' => 'IL-2',
            'Ship' => 'Black Pearl',
            "Null" => null
        ];

        echo '<pre>'; print_r($arr); echo '</pre>';
        echo '<br>';

        echo '<pre>';
        var_dump($arr);
        echo '</pre>';

        foreach($arr as $key => $value){
            echo "$key : $value <br>";
        } 

        foreach($arr as $key => $value){
            if(empty($value)){
                unset($key);
            }
            echo "$key : $value <br>";
        } 

        echo '<br>';

        $transport = [
            'Авто' => ['Лада', 'Chevrolet', 'Dodge'],
            'Самолеты' => ['Ил-2', 'И-16', 'Мессершмидт'],
            'Корабли' => ['Авианосец', 'Фрегат', 'Эсминец']
        ];

        foreach($transport as $key => $array) {
            echo "<b>$key</b><br>";
            // foreach($array as $value) {
            //     echo "<li>$value</li>";
            // }
            for($i=0; $i < count($array); $i++){
                echo "<li>$array[$i]</li>";
            }
        }   

    ?>
</body>
</html>