<?php 
    // step1. Create a database connection
    $db = mysqli_connect("localhost", "root", "PHPPass@123");
    if(!$db){
        die("Connection failed: ". mysqli_connect_error());
    }

    // step2. Select the database
    $db_select = mysqli_select_db($db, "widget_corp", );
    if(!$db_select){
        die("Database selection failed: ". mysqli_error($db));
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Mt SQL</title>
</head>
<body>

<!-- // Setp3. Perform Data Query -->
 <?php
 $result = mysqli_query($db, "SELECT * FROM subjects", );
 if(!$result){
    die("Database query failed: ". mysqli_error($db));
 }

 //setup 4. Return data
 while($row = mysqli_fetch_array($result)){
    echo $row["id"] . " " . $row["menu_name"] . " " .$row["position"]."<br>";
 }

 ?>
    
</body>
</html>

<?php
 // step5. Close the connection
 mysqli_close($db)

?>