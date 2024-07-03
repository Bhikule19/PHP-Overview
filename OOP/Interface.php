<?php
//Interface can only contain abstract function
// In Interface we cannot definr variables
// No constructor in Interface
// All function must be public
// Interface support multiple inheritance
?>

<?php

interface Drawable {
    public function draw();
}

interface Resizable {
    public function resize($width, $height);
}

class Rectangle implements Drawable, Resizable {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function draw() {
        echo "Drawing a rectangle with width: " . $this->width . " and height: " . $this->height . "<br>";
    }

    public function resize($width, $height) {
        $this->width = $width;
        $this->height = $height;
        echo "Resizing rectangle to width: " . $this->width . " and height: " . $this->height . "<br>";
    }
}

$rectangle = new Rectangle(10, 5);
$rectangle->draw();
$rectangle->resize(20, 10);
$rectangle->draw();

?>