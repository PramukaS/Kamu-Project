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
                    <h2 style="text-align: left;">Inbox</h2><br>
                    <table id="food">
                        <tr>
                            <th></th>
                            <th>Client Name</th>
                            <th>Message</th>
                            <th >Action</th>
                        </tr>
                        <tr>
                            <td><i class="fa fa-envelope" style="font-size: 20px;"></i></td>
                            <td>Sajana Nakandala</td>
                            <td>I need a meal plan</td>
                            <td><a href="mealplan_form.php"> <button class="button1">Read</button></a></td>
                        </tr>
                        <tr>
                        <td><i class="fa fa-envelope-open" style="font-size: 20px;"></i></td>
                            <td>Sajana Nakandala</td>
                            <td>I need a meal plan</td>
                            <td><a href="mealplan_form.php"> <button class="button1">Read</button></a></td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-envelope-open" style="font-size: 20px;"></i></td>
                            <td>Sajana Nakandala</td>
                            <td>I need a meal plan</td>
                            <td><a href="mealplan_form.php"> <button class="button1">Read</button></a></td>
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