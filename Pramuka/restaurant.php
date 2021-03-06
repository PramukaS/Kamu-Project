<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Kamu.lk</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;0,800;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">


        <style>
            .boxContainer{
                display: flex;
                align-items: right;
                flex-wrap: wrap;
                margin-left:300px;
                margin-bottom:70px;
                justify-content: space-around;
                width:500px;
                height:42px;
                border: 2px solid;
                padding:0px 10px;
                border-radius:50px;
            }
            
            .elementsContainer{
                width: 100%;
                height: 100%;
                vertical-align:middle;
            }
        
            .search{
                border:none;
                height:100%;
                width:100%;
                padding:0px 5px;
            }
            .search:focus{
                outline:none;
            }
        </style>
    </head>
    <body>
        <div class="container"> 
            <div class="navbar">
                <div class="logo">
                    <img src="images/logo.png" alt="logo" width="125px">
                </div>
                <nav>
                    <ul id="MenuItems">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="restaurant.php">Restaurants</a></li>
                        <li><a href="aboutus.php">About Us</a></li>
                        <li><a href="log.php" class="btn">Login</a></li>
                    </ul>
                </nav>
                <img src="images/menu.png" class="menu-icon" alt="menu" onclick="menutoggle()">
            </div>
        </div>

    <!------ restaurant list ------>

    <div class="categories">
        <div class="small-container">
        <div class="boxContainer">
            <table class = "elementsContainer">
                <tr>
                    <td>
                        <input type="text" placeholder="Search Restaurant here" class="search">
                    </td>
                    <td>
                        <span class="material-icons">search</span>
                    </td>
                </tr>
            
            </table>

        </div>
            <div class="row">
            <?php
                require_once("connect.php");
                $sql = "SELECT * FROM restaurant ";
                $result = $con->query($sql);

                if($result->num_rows>0){
                    while($row = $result-> fetch_assoc()){
            ?>

                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <a href="details.php?id=<?php echo $row['id'] ?>"><img src="<?php echo $row['image']; ?>" alt="restaurant image">
                            <h2><?php echo $row['name']; ?></h2>
                            <p><?php echo $row['location']; ?></p></a>
                        </div>
                    </div>
                </div>

            <?php
                       
                    }
                }
                else{
                    echo "No restaurant found";
                }
            ?>
            </div>
        </div>    
    </div>

    <!------ footer------>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-col-1">
                        <img src="images/logo.png" alt="logo">
                        <p>We promote healthy food habits in order to prevent<br>
                            non-communicable diseases in the Sri Lankan community.</p>
                    </div>
                    <div class="footer-col-2">
                        <h3>Useful Links</h3>
                        <ul>
                            <li><a href="">Restaurant</a></li>
                            <li><a href="">Privacy Policy</a></li>
                            <li><a href="">Terms of Service</a></li>
                            <li><a href="">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="footer-col-2">
                        <h3>Follow Us</h3>
                        <ul>
                            <li><a href="">Facebook</a></li>
                            <li><a href="">Twitter</a></li>
                            <li><a href="">Instagram</a></li>
                            <li><a href="">YouTube</a></li>
                        </ul>
                    </div>
                </div>
                <hr>
                <p class="copyright"> Copyright 2020 - Kamu.lk</p>
            </div>
        </div>

        <Script>
            var MenuItems = document.getElementById("MenuItems");
            MenuItems.style.maxHeight = "0px";
            
            function menutoggle(){
                if(MenuItems.style.maxHeight == "0px"){
                    MenuItems.style.maxHeight = "250px";
                }
                else{
                    MenuItems.style.maxHeight = "0px";
                }
            } 
        </Script>

    </body>
</html>