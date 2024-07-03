<!-- <?php 

class class1{
    public $name;
    function __construct()
    {
        // echo "Construct 1";
        // $this->name = "Parent";
    }

    function fun1()
    {
        echo " <br> function 1";
    }   
}

class class2 extends class1{
    // the child class will take the construct of its parent if not its own.
    function __construct()
    {
        parent::__construct(); // call the parent constructor.
        $this->name = "child"; // if this variable is called before calling the parent then it will take the value from its parent i.e "parent"
        echo "Construct 2";
    }

    function fun1()
    {
        echo " <br> function 2";
    }  
}

$obj = new class2(); 
// $obj->fun1(); 
echo $obj->name;

?> -->

<!-- -----------------------Example------------------------------- -->

<?php

class Person {
    public $name;
    public $id;

    function __construct($name, $id) {
        $this->name = $name;
        $this->id = $id;
    }
}

class Student extends Person { //person inherting student
    public $grade;

    function __construct($name, $id, $grade) {
        parent::__construct($name, $id); // Call the parent constructor
        $this->grade = $grade;
    }
}

class Teacher extends Person {
    public $subject;

    function __construct($name, $id, $subject) {
        parent::__construct($name, $id); // Call the parent constructor
        $this->subject = $subject;
    }
}

$student = new Student("John Doe", 12345, "A");
echo "Student Name: " . $student->name . "<br>";
echo "Student ID: " . $student->id . "<br>";
echo "Student Grade: " . $student->grade . "<br>";

// Create a teacher object
$teacher = new Teacher("Jane Smith", 67890, "Mathematics");
echo "Teacher Name: " . $teacher->name . "<br>";
echo "Teacher ID: " . $teacher->id . "<br>";
echo "Teacher Subject: " . $teacher->subject . "<br>";

?>

