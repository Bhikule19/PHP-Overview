<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Second</title>
</head>
<body>
    <?php 
    print_r($_GET); // print the data using Get from link
    $id = $_GET['id']; 
    $name = $_GET["name"];
    echo "<br> <strong> {$id} : {$name} </strong>";
    ?>
    <br>
    <?php 
    $string = "Sanika Khot";
    echo urlencode($string);
    echo "<br>";
    echo rawurlencode($string);
    ?>

    <br>

    <h1>Dynamically encoding a url</h1>

    <?php 
    $urlpage = "php/created/page/url.php";
    $param1 = "This is a string";
    $param2 = "'bad' / <>characters$";
    $linktext = "<Click> & you'll see me"; 
    ?>

    <!-- Creating the URL -->
    <?php 
    $url  = "https://localhost/";
    $url.= rawurlencode($urlpage);//using raw encode coz it is before ?
    $url.= "?param1=" . urlencode($param1);
    $url.= "&param2=" . urlencode($param2);
    ?>

    <h1>
        <a href="<?php echo htmlspecialchars($url); ?>" >
            <?php echo htmlspecialchars($linktext);?>
        </a>
    </h1>
</body>
</html>