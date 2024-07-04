<?php

require 'vendor/autoload.php';

$abhishek = new App\Person("Abhishek Bhikule");
$staff = new App\Staff([$abhishek]);
$brainstorm = new App\Business($staff);
$brainstorm-> hire(new App\Person("Yash Hatipkar"));
var_dump($brainstorm->getStaffMembers());

?>