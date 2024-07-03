<?php 

class Task {
   public $description; //public property of the class

   public $completed = false;

   public $age;

   public function __construct($description) // A constructor method
   {
    $this->description = $description; //the $description property is assigned the value passed as an argument.
   }

   public function complete(){
    $this->completed = true;
   }

}

$task = new Task("This is the Description string"); // instances (creating a object)
$task2 = new Task("This is the new task with new instances");
// $task2->complete();
$task2->age = 30;
$task2->age++;


var_dump($task2); // to display the value