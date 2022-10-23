<?php
     include "dbConection.php";

     $name = $_POST["nombre"];
     $email = $_POST["email"];
     $pass = $_POST["pass"];
     $rep_pass = $_POST["rep_pass"];
     if ($pass != $rep_pass) {
          echo "Las contraseñas no coinciden";
     }else{
          $query = "INSERT INTO users (id,nombre,correo,pass) value ('0','$name','$email','$pass')";
   
          $insert = mysqli_query($conn, $query);
          echo "Registro exitoso";
          header("location: ../pages/login.html");
     }

     mysqli_close($conn);

?>