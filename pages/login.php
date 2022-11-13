<?php
    session_start();

    if (isset($_SESSION['id'])){
        if ($_SESSION['id'] == -1) {
            header("location:formProducts.php");
        }else{
            header("location:products.php");
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
    <title>Login</title>
</head>
<body>
    <header>
        <nav class="navbar bg-dark sticky-top">
            <div class="container">
                <a class="nav-link link-secondary p-0" href="../index.php">IFood<img width="15" height="15"
                        src="../Images/pizza-icon.png"> </a>
                <ul class="nav justify-content-end">
                    <li><a class="nav-link link-secondary" href="../index.php">Inicio</a></li>
                    <li><a class="nav-link link-secondary" href="../pages/register.html">Registrarse</a></li>
                    <li><a class="nav-link link-secondary" href="../pages/about.html">Acerca de</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main class="bg-image muted">
    </main>
    <section>
        <form action="../php/authentication.php" method="post" class="container2 login">
            <img src="../Images/user.svg" alt="user image" class="user-image">
            <p class="element">
                <input type="email" name="email" placeholder="Correo">
            </p>
            <p class="element">
                <input type="password" name="pass" placeholder="Contraseña">
            </p>
            <button>Iniciar Sesión</button>
            <p class="element">¿Aún no tienes cuenta?<a href="../pages/register.html" class="already-registered"> Click aquí para registrarte</a></p>
        </form>
    </section>

    <footer class="bg-dark py-3">
        <p class="text-center text-muted py-3 m-0 fs-4">&copy; 2022 IFood</p>
    </footer>

</body>
</html>