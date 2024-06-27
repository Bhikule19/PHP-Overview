<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First</title>
</head>
<body>
    <?php $linkText = "<Click> & youll see"; ?>
        <!-- after link we give ? and do  the url encdoing  -->
    <a href="./second.php?name=<?php echo urlencode("Abhishek Bhikule"); ?>&id=40">
    <!-- Below code shows how we can get even the open and close brackets in html with encoding -->
    <h1><?php echo htmlspecialchars($linkText); ?></h1> 
    </a>
    <!-- ------------------------------------------------------ -->
    <h2>
        Getting the username and password from form
    </h2>
    <?php 
    echo print_r($_POST);
    echo "<br>";
     $username = $_POST["username"];
     $password = $_POST["password"];
     echo "{$username} {$password}";
     ?>

<!-- ------------------------------Sessions -->
<h1>Sessions</h1>
<?php
$_SESSION["first_name"] = "Abhishek";
$_SESSION["last_name"] = "Bhikule";
?>
<?php $name = $_SESSION["first_name"] . " " . $_SESSION["last_name"];
echo $name; ?>

</body>
</html>