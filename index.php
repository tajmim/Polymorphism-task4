<?php

class Animal {
    public function makeSound() {
    }
}

class Tiger extends Animal {
    
    public function __construct() {
        $this->name = "tiger";
    }

    public function makeSound() {
        return "Haluuuum!";
    }
}

class Cat extends Animal {
    
    public function __construct() {
        $this->name = "cat";
    }

    public function makeSound() {
        return "Meaw!";
    }
}

class Cow extends Animal {
    
    public function __construct() {
        $this->name = "cow";
    }


    public function makeSound() {
        return "Hambaaa!";
    }
}

class Duck extends Animal {
    
    public function __construct() {
        $this->name = "duck";
    }

    public function makeSound() {
        return "Quack!";
    }
}

$tiger = new Tiger();
$cat = new Cat();
$cow = new Cow();
$duck = new Duck();

$animals = array($tiger, $cat, $cow, $duck);

foreach ($animals as $animal) {
    echo $animal->name . " says " . $animal->makeSound() . "<br>";
}


?>

