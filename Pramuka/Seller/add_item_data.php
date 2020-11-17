<?php

if (isset($_POST['btn-itmadd'])) {
    require_once('../../../connection/connect.php');

    $sql = "INSERT INTO fooditems(Res_id, Item_name, Details, Price, Image) VALUES(
            {$_POST['restaurant']},
            {$_POST['item']},
            {$_POST['details']},
            {$_POST['price']},
            {$_POST['image']},
        )";

    $query = $db->query($sql);

    $db->close();

    if ($query) {
        header('Location: ../add_food_item.php');
    } else {
        header('Location: ../view_food_item.php');
    }
} else {
    header('Location: ../add_food_item.php');
}
