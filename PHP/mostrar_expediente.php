<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expediente</title>
    <link rel="stylesheet" href="../CSS/stylesEE.css">
    <link rel="shortcut icon" href="../IMG/Pet.png">
</head>
<body>
<a id="a1" href="../HTML/principal.html" class="button3">Volver al Inicio</a>
</body>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "PetFileDB";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phone = $_POST['phone'];

    // Buscar propietario por teléfono
    $sql_owner = "SELECT * FROM propietarios WHERE telefono='$phone'";
    $result_owner = $conn->query($sql_owner);

    if ($result_owner->num_rows > 0) {
        // Mostrar datos del propietario y sus pacientes
        echo "<div class='container'>";
        while($row_owner = $result_owner->fetch_assoc()) {
            echo "<div class='section'>";
            echo "<h2>Datos del Propietario</h2>";
            echo "<p>Nombre: " . $row_owner["nombre"] . "</p>";
            echo "<p>Dirección: " . $row_owner["direccion"] . "</p>";
            echo "<p>Teléfono: " . $row_owner["telefono"] . "</p>";
            echo "<p>Email: " . $row_owner["email"] . "</p>";
            echo "</div>";

            // Buscar pacientes del propietario
            $sql_pet = "SELECT * FROM pacientes";
            $result_pet = $conn->query($sql_pet);

            if ($result_pet->num_rows > 0) {
                echo "<div class='section'>";
                echo "<h2>Datos del Paciente</h2>";
                while($row_pet = $result_pet->fetch_assoc()) {
                    echo "<p>Nombre: " . $row_pet["nombre"] . "</p>";
                    echo "<p>Especie: " . $row_pet["especie"] . "</p>";
                    echo "<p>Raza: " . $row_pet["raza"] . "</p>";
                    echo "<p>Sexo: " . $row_pet["sexo"] . "</p>";
                    echo "<p>Peso (kg): " . $row_pet["peso"] . "</p>";
                    echo "<p>CC: " . $row_pet["cc"] . "</p>";
                    echo "<p>Edad: " . $row_pet["edad"] . "</p>";
                    echo "<p>Color: " . $row_pet["color"] . "</p>";
                    echo "<p>Tipo de Alimentación: " . $row_pet["tipo_alimentacion"] . "</p>";
                    echo "<div class='section'>";
                    echo "<h3 class='section-title'>Motivo de Consulta</h3>";
                    echo "<p>" . $row_pet["motivo_consulta"] . "</p>";
                    echo "</div>";
                    echo "<div class='section'>";
                    echo "<h3 class='section-title'>Estado del Paciente</h3>";
                    echo "<p>F.C: " . $row_pet["fc"] . "</p>";
                    echo "<p>F.R: " . $row_pet["fr"] . "</p>";
                    echo "<p>Linfonodos: " . $row_pet["linfonodos"] . "</p>";
                    echo "<p>Mucosas: " . $row_pet["mucosas"] . "</p>";
                    echo "<p>%DH: " . $row_pet["dh"] . "</p>";
                    echo "<p>Pulso: " . $row_pet["pulso"] . "</p>";
                    echo "<p>TLL.C: " . $row_pet["tllc"] . "</p>";

                }
                echo "</div>";
            } else {
                echo "<p>No se encontraron pacientes para este propietario.</p>";
            }
        }
        echo "</div>";
    } else {
        echo "<div class='alert'>Expediente no encontrado</div>";
    }
}

$conn->close();
?>





