
        <div class="container-fluid">


            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Add menu items
                    </h1>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-6">

                    <form role="form" action="add_menu_item.php" method="POST" enctype="multipart/form-data">                        
                        <div class="form-group">
                            <label>restaurant</label>
                            <input name="restaurant" class="form-control" placeholder="Enter item name">
                        </div>

                        <div class="form-group">
                            <label>Item</label>
                            <input name="item" class="form-control" placeholder="Enter item name">
                        </div>

                        <div class="form-group">
                            <label>Details</label>
                            <input name="details" class="form-control" placeholder="Enter details">
                        </div>

                        <div class="form-group">
                            <label>Price</label>
                            <input name="price" type="number" class="form-control" placeholder="Enter Price">
                        </div>

                        <div class="form-group">
                            <label>Image</label>
                            <input id="uploadBtn" type="file" class="upload" name="image" accept="image/*"/>
                        </div>

                        <input type="submit" class="btn btn-default" name="btn-itmadd" value="Submit">

                    </form>

                </div>
                
            </div>

</div>

<?php
include_once '../../connection/connect.php';

if(isset($_POST['btn-itmadd']) != 0 ){
    
    $restaurant = $_POST['restaurant'];
    $item = $_POST['item'];
    $details = $_POST['details'];
    $price = $_POST['price'];
    $image=addslashes(file_get_contents($_FILES['image']['tmp_name'])) ;
    $image_name=addslashes($_FILES['image']['name']) ;

    if ((strlen($item) == 0) || (strlen($restaurant) == 0)  || (strlen($price) == 0)) {
        echo '<script language="javascript">';
        echo 'alert("Please fill all the fields")';
        echo '</script>';
    }
    else {
        $query = "SELECT item FROM menu WHERE item='$item'";
        $result = mysqli_query($conn,$query);
        
        $count = mysqli_num_rows($result);
        
        if ($count==0) {

            $query = 'INSERT INTO menu(restaurant, item, details, price, image, imagename) VALUES ("'.$restaurant.'","'.$item.'","'.$details.'","'.$price.'","'.$image.'","'.$image_name.'")';

            mysqli_query($conn,$query);
            header("location:../dash.php");
        }
        else {
            echo '<script language="javascript">';
            echo 'alert("Sorry this item already exists.")';
            echo '</script>';
        }
    }
}
?>