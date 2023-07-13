<?php
    require_once("dbConection.php");
    $currentUser = $_POST['currentUser'];
    $totalOfCar = $_POST['totalOfCar'];
    $amountOfRecipes = $_POST['amountOfRecipes'];

    $query = "INSERT INTO car (id_car,id_user,recipes,total) value ('0','$currentUser','$amountOfRecipes','$totalOfCar')";
    $insert = mysqli_query($conn, $query);
    echo "Registro exitoso";
    header("location: ../pages/products.php");
    mysqli_close($conn);
?>