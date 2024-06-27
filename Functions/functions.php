<html>
	<head>
		<title>Logical Expressions: Switch</title>
	</head>
	<body>

    <?php echo "Functions in PHP <br>" ?>
		<?php 
			function say_hello(){
                echo "Hello World"; 
            }
			say_hello();
            echo "<br>";
		?>
        <?php 
        function say_hello2($world){
            echo "Hello {$world}";
        }
        say_hello2("World");
        echo "<br>";
        ?>

        <?php 
        say_hello2("Abhishek");
        $user = "Bhikule";
        echo "<br>";
        say_hello2($user);
        ?>

        <br>
        <?php 
        function sum($num1, $num2){
            return $num1 + $num2;
        }
        echo sum(3,4) . "<br>";
        if(sum(3,4)==7){
            echo "yes it is 7 <br>";
        }
        ?>

        <br>

        <?php 
        function sum_subt($num1, $num2){
            $add = $num1 + $num2;
            $subt = $num1 - $num2;
            $output = array($add, $subt);
            return $output;
        }
        echo sum_subt(10, 12)[1];
        ?>

        <br>
        <?php 
        $bar = "outside";
        function foo(){
            global $bar; // pulling the outside variable inside the function
            $bar = "inside";
        }
        foo();
        echo $bar;
        ?>

        <br>
        <?php 
        function add_some_extra($string){
            return $string .= " Add something";
        }
        $str = "Hello";
        echo add_some_extra($str);
        ?>
        <br>
        <?php 
        function processMarks($marksArr){
            $sum = 0;
            foreach($marksArr as $values){
            $sum += $values;
            }
            return $sum;
        }
        function avgMarks($marksArr){
            $sum = 0;
            $count = 1;
            foreach($marksArr as $values){
            $sum += $values;
            $count++;
            }
            return $sum/$count;
        }
        $rohanDas = [34, 98, 45, 12, 98, 93];

        $sumMarks = processMarks($rohanDas);
        $avgMarks = avgMarks($rohanDas);
        echo $sumMarks;
        echo "<br>";
        echo "This is the average marks " . round($avgMarks, 2);
        ?>
	</body>
</html>