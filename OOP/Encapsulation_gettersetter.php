<?php

class Person {

    private $name; // Encapsulation

    private $age; // Encapsulation

    public function __construct($name)
    {
        $this->name = $name;
    }

    function getAge(){ // Getters
        return $this->age * 10;
    }

    function setAge($age){ // Setters
        if($age < 18){
            throw new Exception("Age should be greater than or equal to 18");
        }

        $this->age = $age;
    }


}

$abhishek = new Person("Abhishek");
$abhishek->setAge(20);
var_dump($abhishek);

?>

<!-- Protected can be used within the class  of child and parent but bit private -->