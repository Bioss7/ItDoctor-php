<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>#55 Уроки PHP - Учим язык PHP, abstract и final классы и методы на языке PHP</title>
</head>

<body>
    <?
        // Не можем создавать объекты данного класса, но мы можем от него наследоваться 
        // final запрет на переопределение метода, запрет наследования класса 

use Animal as GlobalAnimal;

        abstract class Animal
        {
            protected $legs = 4;

            public function info()
            {
                echo "У меня {$this->legs} лапы.";
            }

            // abstract public function color();
        }

        class Dog extends Animal {
            public function color() {
                echo "red";
            }
            public $name = "Собака";

            public function info()
            {
                echo "Я {$this->name}, У меня {$this->legs} лапы.";
            }

            public function voice()
            {
                echo "{$this->name} издает звук гав-гав.";
            }

            public function parentInfo()
            {
                parent::info();
            }
        }

        class Cat extends Animal {
            public function color() {
                echo "black";
            }
            public $name = "Кошка";
            public function voice()
            {
                echo "{$this->name} издает звук мяу.";
            }
        }


        $dog = new Dog();
        $cat = new Cat();

        if($dog instanceof Animal) {
            echo "Dog является экземпляром класса Animal";
        }

        if($dog instanceof Dog) {
            echo "Dog является экземпляром класса Dog";
        }

        if($dog instanceof Cat) {
            echo "Dog является экземпляром класса Cat";
        }

        // $dog->info();
        // $dog->voice();
        $dog->parentInfo();
    ?>
</body>

</html>