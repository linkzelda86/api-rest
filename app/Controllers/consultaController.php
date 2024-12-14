<?php
// Inicia un bloque de código PHP.
class consultaController{
    // Declara una clase llamada 'consultaController', que actúa como controlador para manejar consultas a través de una API.

    function __construct(){
        // Constructor de la clase. Este método se ejecuta automáticamente cuando se crea una instancia de la clase.
        // Actualmente está vacío, pero puede ser útil para inicializar propiedades o configuraciones necesarias.
    }

    function consultaApi(){
        // Método público llamado 'consultaApi'. Este método se encarga de realizar una consulta utilizando el modelo.

        require_once "app\Models\consultaModel.php";
        // Incluye el archivo 'consultaModel.php' una sola vez. Este archivo contiene la definición de la clase 'consultaModel'.
        // 'require_once' asegura que el archivo no se incluya más de una vez, evitando errores de redeclaración.

        $consultaModel = new consultaModel;
        // Crea una instancia de la clase 'consultaModel', que contiene la lógica de consultas.
        // La instancia se asigna a la variable '$consultaModel'.

        return $consultaModel->consulta();
        // Llama al método 'consulta()' de la clase 'consultaModel' utilizando la instancia '$consultaModel'.
        // Devuelve el resultado de la consulta, que probablemente sea algún tipo de respuesta o datos obtenidos.
    }
}
