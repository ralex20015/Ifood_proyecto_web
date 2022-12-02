<?php
    session_start();

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
    <title>Tables</title>
</head>
<body>
    <header>
        <nav class="navbar bg-dark sticky-top">
            <div class="container">
                <a class="nav-link link-secondary p-0" href="#">IFood<img width="15" height="15"
                        src="../Images/pizza-icon.png"> </a>
                <ul class="nav justify-content-end">
                    <li><a class="nav-link link-secondary" href="#">Inicio</a></li>
                    <li><a class="nav-link link-secondary" href="../php/logOut.php">LogOut</a></li>
                </ul>
            </div>
        </nav>
    </header>

    

    <main class="sl-cont">
        <a href="../pages/recipes.php" class="container3">
            <div class="">
                <h2>Platillos</h2>
                <img src="https://img.freepik.com/free-photo/flat-lay-assortment-with-delicious-brazilian-food_23-2148739179.jpg?w=900&t=st=1668384883~exp=1668385483~hmac=f062b9b941411e8d3645d12a2fd3bb8c0a6c2867b592d8cd2404dfcb84a846aa" alt="Platillos">
            </div>
        </a>

        <a href="../pages/chefs.php" class="container3">
            <div class="">
                <h2>Chefs</h2>
                <img src="https://img.freepik.com/free-vector/composition-from-hat-chef-with-red-lettering-mustache-crossed-knives-white-background-vector-illustration_1284-18021.jpg?w=900&t=st=1668382802~exp=1668383402~hmac=f98a8edfe1f94121ce328e1887a63e47885447ef3cc853718a49d29239e58cb0" alt="Chef hat">
            </div>
        </a>
    </main>

<footer class="bg-dark py-3">
    <p class="text-center text-muted py-3 m-0 fs-4">&copy; 2022 IFood</p>
</footer>
</body>
</html>