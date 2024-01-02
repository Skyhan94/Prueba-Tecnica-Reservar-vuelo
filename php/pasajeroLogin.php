<?php 
    require_once ("conexion.php");

    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];

    $bd_usuario = "SELECT * FROM pasajero WHERE usuario = '$usuario'";

    try {
        $consulta_usuario = mysqli_query($con, $bd_usuario);

        if($consulta_usuario){
            $consulta_usuario_bd = $consulta_usuario->fetch_assoc();

            if($consulta_usuario_bd){
              echo  $consulta_usuario_bd['usuario'];
            }else{
                echo "no se encontro registro";
            }
        }else{
            echo "No se encontraron registros";
        }

    }catch(Exception $e) {
        echo "error";
    }



    // if ($usuario == $bd_usuario && $contraseña == $bd_contraseña){
    //     echo "exito";
    // }else{
    //     echo "usuario o contraseña incorrectos";
    // }
?>