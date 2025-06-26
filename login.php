<?php
session_start();
include "model/conn.php"; 

if (isset($_POST["btniniciarsesion"])) {
    $usuario = $_POST["username"];
    $password = $_POST["password"];

    // Busca por correo o nombre
    $sql = "SELECT * FROM usuarios WHERE correo = '$usuario' OR nombre = '$usuario'";
    $resultado = $conn->query($sql);

    if ($resultado->num_rows == 1) {
        $usuarioData = $resultado->fetch_assoc();

     
        if (password_verify($password, $usuarioData["contraseña"])) {
            $_SESSION["user"] = $usuarioData["nombre"];
            $_SESSION["correo"] = $usuarioData["correo"];
            header("Location: index.php"); 
            exit();
        } else {
            echo "<div class='alert alert-danger text-center mt-3'>❌ Contraseña incorrecta.</div>";
        }
    } else {
        echo "<div class='alert alert-danger text-center mt-3'>❌ Usuario no encontrado.</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="assets/icons/conchas.png" type="image/x-icon">
</head>
<body class="bg-dark">
    <div class="container-fluid">
        <div class="d-flex vh-100 justify-content-center align-items-center">
            <div class="bg-dark border border-secondary rounded col-4 px-5 py-3">
                <div class="text-center text-white">
                    <h2><b>Inicio de sesión</b></h2>
                    <p>- Programación IV -</p>
                </div>
                <div class="text-white">
                    <form method="POST">
                        <label class="form-label">Usuario o Correo</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                            <input type="text" class="form-control bg-dark text-white" name="username" required>
                        </div>
                        <label class="form-label">Contraseña</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa-solid fa-key"></i></span>
                            <input type="password" class="form-control bg-dark text-white" name="password" required>
                        </div>
                        <div class="mt-4 text-center">
                            <button type="submit" class="btn btn-primary px-5" name="btniniciarsesion">Iniciar sesión</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/a5601269a3.js" crossorigin="anonymous"></script>
</body>
</html>