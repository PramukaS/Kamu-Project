<!DOCTYPE html>
<html>

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
                        <form role="form" action="add_menu_item.php" method="POST" enctype="multipart/form-data">

                            <div class="form-group">
                                <label>Restaurant ID</label>
                                <select name="restaurant" class="form-control">
                                    <option selected="selected"></option>

                                    <?php
                                    require_once('../../connection/connect.php');
                                    $query = $conn->query("SELECT * FROM seller");

                                    while ($result = $query->fetch_assoc()) {
                                        echo "<option value='" . $result['res_id'] . "'>" . $result['storename'] . "</option>";
                                        //$result['id'] <= id from the resturant table
                                        //$result['resturant_name'] <= resturant name from the resturant table
                                    }

                                    $conn->close();
                                    ?> 
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Item Name</label>
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
                                <input id="uploadBtn" type="file" class="upload" name="image" accept="image/*" />
                            </div>

                            <input type="submit" class="btn btn-default" name="btn-itmadd" value="Submit">

                        </form>
                    </div>

    <?php include('foot.php'); ?>
</body>

</html>