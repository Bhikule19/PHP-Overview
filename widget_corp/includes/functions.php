<?php
	// This file is the place to store all basic functions

function mysql_prep($value) {
	global $db;
    $magic_quotes_active = (bool) ini_get('magic_quotes_gpc');
    $new_enough_php = function_exists("mysqli_real_escape_string");

    if ($new_enough_php) {
        // PHP v4.3.0 or higher
        // undo any magic quote effects so mysql_real_escape_string can do the work
        if ($magic_quotes_active) {
            $value = stripslashes($value);
        }
        $value = mysqli_real_escape_string($db, $value);
    } else {
        // before PHP v4.3.0
        // if magic quotes aren't already on then add slashes manually
        if (!$magic_quotes_active) {
            $value = addslashes($value);
        }
        // if magic quotes are active, then the slashes already added by addslashes
        // will be stripped by mysql_real_escape_string in PHP v4.3.0 or higher
        $value = mysqli_real_escape_string($db, $value);
    }

    return $value;
}

	function redirect_to($location = null){
		if($location != null){
			header("Location: {$location}");
			exit;
		}
	}

	function confirm_query($result_set, $db){
        if(!$result_set){
            die("Database query failed: ". mysqli_error($db));
        }
    }

	function get_all_subjects(){
		global $db;
		$query = "SELECT * 
				FROM subjects 
				ORDER BY position ASC";

		$subject_set = mysqli_query($db, $query );
		confirm_query($subject_set, $db);
		return $subject_set;
	}

	function get_pages_for_subject($subject_id){
		global $db;
		$query =  "SELECT * 
                    FROM pages 
                    WHERE subject_id = {$subject_id} 
                    ORDER BY position ASC";

        $page_set = mysqli_query($db, $query );
        confirm_query($page_set, $db);
		return $page_set;

	}

	function get_subjects_by_id($subject_id){
		global $db;
		$query = "SELECT * ";
		$query .= "FROM subjects ";
		$query .= "WHERE id=" . $subject_id . " ";
		$query .= "LIMIT 1";
		$result_set = mysqli_query($db, $query);
		confirm_query($result_set, $db);
		if($subject = mysqli_fetch_array($result_set)){
			return $subject;
		} else {
			return NULL;
		}
	}
	function get_pages_by_id($page_id){
		global $db;
		$query = "SELECT * ";
		$query .= "FROM pages ";
		$query .= "WHERE id=" . $page_id . " ";
		$query .= "LIMIT 1";
		$result_set = mysqli_query($db, $query);
		confirm_query($result_set, $db);
		if($subject = mysqli_fetch_array($result_set)){
			return $subject;
		} else {
			return NULL;
		}
	}

	function find_selected_page(){
		global $sel_subject, $sel_page;
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
	}

	function navigation($sel_subject, $sel_page){
		$output = "<ul class=\"subjects\">";
		// <!-- // Setp3. Perform Data Query -->
		$subject_set = get_all_subjects();

		//setup 4. Return data
		while($subject = mysqli_fetch_array($subject_set)){
			$output .= "<li";
			// I added isset() checks to ensure that the $sel_subject and $sel_page variables are set before accessing their properties. This should prevent the error message from appearing.
			if(isset($sel_subject) && $subject["id"] == $sel_subject["id"]){
				$output .= " class=\"selected\" ";
			}
			$output .=  "> <a href=\"edit_subject.php?subj=" . urlencode($subject["id"]) .
			"\" >  {$subject["menu_name"]} </a> </li>  ";
			

			$page_set = get_pages_for_subject($subject["id"]);

			//setup 4. Return data
			$output .= "<ul class=\"pages\">";
			while($page = mysqli_fetch_array($page_set)){
				$output .= "<li";
				//I added isset() checks to ensure that the $sel_subject and $sel_page variables are set before accessing their properties. This should prevent the error message from appearing.
				if(isset($sel_page) && $page["id"] == $sel_page["id"]){
					$output .= " class=\"selected\" ";
				}
				$output .= "> <a href=\"content.php?page=" . urlencode($page["id"]) .
				"\" >  {$page["menu_name"]} </a> </li>";
			}
			$output .= "</ul>";
		}

		$output .= "</ul>";

		return $output;
	}
	
?>