<?php
    session_start();
    if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
        header('location:login.php');
        exit();
    }else {
        if (isset($_SESSION['id'])){
            if ($_SESSION['id'] == -1) {
                header("location:adminPage.php");
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
    <link rel="icon" href="../Images/pizza-icon.png">
    <link rel="stylesheet" href="../CSS/styles.css">
    <script src="../JavaScript/someName.js"></script>
    <title>Platillos</title>
</head>
<body id='content'>
    <header>
        <nav class="navbar bg-dark sticky-top">
            <div class="container">
                <a class="nav-link link-secondary p-0" href="../index.php">IFood<img width="15" height="15"
                        src="../Images/pizza-icon.png"> </a>
                <ul class="nav justify-content-end">
                    <li><a class="nav-link link-secondary" href="../index.php">Inicio</a></li>
                    <li><a class="nav-link link-secondary" href="../pages/about.php">Acerca de</a></li>
                    <li><a class="nav-link link-secondary" href="../php/logOut.php">LogOut</a></li>
                    <li><a class="nav-link link-secondary" href="#shopping-car"><div class="shopping-car" onclick="showModal()"></div></a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main class="container">
        <br id="photos">
        <div class="row text-center pt-3 pb-5 mb-3">
            
            <h2 class="pb-2 border-bottom d-flex justify-content-center">Nuestros platillos</h2>
            <div class="modal-container" id="shopping-car">
                <div class="modal">
                    <header class="modal-header">
                        <h2 class="modal-title">Tus platillos</h2>
                        <a href="#" class="modal-close"></a>
                    </header>
                    <div class="modal-content">
                    </div>
                    <div class="modal-footer">
                        <div class="new-Product">
                            <p class="totalText">Total</p>
                            <p id="total"></p>
                        </div>
                        <form action="../pdf.php" method='POST'>
                            <input type="submit" value='Generar PDF' class='btn btn-primary'>
                        </form>
                    </div>
                </div>
                
            </div>
            <?php
    include "../php/dbConection.php";

    $query = mysqli_query($conn,"select image,name,cost,id_recipe from `recipes`");
    if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_assoc($query)) {
            echo '<div class="pt-5 px-4 col-lg-3">
                    <img src="'.$row["image"].'" class="rounded-3 img-fluid" alt="...">
                    <p class="pt-2 btn-lg" id="recipeName'.$row["id_recipe"].'">'.$row["name"].'</p>
                    <p class="recipe-cost" id="recipeCost'.$row["id_recipe"].'">$'.$row["cost"].'</p>
                    <button class="btn btn-primary btn-lg px-5 me-md-2" id="'.$row["id_recipe"].'" onClick="addToCar(event)">Añadir al carro</button>
                </div>';
        } 
    }
    mysqli_close($conn); 
?>
        </div>

    </main>
    <!--  https://tipsparatuviaje.com/comidas-tipicas-en-italia/ -->
    <!--Risotto alla milanese-->
    <!--Sopa de minestrone-->
    <!--Ensalada Capresse-->
    <!--Ossobuco-->
    <!--Espaguetis a la carbonara-->
    <!--Grissinis-->
    <!--Caponata-->
    
    <footer class="bg-dark py-3">
        <p class="text-center text-muted py-3 m-0 fs-4">&copy; 2022 IFood</p>
    </footer>
</body>
</html>