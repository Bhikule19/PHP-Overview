<html>
	<head>
		<title>Numbers: Floating Point Numbers</title>
	</head>
	<body>
		<?php 
        //Indexed Array 
        $array1 = array(4,8,15,25,45)
       ; ?>
        <?php echo $array1[0] ;?>
        <?php $array2 = array(6, "fox", "dog", array("x", "y", "z")); ?>
        <?php echo $array2[3][2]; ?>
		<?php $array2[3] = "cat"; ?>
        <?php echo $array2[3]; ?>
        <br/>
        
        <?php 
        //Associative Array
        $array3 = array("first_name"=> "Kevin", "last_name" => "Skogand") ?>
        <?php echo $array3["first_name"] . " " . $array3["last_name"] ; ?>
        <br/>
        <pre><?php print_r($array2) ?></pre>

        Array Functions 
        <br>
        Count: <?php echo count($array1); ?><br>
        Min value: <?php echo min($array1); ?><br>
        Max value: <?php echo max($array1); ?><br>
        <br/>
        Sort: <?php echo sort($array1); print_r($array1) ; ?><br>
        Reverse Sort: <?php echo rsort($array1); print_r($array1) ; ?> <br>
        <br/>
        Implode: <?php echo $string1 = implode("*", $array1) ; ?><br>
        Explode: <?php echo print_r(explode("*", $string1)) ; ?><br>

        <br>
        In array: <?php echo in_array(15, $array1) ; ?>
        <br>

        How to write constants:
        <?php 
        // Constants
        define("MAX_WIDTH", 980);
        echo MAX_WIDTH ?> <br>
        <?php define("STRING", "This is the const string"); echo STRING ?>

        Multi Dimentional Array

        <?php 
        // Multi dimentional array
        $multiDim = array(
            array(1,2,3,4),
            array(7,8,9,10),
            array(11,12,13,14),
        );
        ?>
<prev>
    <!-- <?php var_dump($multiDim); ?> -->
</prev>
<br>

<?php 
for ($i=0; $i < count($multiDim); $i++) { 
    for ($j=0; $j < count($multiDim[$i]); $j++) { 
        echo $multiDim[$i][$j]. " " ;
    }
    echo "<br/>";
};
?>




	</body>
</html> 
</html> 