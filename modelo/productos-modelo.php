<?php

include_once(MODELO . "video-modelo.php");
include_once(MODELO . "conexion.php");

class producto
{

    private $id;
    private $nombre;
    private $descripcion;
    private $imagen;
    private $precio;
    private $categoria;
    private $tags;
    private $visibilidad;
    private $destacado;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    public function getDestacado()
    {
        return $this->destacado;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @return mixed
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * @return mixed
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * @return mixed
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * @return mixed
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * @return mixed
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @return mixed
     */
    public function getVisibilidad()
    {
        return $this->visibilidad;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @param mixed $descripcion
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    /**
     * @param mixed $imagen
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;
    }

    /**
     * @param mixed $precio
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;
    }

    /**
     * @param mixed $categoria
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    }

    public function setDestacado($destacado)
    {
        $this->destacado = $destacado;
    }

    /**
     * @param mixed $tags
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
    }

    /**
     * @param mixed $visibilidad
     */
    public function setVisibilidad($visibilidad)
    {
        $this->visibilidad = $visibilidad;
    }

    public function __construct(){
        
    }

    
        
    public function altaProducto()
    {
        try {

            $con = conexion();

            if (!$con) {
                throw new Exception("error al conectar a la base de datos");
            }else{

                $nombre = strtoupper($this->getNombre());
                $descripcion = strtoupper($this->getDescripcion());
                $imagen = strtoupper($this->getImagen());
                $precio = $this->getPrecio();
                $categoria = $this->getCategoria();
                $tags = strtoupper($this->getTags());
                $destacado = $this->getDestacado();

                    $sql = "INSERT INTO `productos` (`id_prod`, `nom_prod`, `desc_prod`, `img_prod`, `precio_prod`, `id_cat_prod`, `tags_prod`, `activo_prod`, `destacado_prod`) 
                            VALUES (NULL, '$nombre', '$descripcion', '$imagen', '$precio', '$categoria', '$tags', TRUE, $destacado);";

                    $resultado = mysqli_query($con, $sql);
                                      
                    if ($resultado) {
                        return true;
                    } else {
                        throw new Exception("error al dar de alta una nueva pelicula");
                        return false;
                    }
            }
        } catch (\Throwable $th) {
            echo $th;
        }

    }

    public function bajaProducto()
    {

    }

    public function modificacionProducto()
    {
        try {

            $con = conexion();

            if (!$con) {
                throw new Exception("error al conectar a la base de datos");
            }else{

                $id = $this->getId();
                $nombre = strtoupper($this->getNombre());
                $descripcion = strtoupper($this->getDescripcion());
                $imagen = strtoupper($this->getImagen());
                $precio = strtoupper($this->getPrecio());
                $categoria = $this->getCategoria();
                $tags = strtoupper($this->getTags());
                $visibilidad = $this->getVisibilidad();
                

                    $sql = "UPDATE `productos` SET 
                           `nom_prod`='$nombre',`desc_prod`='$descripcion',`img_prod`='$imagen',`precio_prod`='$precio',`id_cat_prod`='$categoria',`tags_prod`='$tags',`activo_prod`='$visibilidad' WHERE id_prod = '$id'";

                    $resultado = mysqli_query($con, $sql);
                                      
                    if ($resultado) {
                        return true;
                    } else {
                        throw new Exception("error al modificar un producto");
                        return false;
                    }
            }
        } catch (\Throwable $th) {
            echo $th;
        }
    }

}

function getProductos($busqueda, $paginador)
{
    try {

        $con = conexion();

        if (!$con) {
            throw new Exception("error al conectar a la base de datos");
        }else{

            $paginador = $paginador * LIMIT_LISTA_PROD;
                if ($busqueda != false) {
                    $busqueda = strtoupper($busqueda);
                    $sql = "SELECT * FROM `productos` 
                    INNER JOIN categorias AS c
                    ON productos.id_cat_prod = c.id_cat
                    WHERE (`nom_prod`LIKE '%$busqueda%' 
                    OR c.nom_cat LIKE '%$busqueda%' 
                    OR `tags_prod`LIKE '%$busqueda%'
                    OR `c.tags_cat` = '$busqueda'
                    OR `desc_prod` = '$busqueda'
                    AND `activo_prod`= TRUE 
                    LIMIT $paginador," . LIMIT_LISTA_PROD;
                } else {
                    $sql = "SELECT * FROM `productos` WHERE 1 LIMIT $paginador," . LIMIT_LISTA_PROD;
                }

                $resultado = mysqli_query($con, $sql);

                if ($resultado) {

                    $lista = array();

                    while($producto = mysqli_fetch_array($resultado)){
                        
                        $prod = new producto();

                        $prod->setId($producto['id_prod']);
                        $prod->setNombre($producto['nom_prod']);
                        $prod->setDescripcion($producto['desc_prod']);
                        $prod->setImagen($producto['img_prod']);
                        $prod->setPrecio($producto['precio_prod']);
                        $prod->setCategoria($producto['id_cat_prod']);
                        $prod->setTags($producto['tags_prod']);
                        $prod->setVisibilidad($producto['activo_prod']);

                        $lista[] = $prod;
                        
                    }
                    
                    return $lista;                    

                } else {
                    throw new Exception("error al buscar la pelicula");
                    return false;
                }
        }
    } catch (\Throwable $th) {
        echo $th;
    }
}

function getCantProductos($busqueda)
{
    try {

        $con = conexion();

        if (!$con) {
            throw new Exception("error al conectar a la base de datos");
        }else{

            if ($busqueda != false) {
                $busqueda = strtoupper($busqueda);
                $sql = "SELECT * FROM `productos` 
                INNER JOIN categorias AS c
                ON productos.id_cat_prod = c.id_cat
                WHERE (`nom_prod`LIKE '%$busqueda%' 
                OR c.nom_cat LIKE '%$busqueda%' 
                OR `tags_prod`LIKE '%$busqueda%'
                OR `c.tags_cat` = '$busqueda'
                OR `desc_prod` = '$busqueda'
                AND `activo_prod`= TRUE ";
            } else {
                $sql = "SELECT * FROM `productos` WHERE 1";
            }

                $resultado = mysqli_query($con, $sql);
                                               
                if ($resultado) {
                    
                    $cant = mysqli_fetch_array($resultado);

                    return $cant['COUNT(*)'];                    

                } else {
                    throw new Exception("error al buscar la pelicula");
                    return false;
                }
        }
    } catch (\Throwable $th) {
        echo $th;
    }
}

function getProductosAdmin($busqueda)
{
    try {

        $con = conexion();

        if (!$con) {
            throw new Exception("error al conectar a la base de datos");
        }else{

                if ($busqueda != false) {
                    $busqueda = strtoupper($busqueda);
                    $sql = "SELECT * FROM `productos` 
                    INNER JOIN categorias AS c
                    ON productos.id_cat_prod = c.id_cat
                    WHERE (`nom_prod`LIKE '%$busqueda%' 
                    OR c.nom_cat LIKE '%$busqueda%' 
                    OR `desc_prod`LIKE '%$busqueda%'
                    OR `tags_prod` = '$busqueda'";
                } else {
                    $sql = "SELECT * FROM `productos` WHERE 1";
                }

                $resultado = mysqli_query($con, $sql);
                                  
                if ($resultado) {

                    $lista = array();

                    while($prod = mysqli_fetch_array($resultado)){
                        
                        $p = new pelicula();

                        $p->setId($prod['id_prod']);
                        $p->setNombre($prod['nom_prod']);
                        $p->setPrecio($prod['precio_prod']);
                        $p->setDescripcion($prod['precio_prod']);                        

                        $lista[] = $p;
                        
                    }
                    
                    return $lista;                    

                } else {
                    throw new Exception("error al buscar la pelicula");
                    return false;
                }
        }
    } catch (\Throwable $th) {
        echo $th;
    }
}

function getProductoId($id)
{
    try {

        $con = conexion();

        if (!$con) {
            throw new Exception("error al conectar a la base de datos");
        }else{

                $sql = "SELECT * FROM producto 
                INNER JOIN categorias AS c
                ON productos.id_cat_pel = g.id_cat
                WHERE id_prod = '$id' AND activo_prod = TRUE";

                $resultado = mysqli_query($con, $sql);
                                  
                if ($resultado) {

                    $producto = mysqli_fetch_array($resultado);

                    $prod = new producto();

                    $prod->setId($producto['id_prod']);
                    $prod->setNombre($producto['nom_prod']);
                    $prod->setDescripcion($producto['nom_prod']);
                    $prod->setImagen($producto['img_prod']);
                    $prod->setPrecio($producto['precio_prod']);
                    $prod->setCategoria($producto['nom_cat']);

                    return $prod;                    

                } else {
                    throw new Exception("error al buscar la pelicula");
                    return false;
                }
        }
    } catch (\Throwable $th) {
        echo $th;
    }
}

function getProductosDestacados()
{
    try {

        $con = conexion();

        if (!$con) {
            throw new Exception("error al conectar a la base de datos");
        }else{

                $sql = "SELECT * FROM productos WHERE destacado_prod = TRUE AND visibilidad_pel = TRUE";

                $resultado = mysqli_query($con, $sql);
                                  
                if ($resultado) {

                    $lista = array();

                    while($prod = mysqli_fetch_array($resultado)){
                        
                        $p = new producto();

                        $p->setId($prod['id_prod']);
                        $p->setNombre($prod['nom_prod']);
                        $p->setDescripcion($prod['desc_prod']);
                        $p->setImagen($prod['img_prod']);
                        $p->setPrecio($prod['precio_prod']);


                        $lista[] = $p;
                    }

                    return $lista;                    

                } else {
                    throw new Exception("error al buscar los prodcutos destacados");
                    return false;
                }
        }
    } catch (\Throwable $th) {
        echo $th;
    }
}
