<?php
include_once '../../../connection/connect.php';

if(isset($_POST['btn-itmadd']) != 0 ){
    
    $restaurant = $_POST['restaurant'];
    $item = $_POST['item'];
    $details = $_POST['details'];
    $price = $_POST['price'];
    $image=($_FILES['image']['tmp_name']);

    if ((strlen($item) == 0) || (strlen($restaurant) == 0)  || (strlen($price) == 0)) {
        echo '<script language="javascript">';
        echo 'alert("Please fill all the fields")';
        echo '</script>';
    }
    else {
        $query = "SELECT Item_name FROM fooditems WHERE Item_name='$item'";
        $result = mysqli_query($db,$sql);
        
        $db = mysqli_num_rows($result);
        
        if ($count==0) {

            $sql = 'INSERT INTO fooditems(Res_id, Item_name, Details, Price, Image) VALUES ("'.$restaurant.'","'.$item.'","'.$details.'","'.$price.'","'.$image.'")';

            mysqli_query($db,$query);

            header("location:../view_food_item.php");
        }
        else {
            echo '<script language="javascript">';
            echo 'alert("Sorry this item already exists.")';
            echo '</script>';
        }
    }
}
?>