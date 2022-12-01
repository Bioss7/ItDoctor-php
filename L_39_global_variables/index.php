<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>#39 Уроки PHP - Учим язык PHP, Глобальные переменные на языке PHP</title>
</head>
<body>
    <?
        // function sum() {
        //     global $var;
        //     $var = 2;
        //     return $var;
        // }

        // $var = 6;
        // echo "<br> $var <br>";
        // echo sum();
        // echo "<br> $var";


        // static сохраняет значение в переменной    
        // function sum() {
        //     static $count = 0;
        //     return ++$count;
        // }
        // echo sum() . "<br>";
        // echo sum() . "<br>";
        // echo sum() . "<br>";

        function formatSize($bytes) {
            $kbytes = $bytes / 1024;
            $mbytes = $kbytes / 1024;
            $gbytes = $mbytes / 1024;
            return [$bytes, $kbytes, $mbytes, $gbytes];
        }

        // list($bytes, $kbytes, $mbytes, $gbytes) = formatSize(54989777);
        $arr = formatSize(54989777);
        $bytes = $arr[0];
        $kbytes = $arr[1];
        $mbytes = $arr[2];
        $gbytes = $arr[3];
        echo "$bytes<br>$kbytes<br>$mbytes<br>$gbytes";
        


    ?>
</body>
</html>