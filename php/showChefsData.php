<?php
    include "dbConection.php";
    
    if (isset($_GET['search'])) {
        $textTyped = $_GET['search'];
        $query = mysqli_query($conn,"select * from `chefs` where chef_name='$textTyped' 
            || chef_lastName='$textTyped'");
    }else{
        $query = mysqli_query($conn,"select * from `chefs`");
    }

    if (isset($_GET['keyPressed'])) {
        $textTyped = $_GET['keyPressed'];
        $text = 'select * from `chefs` where chef_name LIKE "'.$textTyped.'%" OR 
            chef_lastName LIKE "'.$textTyped.'%"';
        $query = mysqli_query($conn,$text);
    }

    if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_assoc($query)) {
            echo '<tr>
            <td scope="col">'.$row["id_chef"].'</td>
            <td scope="col">'.$row["chef_name"].'</td>
            <td scope="col">'.$row["chef_lastName"].'</td>
            <td scope="col">'.$row["chef_rfc"].'</td>
            <td scope="col">'.$row["chef_address"].'</td>
            <td data-label="Modificar"><a class="btn btn-primary" id="btn-Delete" href="../pages/modifyChefs.php?id='.
                $row["id_chef"].'">Modificar</a></td>
            <td data-label="Borrar"> 
                <a class="btn btn-primary" id="btn-Delete" href="../php/deleteRow.php?id='.
                $row["id_chef"].'">Borrar</a>
            </td>  
        </tr>';
        } 
    }

    mysqli_close($conn); 
?>