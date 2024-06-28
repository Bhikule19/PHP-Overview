<?php require("constants.php"); ?>

<?php 
    // step1. Create a database connection
    $db = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
    if(!$db){
        die("Connection failed: ". mysqli_connect_error());
    }

    // step2. Select the database
    $db_select = mysqli_select_db($db, DB_NAME, );
    if(!$db_select){
        die("Database selection failed: ". mysqli_error($db));
    }

?>