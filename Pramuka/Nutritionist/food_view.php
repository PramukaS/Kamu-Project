<?php
    require('../connect.php');
    $sql = "SELECT * FROM food"; 
    $result = $con->query($sql);
?>

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
            <div class="food-view">
                <h2 style="align-content: center;text-transform: capitalize;">Food Details in 100g </h2><br>
                <a href="food_form.php"><button class="button buttonc">Add New Food </button></a><br><br>
                <table id="food">

                    <tr>
                        <th>Food name</th>
                        <th>Calories(kcal)</th>
                        <th>Protein(g)</th>
                        <th>Fat(g)</th>
                        <th colspan="2">Actions</th>
                    </tr>

                    <?php 
                        if($result->num_rows>0){
                        while($row = $result-> fetch_assoc()):
                    ?>
                    <tr>
                        <td><?php echo $row['foodName'];?></td>
                        <td><?php echo $row['calories'];?></td>
                        <td><?php echo $row['protein'];?></td>
                        <td><?php echo $row['fat'];?></td>
                        <td> <a href="food_form.php?id=<?php echo $row ['id'];?>"> <button class="button1">
                            Update</button></a></td>
                        <td> <a href="food_delete.php?id=<?php echo $row ['id']; ?>"> <button class="button1">
                            Delete</button></a></td>
                    </tr>
                <?php endwhile; }?>
                </table>

            </div>
        </div>
    </div>
    <?php include('foot.php'); ?>
</body>

</html>