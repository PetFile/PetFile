<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "citas";

$conn = mysqli_connect("localhost", "root", "", "citas");
// Verificamos la conexión
if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Registramos la cita
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fecha = $_POST["fecha"];
    $hora = $_POST["hora"];
    $descripcion = $_POST["descripcion"];

    $sql = "INSERT INTO citas (fecha, hora, descripcion) VALUES ('$fecha', '$hora', '$descripcion')";
    if (mysqli_query($conn, $sql)) {
        header('Location: ../HTML/citas.html');
    } else {
        echo "Error al registrar la cita: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>