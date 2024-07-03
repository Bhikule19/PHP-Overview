<?php

    class class1{
        static public $num = 10;
        public $num2 = 20; 
        static function func1(){
            echo "func1";
            echo "<br>";
            echo self::$num; // this is how you csn access the statuc variable insie static func
            echo "<br>";
            // echo $this->num2; // this will give an error as $this is not defined in static function
            echo "<br>";
            // echo self::$num2; // error as num is not static
        }
    }

    echo class1::$num; // static variable accessing without object
    echo class1::func1(); // static function accessing without object

?>