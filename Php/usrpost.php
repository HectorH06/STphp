<?php
include_once('conexion.php');
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $id = $_POST["Correo"];
    $pass = $_POST["Contrasenia"];
    if (empty($id) || empty($pass)) {
        echo "Correo y contraseña son requeridos";
    } else {
        $query = "INSERT INTO Login_ST (Correo, Contrasenia) VALUES ('$id', '$pass')";
        if ($link->query($query) == TRUE) {
            echo "Nuevo registro insertado correctamente";
        } else {
            echo "Error al insertar el registro: " . $link->error;
        }
    }
    $link->close();
}
?>