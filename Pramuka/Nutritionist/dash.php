<?php
    require_once("../connect.php");
    session_start();

    if(!isset($_SESSION['NutritionistUser'])) {
        header('Location:../log.php');
        die();
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;0,800;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/dash.css">
    <link rel="stylesheet" href="css/food.css">


    <title>Kamu Nutritionist</title>
</head>
<body>
    <div class="nurtritionist-dashboard">
        <?php include('nav.php'); ?>
        <div class="content">
            <div class="container">
                <a href="inbox.php" class="card" id="card1" style="display: block;">
                    <i class="fa fa-envelope"></i>
                    <div class="container">
                        <h3><b> 12 <br/>Inbox</b></h3><br>
                    </div>
                </a>
                <a href="food_view.php" class="card" id="card2" style="display: block;">
                    <i class="fa fa-cutlery"></i>
                    <div class=" container">
                        <h3><b> 5 <br/>Total Foods</b></h3><br>
                    </div>
                 </a>
                <a href="mealplan_view.php" class="card" id="card3" style="display: block;">
                    <i class="fa fa-cloud-upload"></i>
                    <div class="container">
                        <h3><b> 3 <br/>Meal Plans</b></h3><br>
                    </div>
                </a>
            </div>
            <br>
            <br>
        
            <div class="card">
                <div class="food-view">
                    <h2 style="text-align: left;">Today's Clients </h2><br>
                    <table id="food">
                        <tr>
                            <th>Client Name</th>
                            <th>Email</th>
                            <th>Contact Number</th>
                            <th >View</th>
                        </tr>
                        <tr>
                            <td>Sajana Nakandala</td>
                            <td>sajana98@gmail.com</td>
                            <td>0774567865</td>
                            <td> <a href="mealplan_form.php"> <button class="button1">View</button></a></td>
                        </tr>
                        <tr>
                            <td>Nisal Liyanage</td>
                            <td>nisal@gmail.com</td>
                            <td>0715678895</td>
                            <td> <a href="mealplan_form.php"> <button class="button1">View</button></a></td>
                        </tr>
                        <tr>
                            <td>Devin De Silva</td>
                            <td>devin234@gmail.com</td>
                            <td>0774567865</td>
                            <td> <a href="mealplan_form.php"> <button class="button1">View</button></a></td>
                        </tr>
                    </table>
                </div>
            </div>      
        </div>
    </div>
    <?php include('foot.php'); ?>
</body>
</html>