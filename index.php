<?php
    session_start();
    if (isset($_SESSION['id'])){
        if ($_SESSION['id'] == -1) {
            header("location: ./pages/adminPage.php");
        }else{
            header("location: ./pages/products.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>IFood</title>
    <link rel="icon" href="./Images/pizza-icon.png">
    <link rel="stylesheet" href="./CSS/styles.css">

</head>

<body>

    <!-- NAV -->
    <nav class="navbar bg-dark sticky-top">
        <div class="container">
            <a class="nav-link link-secondary p-0" href="#">IFood<img width="15" height="15"
                    src="./Images/pizza-icon.png"> </a>
            <ul class="nav justify-content-end">
                <li><a href="#" class="nav-link link-secondary">Inicio</a></li>
                <li><a class="nav-link link-secondary" href="pages/registerPage.php">Registrarse</a></li>
                <li><a class="nav-link link-secondary" href="pages/login.php">Login</a></li>
                <li><a class="nav-link link-secondary" href="pages/about.php">Acerca de</a></li>
            </ul>
        </div>
    </nav>


    <div class="container-fluid bg-dark text-white">
        <div class="container pb-5 pt-3">
            <div class="row flex-lg-row-reverse align-items-center g-5">

                <div class="col-lg-7">
                    <img src="./Images/pizza-png.png" class="d-block mx-lg-auto img-fluid" width=700 alt="Pizza">
                </div>

                <div class="col-lg-5">
                    <h1 class="display-5 fw-bold">Come cuando quieras</h1>
                    <p class="lead">¿Cansado de tener que esperar por tu comida? ¡Registrate ya y evita la larga espera!
                    </p>
                    <div class="justify-content-md-start">
                        <a href="./pages/registerPage.php"><button type="button" class="btn btn-primary btn-lg px-5 me-md-2">Registrarse</button></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Main -->
    <main class="container">

        <!-- photos -->
        <br id="photos">
        <div class="row text-center pt-3 pb-5 mb-3">

            <h2 class="pb-2 border-bottom d-flex justify-content-center">Algunos de nuestros platillos</h2>

            <div class="pt-5 px-4 col-lg-3">
                <img src="./Images/carpaccio.jpg" class="rounded-3 img-fluid" alt="...">
                <p class="pt-2">Carpaccio de salmón con limón</p>
            </div>
            <div class="pt-5 px-4 col-lg-3">
                <img src="./Images/lasagna.jpg" class="rounded-3 img-fluid" alt="...">
                <p class="pt-2">Lasagna</p>
            </div>
            <div class="pt-5 px-4 col-lg-3">
                <img src="./Images/risotto.jpg" class="rounded-3 img-fluid" alt="...">
                <p class="pt-2">Risotto con champiñones</p>
            </div>
            <div class="pt-5 px-4 col-lg-3">
                <img src="./Images/spaghetti.jpg" class="rounded-3 img-fluid" alt="...">
                <p class="pt-2">Spaghetti</p>
            </div>

        </div>

        <!-- quote -->
        <div class="bg-light p-5">
            <h2 class="mision text-center display-5">Misión</h2>
            <blockquote class="blockquote fs-2 pt-5">
                <p>Nuestra misión es ofrecerle a nuestros clientes el mejor servicio de comida italiana,
                     que puedan disfrutarla en tiempo record sin perder el delicioso sabor que la 
                     caracteriza.</p>
            </blockquote>

        </div>

        <!-- Sign Up -->
        <div class="py-5">
            <div class="p-5 my-5 bg-primary text-gray rounded-3" id="sign-up">
                <div class="row row-cols-auto">
                    <div class="col-md-1"></div>
                    <div class="col-md-7">
                        <h1 class="display-5 fw-bold">¿Qué esperas?</h1>
                        <p class="fs-4">¡Registrate para comenzar a disfrutar nuestros platillos!</p>
                    </div>
                    <div class="col-md-4 align-self-center d-flex justify-content-center">
                        <a href="./pages/registerPage.php"><button class="btn btn-outline-light btn-lg px-5" type="button">Sign Up</button></a>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <!-- Footer -->
    <footer class="bg-dark py-3">
        <p class="text-center text-muted py-3 m-0 fs-4">&copy; 2022 IFood</p>
    </footer>
</body>


</html>