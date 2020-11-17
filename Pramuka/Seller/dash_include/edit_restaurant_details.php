


<!DOCTYPE html>
<html>
<head>

        <style>
        table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 75%;
        }

        td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
        }
        </style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;0,800;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/dash.css">

    <title>Contact Admin</title>
</head>
<body>
<div class="seller-dashboard">
        <?php include('nav/edit_restaurant_details_nav.php'); ?>
        <div class="content">
            <div class="container">
                <a href="view_order.php" class="card" id="card1" style="display: block;">
                 <i class="fas fa-sort-amount-up-alt"></i>
                    <div class="container">
                        <h4><b>Orders</br>3</b ></h4>
                    </div>
                </a>
                <a href="view_food_item.php" class="card" id="card2" style="display: block;">
                    <i class="fas fa-cloud-meatball"></i>
                    <div class=" container">
                        <h4><b>Food Items</br>12</b></h4>
                    </div>
                 </a>
                <a href="order_history.php" class="card" id="card3" style="display: block;">
                    <i class="fas fa-history"></i>
                    <div class="container">
                        <h4><b>Order Histroy</br>22</b></h4>
                    </div>
                </a>
            </div>
        </div>
</div>

                <div class="content">
                
                        <div class="head">
							<h2 class="title">Edit Restaurant Details</h2>
                        </div>
                        <table>
                        <tr>
                               <lable>Store Name</lable>
                            <input type="storeName" name="strName" value="" autocomplete="off" placeholder="Store Name" ><br>
                        </tr>
                        <tr>   
                        <lable>Store Addresss</lable>
                            <input type="storeAddress" name="strAddress" value="" autocomplete="off" placeholder="Store Address" ><br>
                        </tr>
                        <tr>
                        <lable>First Name</lable>
                            <input type="firstName" name="fname" value="" autocomplete="off" placeholder="First Name" ><br>
                        </tr>   
                        <tr>
                        <lable>Last Name</lable>
                            <input type="lastName" name="lname" value="" autocomplete="off" placeholder="Last Name" ><br>
                        </tr> 
                        <tr>
                        <lable>Contact Number</lable>
                            <input type="tel" name="contactNo" value="" autocomplete="off" placeholder="+94|Contact Number" ><br>
                         </tr> 
                         <tr>
                        <lable>Email</lable>
                            <input type="email" name="email" value="" autocomplete="off" placeholder="Email" ><br>
                         </tr> 
                         <tr>
                        <lable>Store Type</lable>
                            <select id="storeType" name="storetype" required>
                                <option value="" disabled selected>Choose a Store Type</option>
                                <option value="Restaurant">Restaurant</option>
                                <option value="Conveniencestore">Convenience store</option>
                                <option value="Grocerystore">Grocery store</option>
                                <option value="Liquorstore">Liquor store</option>  
                            </select>
                            </tr><br>
                            <tr>
                            <button type="submit" name="reg_seller">Submit</button>
                            </tr> 
                        </table>                       

                  </div>          

    <?php include('foot.php'); ?>   
</body>
</html>