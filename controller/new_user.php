<?php
if (isset($_POST["btnregistrar"])) {
    include "model/conn.php";

    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $contraseña = $_POST["contraseña"];

    $claveCifrada = password_hash($contraseña, PASSWORD_DEFAULT);


    $sql = "INSERT INTO usuarios (nombre, correo, contraseña) VALUES ('$nombre', '$correo', '$claveCifrada')";
    $conn->query($sql);

    echo "<div class='alert alert-success'>✅ Usuario registrado correctamente.</div>";
}
?>