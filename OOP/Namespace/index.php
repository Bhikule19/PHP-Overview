<?php 

include("test.php");
include("test2.php");

use index\html\css\test1 as test1;

test1\name1();
$obj = new test2\abc;
$obj->hello();
?>