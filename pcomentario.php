<?php
include "model/conn.php";
session_start();

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$nota = $_POST['nota'];

$sql = "INSERT INTO comentarios (nombre, correo, nota) VALUES ('$nombre', '$correo', '$nota')";
$conn->query($sql);

header("Location: index.php");
