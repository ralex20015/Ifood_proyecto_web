<?php
    session_start(); // Es usada al inicio de todas las paginas 
    //php que accedan a la información almacenada en las

    if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
        header('location:login.php');
        exit();
    }else{
        if (isset($_SESSION['id'])){
            if ($_SESSION['id'] != -1) {
                header("location:products.php");
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/register.css">
    <link rel="icon" href="../Images/pizza-icon.png">
    <title>Registro de productos</title>
</head>
<body>
    <header>
        <nav class="navbar bg-dark sticky-top">
            <div class="container">
                <a class="nav-link link-secondary p-0" href="../index.php">IFood<img width="15" height="15"
                        src="../Images/pizza-icon.png"> </a>
                <ul class="nav justify-content-end">
                    <li><a class="nav-link link-secondary" href="#">Inicio</a></li>
                    <li><a class="nav-link link-secondary" href="../pages/recipes.php">Añadir</a></li>
                    <li><a class="nav-link link-secondary" href="../php/logOut.php">LogOut</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <h2>Registro de prouctos</h2>
    <form class="container2" action="../php/imageRegister.php" method="POST">
        <p class="element"> 
            <label for="name">Nombre</label>
            <input type="text" name="name">
            
        </p>
        <p class="element">
            <label for="description">Descripción</label>
            <input type="text" name="description">
        </p>
        <p class="element">
            <label for="cost">Costo</label>
            <input type="text" name="cost">
        </p>
        <p class="element">
            <label for="id_chef">Id del chef</label>
            <input type="text" name="id_chef">
        </p>
        <p class="element">
            <label for="Link de la imagen">Link de la imagen</label>
            <input type="text" name="image">
        </p>
        <button type="submit">Registrar</button>
    </form>
</body>
</html>