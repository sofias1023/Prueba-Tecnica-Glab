<?php
    header("Content-Type: text/html;charset=utf-8");
    $email = $_POST['email'];
    $password = $_POST['password'];

    $conexion=mysqli_connect("localhost", "root", "", "reservas");
    $consultar="SELECT * FROM administradores WHERE email='$email' and password='$password'";
    $resultado=mysqli_query($conexion, $consultar);

    $filas=mysqli_num_rows($resultado);

    if($filas>0){
        header("location:Bienvenido.html");

    }else{
        echo "Error en la autenticacion";
    }

    mysqli_free_result($resultado);
    mysqli_close($conexion);
    
    ?>
