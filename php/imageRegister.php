<?php
     include "dbConection.php";

     $name = $_POST["name"];
     $description = $_POST["description"];
     $cost = $_POST["cost"];
     $id_chef = $_POST["id_chef"];
     $image = $_POST["image"];

     $query = "INSERT INTO recipes (id_recipe,name,cost,description,image,id_chef) value ('0','$name','$cost','$description','$image','$id_chef')";
     $insert = mysqli_query($conn, $query);

     mysqli_close($conn);

     header("location: ../pages/recipes.php");

?>