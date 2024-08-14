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
    $ownerName = $_POST['ownerName'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $petName = $_POST['petName'];
    $species = $_POST['species'];
    $breed = $_POST['breed'];
    $sex = $_POST['sex'];
    $weight = $_POST['weight'];
    $cc = $_POST['cc'];
    $age = $_POST['age'];
    $color = $_POST['color'];
    $foodType = $_POST['foodType'];
    $consultationReason = $_POST['consultationReason'];
    $fc = $_POST['fc'];
    $fr = $_POST['fr'];
    $linfonodos = $_POST['linfonodos'];
    $mucosas = $_POST['mucosas'];
    $dh = $_POST['dh'];
    $pulse = $_POST['pulse'];
    $tllc = $_POST['tllc'];

    // Insertar datos del propietario
    $sql_owner = "INSERT INTO propietarios (nombre, direccion, telefono, email) VALUES ('$ownerName', '$address', '$phone', '$email')";
    
    if ($conn->query($sql_owner) === TRUE) {
        $owner_id = $conn->insert_id;

        // Insertar datos del paciente
        $sql_pet = "INSERT INTO pacientes (nombre, especie, raza, sexo, peso, cc, edad, color, tipo_alimentacion, motivo_consulta, fc, fr, linfonodos, mucosas, dh, pulso, tllc) 
                    VALUES ('$petName', '$species', '$breed', '$sex', '$weight', '$cc', '$age', '$color', '$foodType', '$consultationReason', '$fc', '$fr', '$linfonodos', '$mucosas', '$dh', '$pulse', '$tllc')";

        if ($conn->query($sql_pet) === TRUE) {
            header('Location: ../HTML/PGuardar.html');
        } else {
            echo "Error: " . $sql_pet . "<br>" . $conn->error;
        }
    } else {
        echo "Error: " . $sql_owner . "<br>" . $conn->error;
    }
}

$conn->close();
?>
