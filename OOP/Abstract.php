<?php
//Abstract class contain atleast 1 abstract function
//abstract function:- must declare but not implement
//Abstract class coukd not create object 
//Abstract class, child class must contain abstract

?>


<?php 

abstract class Shape{
    abstract public function calculateArea();  // Abstract method
}

class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() { // Implementing the abstract method
        return M_PI * pow($this->radius, 2);
    }
}

class Rectangle extends Shape {
    private $length;
    private $width;

    public function __construct($length, $width)
    {
        $this->length = $length;
        $this->width = $width;
    }

    public function calculateArea()
    { // Implementing the abstract method
        return $this->length * $this->width;
    }
}

// Abstract class cannot be instantiated directly
// $shape = new Shape(); // Error: Cannot instantiate abstract class Shape

$rectangle = new Rectangle(5, 10);
echo "Rectangle is: " . $rectangle->calculateArea();

$circle = new Circle(5);
echo " <br> The radius of the circle is: " . round($circle->calculateArea());

?>