<html>
    <head>
        <title>Variables</title>
    </head>
    <body>
        <?php 
        $my_Name = "Hello I am learning strings";
        echo "{$my_Name} with string functions"
        ?>
        <br>
        
        <?php 
        $firstString = "i am the first line of the string";
        $secondString = " and I am the Second line of the String;"
        ?>
        <?php 
        $thirdString = $firstString;
        echo $thirdString.=$secondString;
        ?>
        <br>
     
        lowercase: <?php echo strtolower($thirdString); ?> <br>
        UPPERCASE: <?php echo strtoupper($thirdString); ?> <br>
        UPPERCASE Firts Letter: <?php echo ucfirst($thirdString); ?> <br>
        UPPER words: <?php echo ucwords($thirdString); ?> <br>
        <br>
     
        Length: <?php echo strlen($thirdString); ?> <br>
        Trim: <?php echo $fourthString = $firstString . trim($secondString); ?> <br>
        Find: <?php echo strstr($thirdString, "line"); ?> <br>
        Replace by String: <?php echo str_replace("string", "statement",  $thirdString); ?> <br>

    </body>
</html>