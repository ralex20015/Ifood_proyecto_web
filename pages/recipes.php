<?php
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
    <script type="text/javascript" src="../JavaScript/requests.js"></script>
    <title>Platillos</title>
</head>
<body>
    <header>
        <nav class="navbar bg-dark sticky-top">
            <div class="container">
                <a class="nav-link link-secondary p-0" href="../index.php">IFood<img width="15" height="15"
                        src="../Images/pizza-icon.png"> </a>
                <ul class="nav justify-content-end">
                    <li><a class="nav-link link-secondary" href="./adminPage.html">Inicio</a></li>
                    <li><a class="nav-link link-secondary" href="../pages/formProducts.php">Añadir</a></li>
                    <li><a class="nav-link link-secondary" href="../php/logOut.php">LogOut</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <div class="container2">
            <h2 class="title">Platillos</h2>
            <p class="search-bar">
                <input type="text" name="searchBar" placeholder="Buscar algo" id="searchBar" onkeydown="searchBasedOnKeysPressed(event)">
                <button name="ok" onclick="showValuesWithTheSearch()">Search</button>
            </p>
        </div>
        <table>
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
            <tbody id="example">
                <?php
                    include "../php/showDataFromBD.php"; 
                ?>
            </tbody>
        </table>
    </main>
    <footer class="bg-dark py-3">
        <p class="text-center text-muted py-3 m-0 fs-4">&copy; 2022 IFood</p>
    </footer>
</body>
</html>