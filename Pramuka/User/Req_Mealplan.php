<!DOCTYPE html>
<html>
<head>
	<title>Request Mealplan</title>
  <link rel="stylesheet" type="text/css" href="css/usrcss2.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Quicksand:300,500" rel="stylesheet">
</head>
<body class="mealplan">
    <div>
      <div class="topnav">
        <ul type="none">
          <li><a id="login" href="login.php">Login</a></li>
          <li><a href="">About Us</a></li>
          <li><a href="">Blog</a></li>
          <li><a href="">Restaurants</a></li>
        </ul>
          <a href=""><img id="logo" src="images/logo.png" alt="logo" ></a>  
      </div>
    </div>

  <div class="container4">
        <div class="title-mealplan">
            <h3>eat healthy be healthy</h3>
        </div>

        <form class="form-mealplan">
          <fieldset>


            <section class="sec1">
              <h3>Personal Information</h3>

              <div class="form-row">
                <label>Name</label>
                <input type="text" name="username" placeholder="Name">
              </div>

              <div class="form-row">
                <label>Age</label>
                <input type="text" name="age" placeholder="Age"><br>
              </div>

              <div class="form-row">
                <label>Gender</label> <br>
                <table width="250" border="0px">
                  <tr>
                    <td width="15px" height="15px"><input type="radio" id="male" name="gender" value="male"></td>
                    <td><label for="male"> Male </label></td>
                  </tr>
                  <tr>
                    <td width="15px" height="15px"><input type="radio" id="female" name="gender" value="female"></td>
                    <td><label for="female"> Female</label></td>
                  </tr>
                  <tr>
                    <td width="15px" height="15px"><input type="radio" id="other" name="gender" value="other"></td>
                    <td><label for="other"> Other </label></td>
                  </tr>
                </table><br>
              </div>

              <div class="form-row">
                <label>Height</label><br>
                <input type="text" name="height" placeholder="Height"><br>
              </div>

              <div class="form-row">
                <label>Weight</label><br>
                <input type="text" name="weight" placeholder="Weight"><br>
              </div><br>

              <div class="form-row">
                <label>Occupation</label><br>
                <input type="text" name="username" placeholder="Occupation"><br>
              </div>

              <div class="form-row">
                <label>Reason for seeking Nutriotion food</label><br>
                  <div class="input-data textarea">
                    <textarea name="reason" placeholder="Your reason" rows="5" required></textarea><br>
                  </div>
              </div><br>

              <div class="form-row">
                <label>Work environment</label><br>
                  <div class="input-data textarea">
                    <textarea name="experiance" placeholder="Your Work experiance" rows="5" required></textarea><br>
                  </div>
              </div><br>

              <div class="form-row">
                <label>Physical excercise level</label> <br>
                <table width="250" border="0px">
                  <tr>
                    <td width="15px" height="15px"><input type="radio" id="active" name="Physical-ex" value="active"></td>
                    <td><label for="active"> Active </label></td>
                  </tr>
                  <tr>
                    <td width="15px" height="15px"><input type="radio" id="female" name="Physical-ex" value="inactive"></td>
                    <td><label for="inactive"> In active</label></td>
                  </tr>
                </table>
              </div>

              </section>
            </fieldset>
            <fieldset class="field1">
              <section class="sec2">
                <h3>Medical status</h3>

                <div class="form-row">
                  <label>Any medication taken</label><br>
                    <div class="input-data textarea">
                      <textarea name="medication" rows="5" required></textarea><br>
                    </div>
                </div>
                <div class="form-row">
                  <label>Health issues</label><br>
                    <div class="input-data textarea">
                      <textarea name="Health" placeholder="Health issues" rows="5" required></textarea><br>
                    </div>
                </div><br>

                <div class="form-row">
                  <label>Any alergy food or medicine</label><br>
                     <div class="input-data textarea">
                      <textarea name="alergy" rows="5" required></textarea><br>
                    </div>
                    
                </div><br>


                
              </section>
            </fieldset>

            <fieldset class="feild2">
              <section class="sec3">
              <h3>Note</h3>

              <div class="form-row">
                <label>Note</label><br>
                  <div class="input-data textarea">
                    <textarea name="message" placeholder="Message" rows="5" required></textarea><br>
                  </div>
              </div><br>

              <div class="form-row submt-btn">
                <div class="form-row">
                  <div class="inner">
                    <input type="submit" value="Submit" name="submit">
                  </div>
                </div>
              </div>
              </section>

            </fieldset>
        </form>



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

