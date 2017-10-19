<?php include_once("project.php") ?>
<?php 
	$FirstName = $_POST['FirstName'];
	$LastName =$_POST['LastName'];
	$department = $_POST['department'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	//inserting queries from the form in project2.php script though the processing.php
			mysqli_query($connect, "INSERT INTO 'company_table'('first_name','last_name','Department','Email') VALUES('$FirstName','$LastName','$department','$email')");
if (mysqli_affected_rows($connect)){
	echo "<p> Data has been added to the Company table </p>";
	echo '<a href="project.php">Return to Form Page</a>';
}
else{
	echo "Data were not added to the database";
	echo (mysqli_error($connect));
}

 ?>
