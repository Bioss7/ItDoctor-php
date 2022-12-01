<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>#52 Уроки PHP - Учим язык PHP, Методы класса на языке PHP</title>
</head>
<body>
    <?
        // class Hello {
        //     public function printText() {
        //         return "Привет, мир!";
        //     }
        // }

        // $obj = new Hello;
        // echo $obj->printText();

        // class Point {
        //     private $x;
        //     private $y;
            
        //     public function setX($x) {
        //         $this->x = $x;
        //     }

        //     public function setY($y) {
        //         $this->y = $y;  
        //     }

        //     public function getX() {
        //         return $this->x;
        //     }

        //     public function getY() {
        //         return $this->y;
        //     }

        //     public function distance() {
        //         return sqrt($this->getX()**2 + $this->getY()**2);
        //     }
        // }

        // $p1 = new Point;
        // $p1->setX(5);
        // $p1->setY(7);
        // echo $p1->distance();

        // class Hello {
        //     public static function printText() {
        //         return "Привет, мир!";
        //     }
        // }

        // echo Hello::printText();    

        class Page {
            static $content = 'Тело сайта<br>';
            public static function footer() {
                return 'Это подвал сайта<br>';
            }
            public static function header() {
                return 'Это шапка сайта<br>';
            }
            public static function site() {
                echo self::header() . self::$content . self::footer();
            }
        }

        Page::site();


    ?>
</body>
</html>