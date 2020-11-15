<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;0,800;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="css/dash.css">  
</head>
<body>
<div class="nurtritionist-dashboard">
    <?php include('nav.php'); ?>
        <div class="content">
        <div class="card">
                <div class="food-view">
                    <h2 style="text-align: left;">Sent Meal Plans </h2><br>
                    <table id="food">
                        <tr>
                            <th>Client Name</th>
                            <th>Meal plan description</th>
                            <th colspan="2">Action</th>
                        </tr>
                        <tr>
                            <td>Sajana Nakandala</td>
                            <td>Sajana's meal plan</td>
                            <td><a href="mealplan_form.php"> <button class="button1">View</button></a></td>
                            <td> <a href=""> <button class="button1">Delete</button></a></td>
                        </tr>
                        <tr>
                            <td>Nisal Liyanage</td>
                            <td>Nisal's meal plan</td>
                            <td><a href="mealplan_form.php"> <button class="button1">View</button></a></td>
                            <td> <a href=""> <button class="button1">Delete</button></a></td>
                        </tr>
                        <tr>
                            <td>Devin De Silva</td>
                            <td>devin's meal plan</td>
                            <td><a href="mealplan_form.php"> <button class="button1">View</button></a></td>
                            <td> <a href=""> <button class="button1">Delete</button></a></td>
                        </tr>
                    </table>
                </div>
            </div> 

            </div>
        </div>
    </div>
    <?php include('foot.php'); ?>
</body>

</html>