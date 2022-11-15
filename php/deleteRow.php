<?php
    // Tengo que ver lo de los prepare statements para prevenir inyecciones sql
    include 'dbConection.php';
    
    $id = $_GET['id'];
    $query = "DELETE FROM recipes WHERE id_recipe = '$id'";

    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
?>