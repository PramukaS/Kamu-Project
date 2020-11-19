<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;0,800;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/foodform.css"> 
    <link rel="stylesheet" href="css/dash.css">
    <link rel="stylesheet" href="css/forms.css">
</head>

<body>
<div class="nurtritionist-dashboard">
    <?php include('nav.php'); ?>
        <div class="content">
            <div class="food-form form-container">
                <h2 style="text-transform: capitalize;">Add Post</h2><br>
                <form class="form" action="" method="post">
                    <div class="form-group">
                        <label>Title</label>
                            <input class="form-control" type="text" name="foodName" size="50"
                                value="" autocomplete="off" placeholder="Enter Your Name Here" required><br>
                        <label>Image</label>
                            <input class="form-control" type="file"  name="protein" size="50"
                                    value="" placeholder="Enter Your Subject"><br>
                        <label>Post</label>
                        <textarea class="form-control" name="message" placeholder="Message" 
                            style="display: block; border: 2px solid #ccc; width: 95%; padding: 6px; margin: 5px auto;border-radius: 5px;" required></textarea><br>                        
                    </div>
                    <input class="button" type="submit" name='submit2' value="submit" size="25">
                    <input class="button" type="reset" value="reset" size="25">
                </form>
            </div>

        </div>
    </div>
    <?php include('foot.php'); ?>
</body>
</html>