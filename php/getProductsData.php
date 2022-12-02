<?php
    include "dbConection.php";

    $query = mysqli_query($conn,"select image,name,cost from `recipes`");

    if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_assoc($query)) {
            echo '<div class="pt-5 px-4 col-lg-3">
                    <img src="'.$row["image"].'" class="rounded-3 img-fluid" alt="...">
                    <p class="pt-2 btn-lg">'.$row["name"].'</p>
                    <p class="recipe-cost">$'.$row["cost"].'</p>
                    <button class="btn btn-primary btn-lg px-5 me-md-2" 
                    onClick="addToCar("'.$row["name"].'",'.$row["cost"].')">Añadir al carro</button>
                </div>';
        } 
    }else{
        echo 'error';
    }

    mysqli_close($conn); 
?>