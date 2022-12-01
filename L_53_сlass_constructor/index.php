<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>#53 Уроки PHP - Учим язык PHP, Конструктор класса на языке PHP</title>
</head>
<body>
    <?
        // class People {
        //     private $name;
        //     public function __construct()
        //     {
        //         echo 'Вызов конструктора';
        //         $this->name = 'Ivan';
        //     }
        // }

        // $obj = new People();
        // echo '<pre>'; print_r($obj); echo '</pre>';


        // class Point {
        //     private $x;
        //     private $y;
        //     public function __construct($x = 0, $y = 0) {
        //         $this->x = $x;
        //         $this->y = $y;
        //     }

        // }

        // $obj = new Point(10, 20);
        // echo '<pre>'; print_r($obj); echo '</pre>';

        class Point {
            private $x;
            private $y;

            public function __construct($x = 0, $y = 0) {
                $this->x = $x;
                $this->y = $y;
            }

            public function __toString() {
                return "({$this->x}, {$this->y})";
            }
        }

        $obj = new Point(10, 20);
        echo "{$obj}";
    ?>
</body>
</html>