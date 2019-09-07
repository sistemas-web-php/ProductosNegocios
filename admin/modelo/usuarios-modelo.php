<?php

include_once(MODELO . "conexion.php");

class usuario  
{
    private $id;
    private $user;
    private $pass;

    public function __construct(){
        
    }

    public function getId(){
        return $this->id;
    }

    public function setId($Id){
        $this->id= $id;
    }

    public function getUser(){
        return $this->user;
    }

    public function setUser($user){
        $this->user= $user;
    }

    public function getPass(){
        return $this->pass;
    }

    public function setPass($pass){
        $this->pass= $pass;
    }

    public function alta()
    {
        try {

            $con = conexion();

            if (!$con) {
                throw new Exception("error al conectar a la base de datos");
            }else{

                $usuario = $this->getUser();
                $password = password_hash($this->getPass(), PASSWORD_DEFAULT);

                    $sql = "INSERT INTO `usuarios` (`id_usuario`, `user`, `pass`) VALUES (NULL, '$usuario', '$password')";

                    $resultado = mysqli_query($con, $sql);
                                      
                    if ($resultado) {
                        return true;
                    } else {
                        throw new Exception("error al dar de alta un nuevo usuario");
                        return false;
                    }
            }
        } catch (\Throwable $th) {
            echo $th;
        }
    }

    public function baja()
    {
        
    }

    public function modificacion()
    {
        
    }

    public function login()
    {
        try {

            $con = conexion();

            if (!$con) {
                throw new Exception("error al conectar a la base de datos");
            }else{

                $user = $this->getUser();
                $pass = $this->getPass();

                    $sql = "SELECT * FROM usuarios WHERE nom_user = '$user'";

                    $resultado = mysqli_query($con, $sql);
                                      
                    if ($resultado) {
                        $datos = mysqli_fetch_array($resultado);
                        $cant = mysqli_num_rows($resultado);

                        if ($cant == 1) {

                            if (password_verify($pass, $datos['pass_user'])) {
                                return true;
                            } else {
                                return false;
                            }
                            
                        } else {
                            return false;
                        }
                        
                    } else {
                        throw new Exception("error al loguear");
                        return false;
                    }
            }
        } catch (\Throwable $th) {
            echo $th;
        }
    }
}
