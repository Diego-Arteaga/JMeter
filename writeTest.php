<?php
$servername = "localhost";
$username = "usuario";
$password = "root123";
$dbname = "mi_proyecto";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Generar valores aleatorios
$nombre = "Nombre " . rand(1, 100); // Nombre aleatorio
$email = "usuario" . rand(1, 100) . "@ejemplo.com"; // Email aleatorio
$mensaje = "Este es un mensaje aleatorio " . rand(1, 100); // Mensaje aleatorio

$sql = "INSERT INTO contactos (nombre, email, mensaje) VALUES ('$nombre', '$email', '$mensaje')";

if ($conn->query($sql) === TRUE) {
    echo "Datos insertados correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

