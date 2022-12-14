<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>#54 Уроки PHP - Учим язык PHP, Наследование и перегрузка методов на языке PHP</title>
</head>
<body>
    <?
        class Animal {
            protected $legs = 4;
            public function info() {
                echo "У меня {$this->legs} лапы.";
            }
        }

        class Dog extends Animal {
            public $name = "Собака";

            public function info() {
                echo "Я {$this->name}, У меня {$this->legs} лапы.";
            }

            public function voice() {
                echo "{$this->name} издает звук гав-гав.";
            }

            public function parentInfo() {
                parent::info();
            }
        }

        class Cat extends Animal {
            public $name = "Кошка";
            public function voice() {
                echo "{$this->name} издает звук мяу.";
            }
        }

        $dog = new Dog();
        // $dog->info();
        // $dog->voice();
        $dog->parentInfo();
    ?>
</body>
</html>