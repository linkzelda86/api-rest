<?php
class conexionModel
{
    private $host;
    private $user;
    private $pass;
    private $db;
    public function __construct()
    {
        define('DB', 'api');
        define('USER', 'root');
        define('PASSWORD', '');

        $this->host = 'localhost';
        $this->user = constant('USER');
        $this->pass = constant('PASSWORD');
        $this->db = constant('DB');
    }

    function conectar()
    {
        // echo json_encode('ok');
        $conn = new mysqli($this->host, $this->user, $this->pass, $this->db) or die("Error" . mysqli_errno($conn));
        $conn->set_charset("utf8");
        return $conn;
    }
}