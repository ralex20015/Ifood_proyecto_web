<?php
    include "dbConection.php";
    $email = $_POST["email"];
    $pass = $_POST["pass"];

    $consulta = mysqli_query($conn, "SELECT * FROM users where correo = '$email' && pass = '$pass'");
    $rows = mysqli_fetch_array($consulta);
    if ($rows) {
        session_start();

        $_SESSION['email'] = $email;
        header("location: ../pages/products.html");
    }else{
        header("location: ../pages/login.html");
        
    }

    mysqli_close($conn);

?>