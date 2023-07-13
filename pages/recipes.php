<?php
    session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/styles.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
    <script rel="text/javascript" src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <link rel="icon" href="../Images/pizza-icon.png">
    <!--<script type="text/javascript" src="../JavaScript/requests.js"></script>-->
    <title>Platillos</title>
</head>
<body>
    <header>
        <nav class="navbar bg-dark sticky-top">
            <div class="container">
                <a class="nav-link link-secondary p-0" href="../index.php">IFood<img width="15" height="15"
                        src="../Images/pizza-icon.png"> </a>
                <ul class="nav justify-content-end">
                    <li><a class="nav-link link-secondary" href="./adminPage.php">Inicio</a></li>
                    <li><a class="nav-link link-secondary" href="../pages/formProducts.php">Añadir</a></li>
                    <li><a class="nav-link link-secondary" href="../php/logOut.php">LogOut</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <div class="container2">
            <h2 class="title">Platillos</h2>
        </div>
        <div id="table-container">
        <table id="tablaRecetas" >
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Costo</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Id_chef</th>
                </tr>                
            </thead>
            <tbody>
                <!-- llenado por javascript -->
            </tbody>
        </table>
        </div> 
    <script rel="text/javascript" src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../JavaScript/recipes.js"></script>
</main>
    <footer class="bg-dark py-3">
        <p class="text-center text-muted py-3 m-0 fs-4">&copy; 2022 IFood</p>
    </footer>
</body>
</html>