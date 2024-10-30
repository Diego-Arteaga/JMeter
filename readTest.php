<?php
$servername = "localhost";
$username = "usuario"; // Reemplaza con tu usuario de MariaDB
$password = "password"; // Reemplaza con tu contraseña de MariaDB
$dbname = "mi_proyecto"; // Reemplaza con el nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Comprobar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Consultar datos de la base de datos
$sql = "SELECT * FROM contactos";
$result = $conn->query($sql);

// Inicializar un array para almacenar los datos
$data = array();

if ($result->num_rows > 0) {
    // Recorrer los resultados y añadirlos al array
    while($row = $result->fetch_assoc()) {
        $data[] = $row; // Añadir cada fila al array
    }
}

// Establecer la cabecera de la respuesta a JSON
header('Content-Type: application/json');

// Devolver los datos en formato JSON
echo json_encode($data);

// Cerrar conexión
$conn->close();
?>
