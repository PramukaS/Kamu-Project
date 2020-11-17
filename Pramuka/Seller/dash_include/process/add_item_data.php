<?php
include_once '../../../connection/connect.php';


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
                $store = "../Res_img/dishes/".basename($fnew);   
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
                            $sql = "INSERT INTO dishes(RS_ID,FName,Description,price,img) VALUE('".$_POST['res_name']."','".$_POST['d_name']."','".$_POST['about']."','".$_POST['price']."','".$fnew."')";  // store the submited data ino the database :images
                            mysqli_query($db, $sql); 
                            move_uploaded_file($temp, $store);

                            $result=$db->query($sql);
                            if($result=True){
                                echo "<script>alert('Successfully added!');
                                window.location.href='../add_food_item.php';</script>";
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