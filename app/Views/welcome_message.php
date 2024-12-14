<?php
// Incluye el archivo del controlador "consultaController.php", que se encuentra en la carpeta "app\Controllers".
// 'require_once' asegura que el archivo se cargue solo una vez para evitar errores por inclusión duplicada.
require_once "app\Controllers\consultaController.php";

// Crea una nueva instancia de la clase consultaController, que se encuentra en el archivo incluido.
// Esto permite acceder a los métodos definidos dentro de esa clase.
$consultaController = new consultaController;

// Llama al método 'consultaApi()' de la instancia 'consultaController'.
// Se asume que este método realiza una consulta (posiblemente a una API externa o una base de datos) y devuelve los datos.
$datos = $consultaController->consultaApi();

// Convierte los datos obtenidos en formato JSON y los imprime como respuesta.
// Esto es útil para enviar datos estructurados en formato JSON a un cliente (como una aplicación web o móvil).
echo json_encode($datos);
?>
