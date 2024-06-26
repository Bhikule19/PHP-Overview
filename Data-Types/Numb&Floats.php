<html>
	<head>
		<title>Numbers</title>
	</head>
	<body>
		<?php
			$var1 = 3;
			$var2 = 4;
		?>
		
		Basic Math: <?php echo ((1 + 2 + $var1) * $var2) / 2 - 5; ?><br />
		<br />
		
		<?php ?>
		+=: <?php $var2 += 4; echo $var2; ?><br />
		-=: <?php $var2 -= 4; echo $var2; ?><br />
		*=: <?php $var2 *= 3; echo $var2; ?><br />
		/=: <?php $var2 /= 4; echo $var2; ?><br />
		<br />
		
		Increment: <?php $var2++; echo $var2; ?><br />
		Decrement: <?php $var2--; echo $var2; ?><br />
        <br/>
        <?php 
			// Floating Point Numbers (floats) are "numbers with a decimal"
			$var1 = 3.14
		?> 
        <br />
		<?php 
			// Floats can occur when two numbers don't divide evenly
			echo 4/3;
		?>
        <br />
        Float: <?php echo $myFloat = $var1 ;?> <br />
        Round: <?php echo round($myFloat, 1); ?><br />
		Ceiling: <?php echo ceil($myFloat); ?><br />
		Floor: <?php echo floor($myFloat); ?><br />


		
	</body>
</html>