
<?php require_once("includes/connection.php") ?>
<?php require_once("includes/functions.php") ?>
<?php find_selected_page() ?>

<?php include("includes/header.php"); ?>

<table id="structure">
	<tr>
		<td id="navigation">
           <?php echo navigation($sel_subject, $sel_page); ?>
            <br>
        </td>
		<td id="page">
         <h2>Add Subject</h2>
		 <form action="create_subject.php" method="post" >
			<label>
				Subject name: <input type="text" name="menu_name" value="" id="menu_name" />
			</label>
			<br/>
			<label>
				Position: 
				<select name="position" >
					<?php 
						$subject_set = get_all_subjects();
						$subject_count = mysqli_num_rows($subject_set);
						// adding +1 in the for loop condition as we are adding the subject
						for($count = 1; $count <= $subject_count+1; $count++ ){
							echo "<option value=\"{$count}\" >{$count}</option>";
						}
					?>
				</select>
			</label>
			<br/>
			<label>
				Visible: 
				<input type="radio" name="visible" value="0" /> No
				&nbsp; 
				<input type="radio" name="visible" value="1" /> Yes
			</label>
			<br/>
			<input type="submit" name="submit" value="Add Subject" />
		 </form>
		 <br/>
		 <a href="content.php" >Cancel</a>
		</td>
	</tr>
</table>
<?php require("includes/footer.php"); ?>
