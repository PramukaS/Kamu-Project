<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;0,800;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/dash.css">
    <title>Kamu Nutritionist</title>
</head>
<body>
    <div class="nurtritionist-dashboard">
        <?php include('nav.php'); ?>
        <div class="content">
            <div class="container">
                <a href="" class="card" id="card1" style="display: block;">
                    <i class="fa fa-envelope"></i>
                    <div class="container">
                        <h4><b>Inbox</b></h4>
                    </div>
                </a>
                <a href="" class="card" id="card2" style="display: block;">
                    <i class="fa fa-cutlery"></i>
                    <div class=" container">
                        <h4><b>Restaurants</b></h4>
                    </div>
                 </a>
                <a href="" class="card" id="card3" style="display: block;">
                    <i class="fa fa-cloud-upload"></i>
                    <div class="container">
                        <h4><b>Sent</b></h4>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <?php include('foot.php'); ?>
</body>
</html>