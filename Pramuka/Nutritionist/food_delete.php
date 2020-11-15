<?php
require_once('../connect.php');

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $sql = "delete from food where id = " . $_GET['id'];
    $con->query($sql);
    header("Location: food_view.php");
    die();
}
?>