<?php
include_once('conexion.php');
if ($_SERVER["REQUEST_METHOD"] == "GET")
{
    $id = isset($_GET["Correo"]) ? $_GET["Correo"] : '';
    $pass = isset($_GET["Contrasenia"]) ? $_GET["Contrasenia"] : '';
    var_dump($id);
  	var_dump($pass);
    if (empty($id) || empty($pass)) {
        echo "Correo y contraseña son requeridos";
      	die();
    }
    
    $query = "SELECT * FROM Login_ST WHERE Correo='$id' AND Contrasenia='$pass'";
  	var_dump($query);
  	var_dump($conn);
    $result = mysqli_query($conn, $query);
  	var_dump($result);
  	if (mysqli_num_rows($result) == 0) {
    die("No se encontraron resultados");
	}
    if (!$result) {
        die("No funcionó");
    }
    
  	
    $array = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $array[] = $row;
    }
 	if (mysqli_num_rows($result) == 1) {
    die("No se encontraron resultados");
	}
    var_dump($array);
    echo "Query exitosa";
    echo json_encode($array);
    
    mysqli_free_result($result);
    mysqli_close($conn);
}
?>