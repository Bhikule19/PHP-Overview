<?php require_once("includes/connection.php") ?>
<?php require_once("includes/functions.php") ?>

<?php 
    $errors = array();

    // Form Validation

    $required_fields = array('menu_name', 'position', 'visible');
    foreach($required_fields as $fieldname){
        if(!isset($_POST[$fieldname]) || empty($_POST[$fieldname])){
            $errors[] = $fieldname. " cannot be blank.";
        }
    }

    // check for the menu_name lenghh
    $fields_with_lengths = array('menu_name' => 30);
    foreach($fields_with_lengths as $fieldname => $maxlength){
        if(strlen(trim($_POST['menu_name'])) > $maxlength){
            $errors[] = $fieldname . "Menu name cannot be more than 30 characters.";
        }
    }
  

    if(!isset($_POST['menu_name']) || empty($_POST['menu_name'])){
        $errors[] = "Menu name cannot be blank.";
    }
    
    if(!isset($_POST['position']) || empty($_POST['position'])){
        $errors[] = "Position must be a positive integer.";
    }

    if(!empty($errors)){
        redirect_to("new_subject.php");
    }
?>

<?php 
    $menu_name = mysql_prep($_POST['menu_name']); // Single Quote for strings are absolute in mysql
    $position = mysql_prep($_POST['position']);
    $visible = mysql_prep($_POST['visible']);
?>

<?php 
   $query = " INSERT INTO subjects (menu_name, position, visible) 
                VALUES( '{$menu_name}', '{$position}', '{$visible}' ) ";

    $result = mysqli_query($db, $query);
    if($result){
        // Succes
        header("Location: content.php");
        exit;
        // redirect_to("content.php");
    }
    else{
        // Failure
        echo "<p>Subject creation failed.</p>";
        echo "<p>" . mysqli_error($db) . "</p>" ;
    }
?>

<?php mysqli_close($db); ?>