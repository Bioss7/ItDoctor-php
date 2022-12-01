<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Условный оператор if</title>
</head>
<body>
    <?
        // $char = 'php';
        // if($char == 'php') {
        //     echo "Язык php";
        // } elseif ($char == "js"){
        //     echo "Язык js";
        // } elseif ($char == "c#"){
        //     echo "c#";
        // } else {
        //     echo "Неизвестный язык";
        // }
    ?>

    <?        
        $char = 'php';
        if($char == 'php') { ?>
            <h1>Язык php</h1>
        <?} elseif ($char == "js"){?>
            <h1>Язык js</h1>
        <?} elseif ($char == "c#"){?>
            <h1>Язык c#</h1>
        <?} else {?>
            <h1>Неизвестный язык</h1>
        <?}
    ?>
            

</body>
</html>