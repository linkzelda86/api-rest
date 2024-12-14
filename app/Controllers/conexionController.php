<?php
class conexionController
{
    function __construct()
    {

    }
    public function conectarBd()
    {
        include_once "app/Models/conexionModel.php";
        $conexion = new conexionModel;
        return $conexion->conectar();
    }
}
