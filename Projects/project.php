<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

		<?php 
			$connect = mysqli_connect("localhost","root","","company_name"); //creating a connection to the database
			//to test the connection created above
			if(mysqli_connect_errno($connect)){
				echo "failed to connect to the MYSQL Database" . mysqli_connect_error() . "<br />" ;
			}
			else{echo "<strong> connection to mysql was successful <strong/> <br/>";
			}

//to perform the insert query to database 'company_name' inserting data to the 'company_table'
			mysqli_query($connect, "INSERT INTO 'company_table'('id','first_name','last_name','Department','Email') VALUES('peter','James','Engineering','peter@yahoo.com')");
			
//Using SELECT query to grab data from the Database and insert to the WEBPAGE (Usually this is the most common)
			$Database_Result = mysqli_query($connect,"SELECT * FROM company_table");
			while ($row = mysqli_fetch_array($Database_Result)) {//this means yl there's still a row to be read in the database do the following......
			echo $row['first_name']. ' ' .$row['last_name']. ' '.$row['Department'] .' '.$row['E-mail'] . "<br />";
			}
		 ?>
	<h1>Company Table</h1>
		<table border="1" width="600" cellpadding="5" cellspacing="7" bgcolor="powderedblue">
			 	<tr>
			 		<th>ID</th>
			 		<th>First Name</th>
			 		<th>Last Name</th>
			 		<th>Department</th>
			 		<th>E-mail</th>
			 	</tr>
			 	
			<?php 
			 	$Database_Result = mysqli_query($connect,"SELECT * FROM company_table");
			 	while ($row = mysqli_fetch_array($Database_Result));
			?>
				<tr>
			 		<td><?php echo $row['id']; ?></td> 
			 		<td><?php echo $row['first_name']; ?></td>
			 		<td><?php echo $row['last_name']; ?></td>
			 		<td><?php echo $row['Department']; ?></td>
			 		<td><?php echo $row['E-mail']; ?></td>
			 	</tr>
			<?php end($Database_Result)?>  
		 </table>
</body>
</html>