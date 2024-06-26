<html>
	<head>
		<title>Loops: while</title>
	</head>
	<body>
	<?php 
		$count = 0;
		while ($count <= 10) {
			echo $count . ", ";
			$count++;
		}
		echo "<br />Count: {$count}";
	?>
	<br />
    <br>
	<?php
		$count = 0;
		while ($count <= 10) {
			if ($count == 5) {
				echo "FIVE, ";
			} else {
				echo $count . ", ";
			}
			$count++;
		}
		echo "<br />Count: {$count}";
	?>

<br>
For Loops <br>
<?php
    for ($count=0; $count <= 10; $count++) {
        echo $count . ", ";
    }
?>

<br>

For each Loops
<br>    
	<?php
		$ages = array(4, 8, 15, 16, 23, 42);
	?>

	<?php
		foreach($ages as $age) {
			echo $age . ", ";
		}
	?>
	<br />
	<?php
		foreach($ages as $position => $age) {
			echo $position . ": " . $age . "<br />";
		}
	?>
	<br />
	<?php
		$prices = array("Brand New Computer"=>2000, 
		"1 month in Lynda.com Training Library"=>25, 
		"Learning PHP" => "priceless");
		foreach($prices as $key => $value) {
			if (is_int($value)) {
				echo $key . ": $" . $value . "<br />";
			} else {
				echo $key . ": " . $value . "<br />";
			}
		}
	?>
<br>

Pointers <br>

<?php
	
		$ages = array(4, 8, 15, 16, 23, 42);
	?>
	<?php
		echo "1: " . current($ages) . "<br />";
		next($ages);
		echo "2: " . current($ages) . "<br />";
		next($ages);
		echo "3: " . current($ages) . "<br />";
        reset($ages);
        echo "4: " . current($ages) . "<br/>";
	?>
	<br />
	<?php

		while ($age = current($ages)) {
			echo $age . ", ";
			next($ages);
		}
	?>

	</body>
</html>