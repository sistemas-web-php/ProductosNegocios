<?php

class conexion
{

    private $con;

    public function __construct()
    {
        try {

            $this->con = @mysqli_connect(HOST, USER, "", DB);

            if (!$this->con) {
                throw new Exception("error al conectarse a la base de datos");
            }
        } catch (Exception $e) {
            echo "<p class='text-danger'>" . $e->getMessage() . "</p>";
        }

    }

    public function getCon()
    {
        return $this->con;
    }

    public function cerrar_db()
    {
        @mysqli_close($this->con);
    }
}

function conexion ()
{
    $conexion = new conexion();
    return $conexion->getCon();
}