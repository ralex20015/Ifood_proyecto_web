<?php
    include '../php/dbConection.php';
    session_start(); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/tables.css">
    <link rel="icon" href="../Images/pizza-icon.png">
    <title>Platillos</title>
</head>
<body>
    <header>
        <nav class="navbar bg-dark sticky-top">
            <div class="container">
                <a class="nav-link link-secondary p-0" href="../index.php">IFood<img width="15" height="15"
                        src="../Images/pizza-icon.png"> </a>
                <ul class="nav justify-content-end">
                    <li><a class="nav-link link-secondary" href="#">Inicio</a></li>
                    <li><a class="nav-link link-secondary" href="../pages/formProducts.php">Añadir</a></li>
                    <li><a class="nav-link link-secondary" href="../php/logOut.php">LogOut</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <table>
            <caption>Platillos</caption>
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Costo</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Id_chef</th>
                    <th scope="col">Modificar</th>
                    <th scope="col">Borrar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $query = mysqli_query($conn,"select * from `recipes`");
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
                                <form action="../php/deleteRow.php" method="post">
                                    <button class="btn-Delete" type="submit" name="btn-Delete">Borrar</button>
                                </form>
                            </td>
                           
                            
                        </tr>';
                    }
                   }     
                ?>
            </tbody>
        </table>
    </main>
</body>
</html>