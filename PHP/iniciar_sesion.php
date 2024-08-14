<?php
session_start();
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Preparar y ejecutar la consulta
    $stmt = $conn->prepare("SELECT * FROM users WHERE nombre = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    // Verificar si se encontró el usuario
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Verificar la contraseña
        if (password_verify($password, $row['password'])) {
            // Redirigir a la página principal
            header("Location: ../HTML/principal.html");
            exit();
        } else {
            // Contraseña incorrecta
            header("Location: ../HTML/index.html");
            exit();
        }
    } else {
        // Usuario no encontrado
        header("Location: ../HTML/index.html");
        exit();
    }
} else {
    header("Location: ../index.html");
    exit();
}

$stmt->close();
$conn->close();
?>
