<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel='stylesheet' type="text/css" href="css/css1.css">
	<title>Signup deliverydriver</title>
</head>
<body class="body1">
    <div class="index">
        <div class="topnav">
            <ul type="none">
                <li><a id="login" href="login.php">Login</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="">Blog</a></li>
                <li><a href="">Restaurants</a></li>
            </ul>
                <a href=""><img id="logo" src="images/logo.png" alt="logo" ></a>  
        </div>
    </div>


<div class="container1">
        <div class="contact-title">
            <h3>Hello Driver!</h3>
        </div>
    <div class="dis">   
            <div class="text2">
                <p>To join as a Kamu.lk driver, first you have to fill this form and then you have to submit copies of following document as a zip file</p><br>
                <ul>
                    <li>National Identity card</li>
                    <li>Driving License document</li>
                    <li>Vehicle Insurance document</li>
                    <li>Vehicle Registration document</li>
                </ul>
                
            </div>
        
            <div class="img">
                <img src = "images/deliveryman.jpg" height="640px" width="400px" align="left">
            </div>

	   
		<form class="form2" id="form-id" method="post" action="signup_driver-check.php">
            
                <?php if (isset($_GET['error'])) { ?>
                                <p class="error"><?php echo $_GET['error']; ?></p>
                            <?php } ?>

                            <?php if (isset($_GET['success'])) { ?>
                                <p class="success"><?php echo $_GET['success']; ?></p>
                            <?php } ?>
                <fieldset>
                <div class="form-row">
			     <input name="username" type="text" placeholder="User name" required>
                <br>
                </div>
                <div class="form-row">
			      <input name="nic" type="text" placeholder="NIC number" required><br>
                </div>
                <div class="form-row">
			         <input name="license" type="text" placeholder="License number" required><br>
                </div>
                <div class="form-row">
			         <input name="contact" type="text" placeholder="Contact number" required><br>
                </div>
                <div class="form-row">
    		      <input name="email" type="email" placeholder="Email" required><br>
                </div>
                <div class="form-row">
    		      <input name="password" type="password" placeholder="Create password" required><br>
                </div>
                <div class="form-row">
                  <input name="confirmpassword" type="password" placeholder="Confirm password" required><br>
                </div>
            <br>
            <div class="form-row">
            <table>
                <tbody>
                    <tr>
                        <td><h5>upload your document</h5></td>
                        <td><input name="file" type="file" accept="image/jpg"placeholder="Zip Document" ><br></td>
                    </tr>
                </tbody>
            </table>
        </div>


            <br>
            <div class="form-row terms">
                <label class="check">
                    <input type="checkbox">
                    <span class="checkmark" required></span>
                </label>
                <p>I agree to the terms and condition</p>

                
            </div>
      		<div class="form-row submt-btn">
                    <div class="form-row">
                        <div class="inner">
                        <input type="submit" value="Submit" name="submit">
                        </div>
                    </div>
            </div>
        </fieldset>
        <br>
        <div>
            <table class="table1">
                <tr>
                    <td><h5 class="title">Already have an account?</h5></td>
                    <td><button><a href="login.php">Login</a></button></td>
                </tr>
            </table>
            <br>   
        </div>

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