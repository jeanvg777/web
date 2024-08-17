<?php

include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Nombre = $_POST['Nombre'];
    $Documento = $_POST['Documento'];
    $Fecha_de_Nacimiento = $_POST['Fecha_de_Nacimiento'];
    $Email = $_POST['Email'];
    $Direccion = $_POST['Direccion'];
    $Telefono = $_POST['Telefono'];

    $stmt = $conn->prepare("INSERT INTO estudiantes (Nombre, Documento, Fecha_de_Nacimiento, Email, Direccion, Telefono) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $Nombre, $Documento, $Fecha_de_Nacimiento, $Email, $Direccion, $Telefono);

    if ($stmt->execute()) {
        echo "Formulario Completado!!!";
    } else {
        echo "Error: " . $stmt->error;
    }

    
    $stmt->close();
    $conn->close();
}
?>
