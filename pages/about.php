<?php
    session_start();
    if (isset($_SESSION['id'])){
        if ($_SESSION['id'] == -1) {
            header("location: ./adminPage.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IFood</title>
    <link rel="stylesheet" href="../CSS/styles.css">
    <link rel="icon" href="../Images/pizza-icon.png">
</head>

<body>

    <nav class="navbar bg-dark sticky-top">
        <div class="container">
            <a class="nav-link link-secondary p-0" href="../index.php">IFood<img width="15" height="15"
                    src="../Images/pizza-icon.png"> </a>
            <ul class="nav justify-content-end">
                <li><a href="../index.php" class="nav-link link-secondary">Inicio</a></li>
                <?php 
                    if (!isset($_SESSION['id'])){
                        echo '<li><a class="nav-link link-secondary" href="../pages/registerPage.php">Registarse</a></li>
                            <li><a class="nav-link link-secondary" href="../pages/login.php">Login</a></li>';
                    }else{
                        echo '<li><a class="nav-link link-secondary" href="../php/logOut.php">LogOut</a></li>';
                        echo '<li><a class="nav-link link-secondary" href="http://192.168.1.85:81/webdav/">Reportes</a></li>';
                        echo '<li>
                                <a class="nav-link link-secondary" href="#">
                                    <div class="shopping-car"></div>
                                </a>
                            </li>';
                    }
                ?>
            </ul>
        </div>
    </nav>

    <main>
        <section>
            <div class="container2 p-5">
                <div class="ct-objectives">
                    <h2 class="mision text-center display-5">Vision</h2>
                    <div class="body-ct-objective">
                        <p class="lead">A través de un compromiso compartido con la excelencia, nos dedicamos a la calidad
                            inquebrantable
                            de nuestra comida, servicio, gente y ganancias, mientras cuidamos excepcionalmente a nuestros
                            huéspedes y personal. Nos esforzaremos continuamente por superar nuestros propios logros y ser
                            reconocidos como líderes en nuestra industria.</p>
                    </div>
                </div>

                <div class="images pt-5 px-4 col-lg-3">
                    <img src="../Images/vision.jpg" class="rounded-3 img-fluid" alt="Visión del negocio">
                </div>

            </div>
            <div class="container2-reverse p-5">

                <div class="pt-5 px-4 col-lg-3">
                    <img src="../Images/Mision.jpg" class="rounded-3 img-fluid" alt="Misión del negocio">
                </div>

                <div class="ct-objectives">
                    <h2 class="mision text-center display-5">Objetivo</h2>
                    <div class="body-ct-objective">
                        <p class="lead">Ofrecer un servicio de calidad,
                            sin necesidad de una espera larga para así satisfacer las necesidades de los
                            clientes.</p>
                    </div>
                </div>

            </div>
        </section>
        <section>
            <div class="container2">

                <div class="ubication">
                    <h2 class="mision text-center display-5">¿Donde encontrarnos?</h2>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3735.412835659057!2d-103.30883917013185!3d20.5711916647337!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842f4cd4108c7c2b%3A0x1afcadf4fab00999!2sP.%C2%BA%20de%20los%20Sauces%2C%20Minerales%2C%20Ermita%2C%2045693%20Las%20Pintitas%2C%20Jal.!5e0!3m2!1ses!2smx!4v1663258089169!5m2!1ses!2smx"
                        style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-dark py-3">
        <p class="text-center text-muted py-3 m-0 fs-4">&copy; 2022 IFood</p>
    </footer>
</body>

</html>