<?php 
require('../connect.php');

//write the query to get data from users table

$sql = "SELECT * FROM post";

//execute the query

$result = $con->query($sql);


?>

<!DOCTYPE html>
<html>
<head>
	<title>View Page</title>
	 <link rel="stylesheet" type="text/css" href="css/usrcss1.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Quicksand:300,500" rel="stylesheet">

</head>
<body>
	<div class="view">
		<h2>My Post</h2>
<table class="tb1">
	<thead>
		<tr>
		<th>ID</th>
		<th>User name</th>
		<th>Email</th>
		<th>Title</th>
		<th>Message</th>
		<th>Action</th>
	</tr>
	</thead>
	<tbody>	
		<?php
			if ($result->num_rows > 0) {
				//output data of each row
				while ($row = $result->fetch_assoc()) {
		?>

					<tr>
					<td><?php echo $row['id']; ?></td>
					<td><?php echo $row['username']; ?></td>
					<td><?php echo $row['email']; ?></td>
					<td><?php echo $row['title']; ?></td>
					<td><?php echo $row['message']; ?></td>
					<td><a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
					</tr>	
					
		<?php		}
			}
		?>
	        	
	</tbody>
</table>
	</div>

</body>
</html>