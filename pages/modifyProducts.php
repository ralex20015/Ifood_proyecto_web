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
    <script src="../JavaScript/someName.js"></script>
    <title>Registro de productos</title>
</head>
<body>
    <header>
        <nav class="navbar bg-dark sticky-top">
            <div class="container">
                <a class="nav-link link-secondary p-0" href="./adminPage.php">IFood<img width="15" height="15"
                        src="../Images/pizza-icon.png"> </a>
                <ul class="nav justify-content-end">
                    <li><a class="nav-link link-secondary" href="./adminPage.php">Inicio</a></li>
                    <li><a class="nav-link link-secondary" href="../pages/recipes.php">Ver</a></li>
                    <li><a class="nav-link link-secondary" href="../pages/formProducts.php">Añadir</a></li>
                    <li><a class="nav-link link-secondary" href="../php/logOut.php">LogOut</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <h2 class="text-center py-3">Registro de productos</h2>
    <main class="sl-cont">
        <?php 
            include "../php/dbConection.php";
            $id = $_GET['id'];
            $query = mysqli_query($conn,"select * from `recipes` where id_recipe='$id'");

            $result = mysqli_fetch_assoc($query);
            $name = $result['name'];
            $description = $result['description'];
            $cost = $result['cost'];
            $id_chef = $result['id_chef'];
            $image = $result['image'];
        ?>
        <form class="container2" action="../php/updateRow.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $id;?>">
            <p class="element"> 
                <label for="name">Nombre</label>
                <input type="text" name="name" value="<?php echo $name;?>">
                
            </p>
            <p class="element">
                <label for="description">Descripción</label>
                <input type="text" name="description" value="<?php echo $description;?>">
            </p>
            <p class="element">
                <label for="cost">Costo</label>
                <input type="text" name="cost" value="<?php echo $cost;?>">
            </p>

            <p class="element">
                <label for="id_chef">Id del chef</label>
                <input type="text" name="id_chef" value="<?php echo $id_chef;?>">
            </p>
    
            <!-- <div class="radio-container">
                <p style="display: inline-block;" id="load" onclick="markRadio()">
                    <input type="radio" name="subir" value="upload" id="uploadImage">
                    <label for="subir">Subir imagen</label>
                </p>
                <p style="display: inline-block;" id="link" onclick="markRadio()">
                    <input type="radio" name="subir" value="link" id="addFromLink">
                    <label for="link">Añadir link de la imagen</label>
                </p>
            </div> -->
            <p class="element">
                <label for="image">Link de la imagen</label>
                <input type="text" name="image" value="<?php echo $image;?>">
            </p>
            <button type="submit">Modificar</button>
        </form>
    </main>


    <footer class="bg-dark py-3">
        <p class="text-center text-muted py-3 m-0 fs-4">&copy; 2022 IFood</p>
    </footer>
</body>
</html>