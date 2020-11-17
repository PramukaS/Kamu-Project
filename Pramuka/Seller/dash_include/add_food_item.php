<!DOCTYPE html>
<html>

<?php
include_once '../../connect.php';


if(isset($_POST['submit']))           //if upload btn is pressed
{
	if(empty($_POST['d_name'])||empty($_POST['about'])||$_POST['price']==''||$_POST['res_name']=='')
		{	
	$error = 	'<div class="alert alert-danger alert-dismissible fade show">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	<strong>All fields Must be Fillup!</strong>
	</div>';
																
        }
        
	else
		{

                $fname = $_FILES['file']['name'];
                $temp = $_FILES['file']['tmp_name'];
                $fsize = $_FILES['file']['size'];
                $extension = explode('.',$fname);
                $extension = strtolower(end($extension));  
                $fnew = uniqid().'.'.$extension;
                $store = "Res_img/fooditem/".basename($fnew);   
                                // the path to store the upload image
                if($extension == 'jpg'||$extension == 'png'||$extension == 'gif' )
                        {        
                        if($fsize>=1000000)
                            {
                                $error = 	'<div class="alert alert-danger alert-dismissible fade show">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <strong>Max Image Size is 1024kb!</strong> Try different Image.
                                </div>';

                            }
                
                        else
                            {
                            $sql = "INSERT INTO fooditem(Res_id,FName,Description,price,img) VALUE('".$_POST['res_name']."','".$_POST['d_name']."','".$_POST['about']."','".$_POST['price']."','".$fnew."')";  // store the submited data ino the database :images
                            mysqli_query($con, $sql); 
                            move_uploaded_file($temp, $store);

                            if($mysqli_query=True){
                                echo "<script>alert('Successfully added!');
                                window.location.href='add_food_item.php';</script>";
                            }
                    
                            $success = 	'<div class="alert alert-success alert-dismissible fade show">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <strong>Congrats!</strong> New Dish Added Successfully.
                            </div>';
                        
            
                            }
                        }
                        elseif($extension == '')
                            {
                            $error = '<div class="alert alert-danger alert-dismissible fade show">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <strong>select image</strong>
                        </div>';
                            }
                            else
                            {
                            
                            $error = 	'<div class="alert alert-danger alert-dismissible fade show">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <strong>invalid extension!</strong>png, jpg, Gif are accepted.
                            </div>';
						
					}               
	    }
}

?>


<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;0,800;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/dash.css">

    <title>Add Food Items</title>
</head>

<body>
    <div class="seller-dashboard">
        <?php include('nav/add_food_item_nav.php'); ?>
        <div class="content">
            <div class="container">
                <a href="view_order.php" class="card" id="card1" style="display: block;">
                    <i class="fas fa-sort-amount-up-alt"></i>
                    <div class="container">
                        <h4><b>Orders</br>3</b></h4>
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
                        
                        <div class="col-lg-12">
                        <div class="card card-outline-primary">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Add Food Items</h4>
                            </div>
                            <div class="card-body">
                                <form action="add_food_item.php" method='post'  enctype="multipart/form-data">
                                    <div class="form-body">
                                       
                                        <hr>
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Food Name</label>
                                                    <input type="text" name="d_name" class="form-control" placeholder="Enter Item Name">
                                                   </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group has-danger">
                                                    <label class="control-label">Description</label>
                                                <input type="text" name="about" class="form-control form-control-danger" placeholder="Description">
                                                    </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Price </label>
                                                    <input type="text" name="price" class="form-control" placeholder="LKR ">
                                                   </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group has-danger">
                                                    <label class="control-label">Image</label>
                                                    <input type="file" name="file"  id="lastName" class="form-control form-control-danger" placeholder="12n">
                                                    </div>
                                            </div>
                                        </div>
                                        <!--/row-->
										
                                            <!--/span-->
                                        <div class="row">											
											 <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Select Restaurant</label>
													<select name="res_name" class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1">
                                                        <option>--Select Restaurant--</option>                                                        
                                                        <?php
                                                            require_once('../../connect.php');
                                                            $query = $con->query("SELECT * FROM seller");

                                                            while ($result = $query->fetch_assoc()) {
                                                                echo "<option value='" . $result['res_id'] . "'>" . $result['storename'] . "</option>";
                                                                //$result['id'] <= id from the resturant table
                                                                //$result['resturant_name'] <= resturant name from the resturant table
                                                            }

                                                            $con->close();
                                                            ?> 
                                                     </select>
                                                </div>
                                            </div>											
                                        </div>                                   
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <input type="submit" name="submit" class="btn btn-success" value="save"> 
                                        <a href="add_food_item.php" class="btn btn-inverse"><button type="reset" value="Reset">Cancel</button></a>
                                        <a href="view_food_item.php"><button type="button" class="button">View Items</button></a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

    <?php include('foot.php'); ?>
</body>

</html>