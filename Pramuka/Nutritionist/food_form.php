<?php 

require_once('../connect.php');

$food_query = "select * from food";
$foods = $con->query($food_query)->fetch_all();


$fid="";
$fName="";
$fCal="";
$fPro="";
$fFat="";

$isUpdate = false;

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $isUpdate = true;
    $id = $_GET['id'];
    $sql= "SELECT id, foodName, calories, protein, fat FROM food WHERE id='$id'";
    $out = $con->query($sql)->fetch_assoc();
    $fid =$out["id"];
    $fName = $out["foodName"];
    $fCal = $out["calories"];
    $fPro = $out["protein"];   
    $fFat = $out["fat"];
} else {
    $id = "";
}

if (isset($_POST['submit2']))
    {
        $foodName = $_POST['foodName'];
        $calories = $_POST['calories'];
        $protein = $_POST['protein'];
        $fat = $_POST['fat'];

        if ($isUpdate == true) {
            $sql = "UPDATE food SET id='$id',foodName='$foodName',calories='$calories',protein='$protein',fat='$fat'  WHERE id=$id";
            $updated = $con->query($sql);
            header('Location: food_view.php');
            die();
        } 
        else {
            $sql = "INSERT INTO food (foodName,calories,protein,fat) VALUES ('$foodName','$calories','$protein','$fat')";
            $inserted = $con->query($sql);
            header("Location: food_view.php");
            die();
        }
    }
$con-> close();
?>

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
                <h2 style="text-transform: capitalize;">Add Food Details</h2><br>
                <form class="form" action="food_form.php?id=<?php echo $id; ?>" method="post">
                    <div class="form-group">
                        <label>Food Name</label>
                            <input class="form-control" type="text" name="foodName" size="50"
                                value="<?php echo"$fName" ?>" autocomplete="off" placeholder="Enter Food Name Here" required><br>
                        <label>Calories (kcal)</label>
                            <input class="form-control" type="number" step=1 name="calories" size="50"
                                    value="<?php echo"$fCal" ?>" placeholder="Enter Calories in 100g" required><br>
                        <label>Protein (g)</label>
                            <input class="form-control" type="number" step=0.1 name="protein" size="50"
                                    value="<?php echo"$fPro" ?>" placeholder="Enter Protein in 100g" required><br>
                        <label>Fat (g)</label>
                            <input class="form-control" type="number" step=0.1 name="fat" size="50"
                                    value="<?php echo"$fFat" ?>" placeholder="Enter Fat in 100g" required><br>                               
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