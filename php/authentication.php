<?php
    include "dbConection.php";
    $email = $_POST["email"];
    $pass = $_POST["pass"];

    $consulta = mysqli_query($conn, "SELECT * FROM users where correo = '$email' && pass = '$pass'");
    if ($email == "admin@admin.com" && $pass == "S1a2n3d4r5a0") {
        session_start();
        $_SESSION['id']= -1;
        header("location: ../pages/formProducts.php");
        echo "No hago nada";
    }else if (mysqli_num_rows($consulta)<1) {  
        $_SESSION['msg']="Login Failed, User not found!";
        header("location: ../pages/login.php");
    }else{
	    session_start();
        $rows = mysqli_fetch_array($consulta);
        $_SESSION['id'] = $rows['id'];
        header("location: ../pages/products.php");
    }
    mysqli_close($conn);

?>