<?php

include_once(MODELO . "conexion.php");

class categoria
{
    private $id;
    private $nombre;
    private $tags;


    public function __construct()
    {

    }


    public function getNombre()
    {
        return $this->nombre;
    }

    public function getTags()
    {
        return $this->tags;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function setTags($tags)
    {
        $this->tags = $tags;
    }

    public function altaCategoria()
    {
        try {

            $con = conexion();
            
            if (!$con) {
                throw new Exception("error al conectar a la base de datos");
            }else{

                $nombre = strtoupper($this->getNombre());
                $tags = strtoupper($this->getTags());

                    $sql = "INSERT INTO `generos` (`id_cat`, `nom_cat`, `tags_cat`, `activo_cat`) 
                    VALUES (NULL, '$nombre', '$tags', TRUE)";

                    $resultado = mysqli_query($con, $sql);
                                      
                    if ($resultado) {
                        return true;
                    } else {
                        throw new Exception("error al dar de alta una nueva categoria");
                        return false;
                    }
            }
        } catch (\Throwable $th) {
            echo $th;
        }
    }

    public function bajaCategoria()
    {
        
    }

    public function modificacionCategoria()
    {
        
    }

}

function getCategorias()
{
    try {

        $con = conexion();

        if (!$con) {
            throw new Exception("error al conectar a la base de datos");
        }else{

                $sql = "SELECT `id_cat`,`nom_cat` FROM `categorias`";

                $resultado = mysqli_query($con, $sql);
                                  
                if ($resultado) {
                    $array = array();
                    while ($fila = mysqli_fetch_array($resultado)){

                        $cat = new categoria();
                        
                        $cat->setNombre($fila['nom_cat']);
                        $cat->setId($fila['id_cat']);

                        $array[] = $cat;
                        
                    }

                    return $array;
                } else {
                    throw new Exception("error al buscar todos las categorias");
                    return false;
                }
        }
    } catch (\Throwable $th) {
        echo $th;
    }
}

