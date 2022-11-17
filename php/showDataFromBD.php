<?php
    include "dbConection.php";
    
    if (isset($_GET['search'])) {
        $textTyped = $_GET['search'];
        $query = mysqli_query($conn,"select * from `recipes` where name='$textTyped' || cost='$textTyped'");
    }else{
        $query = mysqli_query($conn,"select * from `recipes`");
    }

    if (isset($_GET['keyPressed'])) {
        $textTyped = $_GET['keyPressed'];
        $text = 'select * from `recipes` where name LIKE "'.$textTyped.'%" OR cost LIKE "'.$textTyped.'%"';
        $query = mysqli_query($conn,$text);
    }

    if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_assoc($query)) {
            echo '<tr>
            <td data-label="Id">'.$row["id_recipe"].'</td>
            <td data-label="Nombre">'.$row["name"].'</td>
            <td data-label="Costo">'.$row["cost"].'</td>
            <td data-label="Descripcion">'.$row["description"].'</td>
            <td data-label="Imagen">'.$row["image"].'</td>
            <td data-label="Chef">'.$row["id_chef"].'</td>
            <td data-label="Modificar"><a class="btn btn-primary" id="btn-Delete" href="../pages/modifyProducts.php?id='.
                $row["id_recipe"].'">Modificar</a></td>
            <td data-label="Borrar"> 
                <a class="btn btn-primary" id="btn-Delete" href="../php/deleteRow.php?id='.
                $row["id_recipe"].'">Borrar</a>
            </td>  
        </tr>';
        } 
    }

    mysqli_close($conn); 
?>