<?php
	// This file is the place to store all basic functions

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
	
?>