<?php 
$hostname= "localhost";
                    $username= "root";
                    $password = "";
                    $db_name = "kamu";


        $conn = mysqli_connect($hostname, $username, $password, $db_name);

            if ($conn-> connect_error) {
        die("Error".$conn-> connect_error);
    }
?>


<!DOCTYPE html>
<html>
<head>
    <title>Contact nutritionist</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/usrcss2.css">
</head>
<body class="con_nut">


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

    <div class="dis"> 
        <div class="img">
            <img src = "images/nutri1.jpg" height="500px" width="400px" align="left">
        </div>


        <form class="form2" id="form-id" method="post" action="#">

            <fieldset>
                <h2>Contact nutritionist</h2>

                <div class="form-row">
                 <input name="username" type="text" placeholder="User name" required>
                <br>
                </div>

                <div class="form-row">
                  <input name="email" type="email" placeholder="Your email" required><br>
                </div>
        

                <div class="form-row">
                    <table>
                        <tr>
                            <td><p>Select Nutritionist<p></td>

                            <td>

                <?php  
                    
                
        $sql="SELECT username FROM nutritionist";

         $result=mysqli_query($conn,$sql);
        ?>


                     
        <select>
        <?php
            while ($rows=mysqli_fetch_assoc($result)) {
                
                ?>
                
                    <option><?php echo $rows['username'];?></option>
                    
                
                <?php
            }
            ?>
            </select>
            <?php
            mysqli_free_result($result);

        ?>
    
</table>


</div>

                <div class="form-row">
                    <input name="subject" type="text" placeholder="subject" required><br>
                </div>

                <div class="form-row">
                     <div class="input-data textarea">
                        <textarea name="message" placeholder="Message" rows="5" required></textarea><br>
                    </div>
                </div>

                <div class="form-row submt-btn">
                    <div class="form-row">
                        <div class="inner">
                        <input type="submit" value="Submit" name="submit">
                        </div>
                    </div>
                </div>

            </fieldset>
                <div class="btn">
                    <button><a href="" >Nutritionist Details</a></button>
                    
                    <?php  
                    
         $sql="SELECT username ,nic,status , email FROM nutritionist";

         $result=mysqli_query($conn,$sql);
        ?>


        <table border="20" cellpadding="15" cellspacing="5" width="400px"> 
                        <tr>
                            <th>Username</th>
                            <th>NIC</th>
                            <th>Status</th>
                            <th>Email</th>
                        </tr>

        <?php
            while ($rows=mysqli_fetch_assoc($result)) {
                
                ?>
                <tr>
                    <td><?php echo $rows['username'];?></td>
                    <td><?php echo $rows['nic'];?></td>
                    <td><?php echo $rows['status'];?></td>
                    <td><?php echo $rows['email'];?></td>
                </tr>
                <?php
            }
            ?>
            </table>
            <?php
            mysqli_free_result($result);

        ?>
    </table>

            </div>
        </form>


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