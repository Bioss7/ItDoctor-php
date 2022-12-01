<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Многомерные массивы</title>
</head>
<body>
    <?
        $transport = [
            'Авто' => ['Лада', 'Chevrolet', 'Dodge'],
            'Самолеты' => ['Ил-2', 'И-16', 'Мессершмидт'],
            'Корабли' => ['Авианосец', 'Фрегат', 'Эсминец']
        ];

        echo '<pre>'; print_r($transport); echo '</pre>';
        
        echo $transport['Самолеты']['2'];
    ?>
</body>
</html>