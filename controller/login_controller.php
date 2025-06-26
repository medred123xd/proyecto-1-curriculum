<?php
session_start();
include "model/conn.php";

if (!empty($_POST["btniniciarsesion"])) {
    $usuario = $_POST["username"];
    $clave = $_POST["password"];

    if (!empty($usuario) && !empty($clave)) {

      
        $sql = "SELECT * FROM usuarios WHERE correo = '$usuario' OR nombre = '$usuario'";
        $resultado = $conn->query($sql);

        if ($resultado->num_rows > 0) {
            $usuarioData = $resultado->fetch_assoc();

           
            if (password_verify($clave, $usuarioData["contraseña"])) {
                $_SESSION["id"] = $usuarioData["id"]; 
                $_SESSION["user"] = $usuarioData["nombre"];
                $_SESSION["correo"] = $usuarioData["correo"];

                // Redirige al index o página principal
                header("location:index.php");
            } else {
                echo '<div class="alert alert-danger mt-3">❌ Contraseña incorrecta</div>';
            }
        } else {
            echo '<div class="alert alert-danger mt-3">❌ Usuario no encontrado</div>';
        }

    } else {
        echo '<div class="alert alert-warning mt-3">⚠️ Todos los campos son obligatorios</div>';
    }
}
?>