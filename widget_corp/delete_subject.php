<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>

<?php 
    if (intval($_GET['subj']) == 0) { //To check we are getting the subject ID successfully
        redirect_to("content.php");
    }

    $id = mysql_prep($_GET['subj']);

    if($subject = get_subjects_by_id($id)){
        $query = "DELETE FROM subjects WHERE id = {$id} LIMIT 1 ";
        $result = mysqli_query($db, $query);
        if(mysqli_affected_rows($db)==1){
            // Success
            redirect_to("content.php");
        } else{
            // Deletion failed
            echo "<p>Subject deletion failed.</p>";
            echo "<p>" . mysqli_error($db). "</p>";
            echo "<a href=\"content.php\">Return to Main Page</a>";

        }

    }
    else {
        // subject didnt exist in data base
        redirect_to("content.php");
    }
?>

<?php require("includes/footer.php"); ?>
