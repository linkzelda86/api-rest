<?php
// Inicia un bloque de código PHP.

class consultaModel
{
    // Declara una clase llamada 'consultaModel', responsable de manejar consultas a la base de datos.

    function __construct()
    {
        // Constructor de la clase. Se ejecuta automáticamente al instanciar un objeto de esta clase.
        // Actualmente no realiza ninguna acción, pero puede usarse para inicializar propiedades si es necesario.
    }

    function consulta()
    {
        // Método público llamado 'consulta'. Realiza una consulta a la base de datos y devuelve los datos obtenidos.

        require_once "app/Controllers/conexionController.php";
        // Incluye el archivo 'conexionController.php' una sola vez. Este archivo contiene la clase 'conexionController'.

        $conexion = new conexionController;
        // Crea una instancia de la clase 'conexionController', que se encarga de manejar la conexión a la base de datos.

        $conn = $conexion->conectarBd();
        // Llama al método 'conectarBd()' de 'conexionController' para establecer una conexión a la base de datos.
        // La conexión activa se almacena en la variable '$conn'.

        $consulta = "SELECT * FROM datos INNER JOIN curso ON datos.cedula = curso.cedula";
        // Define una consulta SQL que selecciona todos los campos de la tabla 'datos',
        // haciendo un INNER JOIN con la tabla 'curso' utilizando la columna 'cedula' como clave común.

        $resultado = $conn->query($consulta);
        // Ejecuta la consulta en la base de datos usando el objeto de conexión '$conn'.
        // El resultado de la consulta se almacena en la variable '$resultado'.

        $datos = [];
        // Inicializa un array vacío llamado '$datos' para almacenar los datos obtenidos de la consulta.

        $i = 0;
        // Declara e inicializa un contador '$i' que se usará para indexar el array '$datos'.

        while ($fila = mysqli_fetch_array($resultado)) {
            // Itera sobre los resultados de la consulta, fila por fila, utilizando 'mysqli_fetch_array'.
            // '$fila' contendrá un array asociativo con los datos de cada fila.

            $datos[$i]["id"] = $fila['id'];
            // Almacena el valor de la columna 'id' en el array '$datos' en la posición correspondiente.

            $datos[$i]["cedula"] = $fila['cedula'];
            // Almacena el valor de la columna 'cedula' en el array '$datos'.

            $datos[$i]["nombre"] = $fila['nombre'];
            // Almacena el valor de la columna 'nombre' en el array '$datos'.

            $datos[$i]["apellido"] = $fila['apellido'];
            // Almacena el valor de la columna 'apellido' en el array '$datos'.

            $datos[$i]["nombrep"] = $fila['nombrep'];
            // Almacena el valor de la columna 'nombrep' (probablemente nombre del curso) en el array '$datos'.

            $datos[$i]["paralelo"] = $fila['paralelo'];
            // Almacena el valor de la columna 'paralelo' en el array '$datos'.

            $i++;
            // Incrementa el contador '$i' para pasar a la siguiente posición del array '$datos'.
        }

        return $datos;
        // Retorna el array '$datos', que contiene todas las filas obtenidas de la consulta.
    }
}
