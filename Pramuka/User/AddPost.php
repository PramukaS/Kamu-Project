<?php 
require('../connect.php');

// if the form's submit button is clicked, we need to process the form
	if (isset($_POST['submit'])) {
		// get variables from the form
		$username = $_POST['username'];
		$email = $_POST['email'];
		$title = $_POST['title'];
		$message = $_POST['message'];
		

		//write sql query

		$sql = "INSERT INTO `post`(`username`, `email`, `title`, `message`) VALUES ('$username','$email','$title','$message')";

		// execute the query

		$result = $con->query($sql);

		if ($result == TRUE) {
			echo "New record created successfully.";
		}else{
			echo "Error:". $sql . "<br>". $con->error;
		}

		$con->close();

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
               
                  <input name="username" type="text" placeholder="User name" required><br>
                </div>
                
                <div class="form-row">
                  <input name="email" type="email" placeholder="Email" required><br>
                </div>
                
            
            <div class="form-row">
               
                  <input name="title" type="text" placeholder="Title" required><br>
                </div>
                <br>
            <div class="form-row">
            <table>
                <tbody>
                    <tr>
                        <th><h5>Upload your document</h5></th>
                        <th><input name="file" type="file" accept="image/jpg"placeholder="Zip Document"><br></th>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="form-row">
                        <div class="input-data textarea">
                            <textarea name="message" placeholder="Message" rows="5" required></textarea><br>
                        </div>
                    </div>

            <br>
            
            <div class="form-row submt-btn">
                    <div class="form-row">
                        <div class="inner">
                        <input type="submit" value="Submit" name="submit">
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
            <script type="text/javascript">
    $(function(){
        $("#input-id").on('change', function(event) {
            var file = event.target.files[0];
            if(file.size>=2*1024*1024) {
                alert("JPG images of maximum 2MB");
                $("#form-id").get(0).reset(); 
                return;
            }

            if(!file.type.match('image/jp.*')) {
                alert("only JPG images");
                $("#form-id").get(0).reset(); 
                return;
            }

            var fileReader = new FileReader();
            fileReader.onload = function(e) {
                var int32View = new Uint8Array(e.target.result);
                //verify the magic number
                // for JPG is 0xFF 0xD8 0xFF 0xE0 (see https://en.wikipedia.org/wiki/List_of_file_signatures)
                if(int32View.length>4 && int32View[0]==0xFF && int32View[1]==0xD8 && int32View[2]==0xFF && int32View[3]==0xE0) {
                    alert("ok!");
                } else {
                    alert("only valid JPG images");
                    $("#form-id").get(0).reset(); 
                    return;
                }
            };
            fileReader.readAsArrayBuffer(file);
        });
    });

 </script>

        

</body>
</html>