<?php
    include 'dbConection.php';
    $id = $_POST['id'];
    $name = $_POST['name'];
    $cost = $_POST['cost'];
    $description = $_POST['description'];
    $image = $_POST['image'];
    $id_chef = $_POST['id_chef'];

    $query = "UPDATE recipes SET name = '$name', cost = '$cost', 
        description = '$description', image = '$image', id_chef = $id_chef WHERE id_recipe = '$id'";

    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
    header("location: ../pages/recipes.php");
?>