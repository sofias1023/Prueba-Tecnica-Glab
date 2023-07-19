<?php
//conexion a la base de datos
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "Reservas"; 


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}

// Recuperacion variables del formulario
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$tipo_documento = $_POST['tipo_documento'];
$identificacion = $_POST['identificacion'];
$email = $_POST['email'];
$fecha_reserva = $_POST['fecha_reserva'];
$tipo_reserva = $_POST['tipo_reserva'];
$cantidad_personas = $_POST['cantidad_personas'];
$descripcion = $_POST['descripcion'];

// Consulta SQL para añadir
$sql = "INSERT INTO reservas (nombres, apellidos, tipo_documento, identificacion, email, fecha_reserva, tipo_reserva, cantidad_personas, descripcion) 
        VALUES ('$nombres', '$apellidos', '$tipo_documento', '$identificacion', '$email', '$fecha_reserva', '$tipo_reserva', '$cantidad_personas', '$descripcion')";


if ($conn->query($sql) === TRUE) {
    echo "Los datos se han guardado correctamente.";
} else {
    echo "Error al guardar los datos: " . $conn->error;
}

$conn->close();
?>
