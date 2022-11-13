<?php
    session_start();
    if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
        header('location:login.php');
        exit();
    }else {
        if (isset($_SESSION['id'])){
            if ($_SESSION['id'] == -1) {
                header("location:formProducts.php");
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
    <title>Platillos</title>
</head>
<body>
    <header>
        <nav class="navbar bg-dark sticky-top">
            <div class="container">
                <a class="nav-link link-secondary p-0" href="../index.php">IFood<img width="15" height="15"
                        src="../Images/pizza-icon.png"> </a>
                <ul class="nav justify-content-end">
                    <li><a class="nav-link link-secondary" href="../index.php">Inicio</a></li>
                    <li><a class="nav-link link-secondary" href="../pages/about.html">Acerca de</a></li>
                    <li><a class="nav-link link-secondary" href="../php/logOut.php">LogOut</a></li>

                </ul>
            </div>
        </nav>
    </header>

    <main class="container">
        <br id="photos">
        <div class="row text-center pt-3 pb-5 mb-3">

            <h2 class="pb-2 border-bottom d-flex justify-content-center">Nuestros platillos</h2>

            <div class="pt-5 px-4 col-lg-3">
                <img src="../Images/carpaccio.jpg" class="rounded-3 img-fluid" alt="...">
                <p class="pt-2 btn-lg">Carpaccio de salmón</p>
                <p class="recipe-cost">$250</p>
                <button class="btn btn-primary btn-lg px-5 me-md-2">Añadir al carro</button>
            </div>
            <div class="pt-5 px-4 col-lg-3">
                <img src="../Images/lasagna.jpg" class="rounded-3 img-fluid" alt="...">
                <p class="pt-2 btn-lg">Lasagna</p>
                <p class="recipe-cost">$180</p>
                <button class="btn btn-primary btn-lg px-5 me-md-2">Añadir al carro</button>
            </div>
            <div class="pt-5 px-4 col-lg-3">
                <img src="../Images/risotto.jpg" class="rounded-3 img-fluid" alt="...">
                <p class="pt-2 btn-lg">Risotto con champiñones</p>
                <p class="recipe-cost">$130</p>
                <button class="btn btn-primary btn-lg px-5 me-md-2">Añadir al carro</button>
            </div>
            <div class="pt-5 px-4 col-lg-3">
                <img src="../Images/spaghetti.jpg" class="rounded-3 img-fluid" alt="...">
                <p class="pt-2 btn-lg">Spaghetti</p>
                <p class="recipe-cost">$120</p>
                <button class="btn btn-primary btn-lg px-5 me-md-2">Añadir al carro</button>
            </div>

            <div class="pt-5 px-4 col-lg-3">
                <img src="../Images/ossobuco.jpg" class="rounded-3 img-fluid" alt="...">
                <p class="pt-2 btn-lg">Ossobuco con verduras</p>
                <p class="recipe-cost">$185</p>
                <button class="btn btn-primary btn-lg px-5 me-md-2">Añadir al carro</button>
            </div>

            <div class="pt-5 px-4 col-lg-3">
                <img src="https://tipsparatuviaje.com/wp-content/uploads/2020/03/ensalada-capresse-1024x683.jpg" class="rounded-3 img-fluid" alt="...">
                <p class="pt-2 btn-lg">Ensalda Capprese</p>
                <p class="recipe-cost">$140</p>
                <button class="btn btn-primary btn-lg px-5 me-md-2">Añadir al carro</button>
            </div>

            <div class="pt-5 px-4 col-lg-3">
                <img src="https://tipsparatuviaje.com/wp-content/uploads/2020/03/grissinis-comida-1024x683.jpg" class="rounded-3 img-fluid" alt="...">
                <p class="pt-2 btn-lg">Grissinis</p>
                <p class="recipe-cost">$100</p>
                <button class="btn btn-primary btn-lg px-5 me-md-2">Añadir al carro</button>
            </div>

            <div class="pt-5 px-4 col-lg-3">
                <img src="https://tipsparatuviaje.com/wp-content/uploads/2020/03/faina-con-carne-y-berenjena-1024x683.jpg" class="rounded-3 img-fluid" alt="...">
                <p class="pt-2 btn-lg">Faina con carne</p>
                <p class="recipe-cost">$205</p>
                <button class="btn btn-primary btn-lg px-5 me-md-2">Añadir al carro</button>
            </div>

            <div class="pt-5 px-4 col-lg-3">
                <img src="../Images/ragu-ternera.jpg" class="rounded-3 img-fluid" alt="...">
                <p class="pt-2 btn-lg">Ragú de ternera</p>
                <p class="recipe-cost">$230</p>
                <button class="btn btn-primary btn-lg px-5 me-md-2">Añadir al carro</button>
            </div>
            
            <div class="pt-5 px-4 col-lg-3">
                <img src="../Images/caponata.jpg" class="rounded-3 img-fluid" alt="...">
                <p class="pt-2 btn-lg">Caponata</p>
                <p class="recipe-cost">$185</p>
                <button class="btn btn-primary btn-lg px-5 me-md-2">Añadir al carro</button>
            </div>

            <div class="pt-5 px-4 col-lg-3">
                <img src="../Images/risotto-alla-milanese.jpg" class="rounded-3 img-fluid" alt="...">
                <p class="pt-2 btn-lg">Risotto alla milanese</p>
                <p class="recipe-cost">$150</p>
                <button class="btn btn-primary btn-lg px-5 me-md-2">Añadir al carro</button>
            </div>

            <div class="pt-5 px-4 col-lg-3">
                <img src="../Images/espagueti-carbonara.jpg" class="rounded-3 img-fluid" alt="...">
                <p class="pt-2 btn-lg">Spaghetti a la carbonara</p>
                <p class="recipe-cost">$150</p>
                <button class="btn btn-primary btn-lg px-5 me-md-2">Añadir al carro</button>
            </div>

            <div class="pt-5 px-4 col-lg-3">
                <img src="https://tipsparatuviaje.com/wp-content/uploads/2020/03/albondigas-comida-1024x683.jpg" class="rounded-3 img-fluid" alt="...">
                <p class="pt-2 btn-lg">Albóndigas</p>
                <p class="recipe-cost">$165</p>
                <button class="btn btn-primary btn-lg px-5 me-md-2">Añadir al carro</button>
            </div>

            <div class="pt-5 px-4 col-lg-3">
                <img src="../Images/ragu-verduras-guisado.jpg" class="rounded-3 img-fluid" alt="...">
                <p class="pt-2 btn-lg">Ragú de verduras guisadas</p>
                <p class="recipe-cost">$120</p>
                <button class="btn btn-primary btn-lg px-5 me-md-2">Añadir al carro</button>
            </div>

            <div class="pt-5 px-4 col-lg-3">
                <img src="../Images/arancini.jpg" class="rounded-3 img-fluid" alt="...">
                <p class="pt-2 btn-lg">Arancini de arroz</p>
                <p class="recipe-cost">$110</p>
                <button class="btn btn-primary btn-lg px-5 me-md-2">Añadir al carro</button>
            </div>

            <div class="pt-5 px-4 col-lg-3">
                <img src="../Images/baguette-relleno-ragu.jpg" class="rounded-3 img-fluid" alt="...">
                <p class="pt-2 btn-lg">Baghette relleno de ragú</p>
                <p class="recipe-cost">$135</p>
                <button class="btn btn-primary btn-lg px-5 me-md-2">Añadir al carro</button>
            </div>

            <div class="pt-5 px-4 col-lg-3">
                <img src="../Images/ragu-zanahora-papa-coliflor.jpg" class="rounded-3 img-fluid" alt="...">
                <p class="pt-2 btn-lg">Ragú de zanahoria</p>
                <p class="recipe-cost">$150</p>
                <button class="btn btn-primary btn-lg px-5 me-md-2">Añadir al carro</button>
            </div>


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