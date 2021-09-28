<?php
include ('conexion.php');

class usuarios {
    
    public $id;
    public $user;
    public $nombreUser;
    public $apellido;
    public $correo;
    
    public function __construct($id,$nombreUser,$correo) {
        $this->id     = $id;
        $this->nombreUser = $nombreUser;
        $this->correo  = $correo;
    }

    public static function consultar() {
        $mysqli = conectadb::dbmysql();
        $consulta = "select * from usuarios";
        echo ('<br>');
        // echo ($consulta);
        $resultado = mysqli_query($mysqli, $consulta);
        if (!$resultado) {
            echo 'No pudo Realizar la consulta a la base de datos';
            exit;
        }
        $listaUsuarios = [];
        while ($usuario = mysqli_fetch_array($resultado)) {
            $listaUsuarios[] = new usuarios($usuario['id_user'], $usuario['nombreUser'], /*$usuario['nombre'], $usuario['apellido'],*/$usuario['correo']);
        }
        return $listaUsuarios;
    }
    public static function consultar2($id) {
        $mysqli = conectadb::dbmysql();
        $stmt = $mysqli->prepare('select * from usuarios WHERE id_user = ?');
        $stmt->bind_param('s', $id);
        $stmt->execute();
        $resultado = $stmt->get_result();
         
        $datos = [];
        while ($usuario = mysqli_fetch_array($resultado)) {
            $datos[] = new usuarios($usuario['id_user'],$usuario['nombreUser'], /*$usuario['nombre'], $usuario['apellido'],*/$usuario['correo']);
        }
        
        return $datos;
    }
    
    public static function login($user,$pass){
        
        $mysqli = conectadb::dbmysql();
        $stmt = $mysqli->prepare('SELECT nombreUser,contrasenia FROM usuarios WHERE nombreUser = ? and contrasenia = ?');
        $stmt->bind_param('ss', $user, $pass);
        $stmt->execute();
        $resultado = $stmt->get_result();
        while ($filasql = mysqli_fetch_array($resultado)) {
        session_start();

        $_SESSION['loggedUserName'] = $filasql['nombreUser'] ;
    }
        $acceso = false;
        if ($stmt->affected_rows == 1) {
        $acceso = true;
        }
        $mysqli->close();
    return $acceso;
    }
    public static function borrar($idusuario) {
        $mysqli = conectadb::dbmysql();
        $stmt = $mysqli->prepare('DELETE FROM usuarios WHERE id_user = ? ');
        $stmt->bind_param('i', $idusuario);
        $stmt->execute();
        $resultado = $stmt->get_result();
    }
    public static function editar($idusuario,$user,$correo) {
        $mysqli = conectadb::dbmysql();
        $sql = ("UPDATE `usuarios` SET `nombreUser`='desmond',`correo`='gato@n.xcom' WHERE id_user=7 ");
        $stmt = mysqli_query($mysqli, $sql);
        //$stmt->bind_param("iss", $idusuario,$user,$correo);
        
        
        /*$stmt = $mysqli->prepare('UPDATE `usuarios` SET `nombreUser`=?,`correo`=? WHERE id_user=? ');
        $stmt->bind_param('ssi', $user, $correo,$idusuario);
        $stmt->execute();
        $resultado = $stmt->get_result();
        */
        
        
        
    }
    
}

?>


