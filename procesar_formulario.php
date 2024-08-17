<?php

include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Nombre = htmlspecialchars($_POST['Nombre']);
    $Documento = htmlspecialchars($_POST['Documento']);
    $Fecha_de_Nacimiento = htmlspecialchars($_POST['Fecha_de_Nacimiento']);
    $Email = htmlspecialchars($_POST['Email']);
    $Direccion = htmlspecialchars($_POST['Direccion']);
    $Telefono = htmlspecialchars($_POST['Telefono']);

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
