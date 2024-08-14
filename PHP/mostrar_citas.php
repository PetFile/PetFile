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

// Mostramos las citas registradas
$sql = "SELECT * FROM citas";
$result = mysqli_query($conn, $sql);

$citas = array();
while ($row = mysqli_fetch_assoc($result)) {
    $citas[] = $row;
}

// Convertimos el array a JSON
$json = json_encode($citas);

// Enviamos el JSON como respuesta
header('Content-Type: application/json');
echo $json;

mysqli_close($conn);
?>