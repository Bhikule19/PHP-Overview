
<?php require_once("includes/connection.php") ?>
<?php require_once("includes/functions.php") ?>
<?php 
    if(isset($_GET['subj'])){
        $sel_subject = get_subjects_by_id($_GET['subj']);
        $sel_page = null;
    }
    elseif(isset($_GET['page'])){
        $sel_subject = null;
        $sel_page = get_pages_by_id($_GET['page']);
    }
    else{
        $sel_subject = null; 
        $sel_page = null;
    }
?>

<?php include("includes/header.php"); ?>

<table id="structure">
	<tr>
		<td id="navigation">
            <ul class="subjects">
                <!-- // Setp3. Perform Data Query -->
                <?php
                $subject_set = get_all_subjects();

                //setup 4. Return data
                while($subject = mysqli_fetch_array($subject_set)){
                    echo "<li";
                    // I added isset() checks to ensure that the $sel_subject and $sel_page variables are set before accessing their properties. This should prevent the error message from appearing.
                    if(isset($sel_subject) && $subject["id"] == $sel_subject["id"]){
                        echo " class=\"selected\" ";
                    }
                    echo  "> <a href=\"content.php?subj=" . urlencode($subject["id"]) .
                    "\" >  {$subject["menu_name"]} </a> </li>  ";
                    

                    $page_set = get_pages_for_subject($subject["id"]);

                    //setup 4. Return data
                    echo "<ul class=\"pages\">";
                    while($page = mysqli_fetch_array($page_set)){
                        echo "<li";
                        //I added isset() checks to ensure that the $sel_subject and $sel_page variables are set before accessing their properties. This should prevent the error message from appearing.
                        if(isset($sel_page) && $page["id"] == $sel_page["id"]){
                            echo " class=\"selected\" ";
                        }
                        echo "> <a href=\"content.php?page=" . urlencode($page["id"]) .
                        "\" >  {$page["menu_name"]} </a> </li>";
                    }
                    echo "</ul>";
                }

                ?>		
            </ul>
        </td>
		<td id="page">
        
          <?php  if(!is_null($sel_subject)){ ?>
                <h2><?php echo $sel_subject["menu_name"]; ?></h2>
          <?php  } elseif(!is_null($sel_page)){ ?>
                <h2><?php echo $sel_page["menu_name"]; ?></h2>
                <div class="page-content">
                    <?php echo $sel_page['content']; ?>
                </div>
            <?php  } else{ ?>
                <h2>Select a subject or page</h2>
            <?php  }?>
            <br>
         
		</td>
	</tr>
</table>
<?php require("includes/footer.php"); ?>
