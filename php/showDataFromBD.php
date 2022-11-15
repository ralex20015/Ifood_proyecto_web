<?php
    include "dbConection.php";
    
    if (isset($_GET['search'])) {
        $textTyped = $_GET['search'];
        $query = mysqli_query($conn,"select * from `recipes` where name='$textTyped' || cost='$textTyped'");
    }else{
        $query = mysqli_query($conn,"select * from `recipes`");
                    
        
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
            <td data-label="Modificar"><button class="btn-Update">Modificar</button></td>
            <td data-label="Borrar"> 
                <a id="btn-Delete" href="../php/deleteRow.php?id='.$row["id_recipe"].'">Borrar</a>
            </td>  
        </tr>';
        } 
    }

    mysqli_close($conn); 
?>