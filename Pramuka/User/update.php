<?php 
require('../connect.php');

// if the form's update button is clicked, we need to process the form
	if (isset($_POST['update'])) {
		$username = $_POST['username'];
		$user_id = $_POST['user_id'];
		$email = $_POST['email'];
		$title = $_POST['title'];
		$message= $_POST['message'];
		

		// write the update query
		$sql = "UPDATE `post` SET `username`='$username',`email`='$email',`title`='$title',`message`='$message' WHERE `id`='$user_id'";

		// execute the query
		$result = $con->query($sql);

		if ($result == TRUE) {
			echo "Record updated successfully.";
		}else{
			echo "Error:" . $sql . "<br>" . $con->error;
		}
	}


// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['id'])) {
	$user_id = $_GET['id'];

	// write SQL to get user data
	$sql = "SELECT * FROM `post` WHERE `id`='$user_id'";

	//Execute the sql
	$result = $con->query($sql);

	if ($result->num_rows > 0) {
		
		while ($row = $result->fetch_assoc()) {
			$username = $row['username'];
			$email = $row['email'];
			$title  = $row['title'];
			$message = $row['message'];
			$id = $row['id'];
		}

	?>
		
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel='stylesheet' type="text/css" href="css/usrcss1.css">
	<title>add post</title>
</head>
   <body class="body-add">
    <div class="index">
        <div class="topnav">
            <ul type="none">
                <li><a id="login" href="">Login</a></li>
                <li><a href="">About Us</a></li>
                <li><a href="">Blog</a></li>
                <li><a href="">Restaurants</a></li>
            </ul>
                <a href=""><img id="logo" src="images/logo.png" alt="logo" ></a>  
        </div>
    </div>
<div class="add2">

       <div class="dis">
		<form class="f2" id="form-id" method="post" action="">
            <fieldset>
                <div class="form-row">
               
			      <input name="username" type="text" value="<?php echo $username;?>">
			      <input name="user_id" type="text" value="<?php echo $id;?>"><br>
                </div>
                
                <div class="form-row">
    		      <input name="email" type="email" value="<?php echo $email;?>"><br>
                </div>
                
            
            <div class="form-row">
               
                  <input name="title" type="text" placeholder="Title" value="<?php echo $title;?>">
                </div>
                <br>
            <div class="form-row">
            <table>
                <tbody>
                    <tr>
                        <td><h5>Upload your document</h5></td>
                        <td><input name="file" type="file" accept="image/jpg"placeholder="Zip Document"><br></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="form-row">
                        <div class="input-data textarea">
                            <textarea name="message" placeholder="Message" rows="5" value="<?php echo $message;?>"></textarea><br>
                        </div>
                    </div>

            <br>
            
      		<div class="form-row submt-btn">
                    <div class="form-row">
                        <div class="inner">
                        <input type="submit" value="update" name="update">
                        </div>
                    </div>
            </div>
        </fieldset>
        <br>
        

    </form>
   
</div>
  </div>
  <div class="footer">
            <div class="footer-content">
                <div class="footer-section-about"></div>
                <div class="footer-section-links"></div>
                <div class="footer-section-contact-forms"></div>
            </div>
            <div class="footer-bottom"> </div>


        </div>
</div>

</body>
</html>



	<?php
	} else{
		// If the 'id' value is not valid, redirect the user back to view.php page
		header('Location: view.php');
	}

}
?>