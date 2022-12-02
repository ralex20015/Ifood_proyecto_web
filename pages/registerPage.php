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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/register.css">
    <link rel="icon" href="../Images/pizza-icon.png">
    <title>Registro</title>
</head>
<body>
    <header>
        <nav class="navbar bg-dark sticky-top">
            <div class="container">
                <a class="nav-link link-secondary p-0" href="../index.php">IFood<img width="15" height="15"
                        src="../Images/pizza-icon.png"> </a>
                <ul class="nav justify-content-end">
                    <li><a class="nav-link link-secondary" href="../index.php">Inicio</a></li>
                    <li><a class="nav-link link-secondary" href="../pages/login.php">Login</a></li>
                    <li><a class="nav-link link-secondary" href="../pages/about.php">Acerca de</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main class="bg-image muted">
    </main>
    <section>
        <form class="container2 login" action="../php/register.php" method="post">
            <h2 class="title">Registro</h2>
            <p class="element">
                <input type="text" name="nombre" required placeholder="Nombre">
            </p>
            <p class="element">
                <input type="email" name="email" required placeholder="Correo">
            </p>
            <p class="element">
                <input type="password" name="pass" required placeholder="Contraseña">
            </p>
            <p class="element">
                <input type="password" name="rep_pass" required placeholder="Repetir Contraseña">
            </p>
            <button type="submit">Registrarse</button>
            <a href="login.php" class="already-registered">¿Ya tienes cuenta? Inicia sesión</a>
        </form>
    </section>
    <footer class="bg-dark py-3">
        <p class="text-center text-muted py-3 m-0 fs-4">&copy; 2022 IFood</p>
    </footer>
</body>
</html>