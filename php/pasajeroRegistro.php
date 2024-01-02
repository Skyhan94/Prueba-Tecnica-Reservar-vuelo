<?php

    require_once ("pasajero.php");
    require_once ("conexion.php");

    try {
        if(strlen($_POST['identificacion']) >= 1 && 
        strlen($_POST['usuario']) >= 1 && strlen($_POST['contraseña']) >= 1 && strlen($_POST['nombre']) >= 1 && 
        strlen($_POST['pais']) >= 1 && strlen($_POST['ciudad']) >= 1 && strlen($_POST['direccion']) >= 1 &&
        strlen($_POST['codigoPostal']) >= 1 && strlen($_POST['numeroTelefonico']) >= 1 &&
        strlen($_POST['email']) >= 1){

            $pasajero1 = new pasajero(trim($_POST['tipoIdentificacion']), trim($_POST['identificacion']), 
            trim($_POST['usuario']), trim($_POST['contraseña']), trim($_POST['nombre']), 
            trim($_POST['pais']), trim($_POST['ciudad']), trim($_POST['direccion']), 
            trim($_POST['codigoPostal']), trim($_POST['numeroTelefonico']), trim($_POST['email']));


            $pasajero1->setTipoIdentificacion (trim($_POST['tipoIdentificacion']));
            $pasajero1->setIdentificacion (trim($_POST['identificacion']));
            $pasajero1->setUsuario (trim($_POST['usuario']));
            $pasajero1->setContraseña (trim($_POST['contraseña']));
            $pasajero1->setNombre (trim($_POST['nombre']));
            $pasajero1->setPais (trim($_POST['pais']));
            $pasajero1->setCiudad (trim($_POST['ciudad']));
            $pasajero1->setDireccion (trim($_POST['direccion']));
            $pasajero1->setcodigoPostal ($_POST['codigoPostal']);
            $pasajero1->setnumeroTelefonico (trim($_POST['numeroTelefonico']));
            $pasajero1->setEmail (trim($_POST['email']));

            $tipoIdentificacion = $pasajero1->getTipoIdentificacion();
            $identificacion = $pasajero1->getIdentificacion();
            $usuario = $pasajero1->getUsuario();
            $contraseña = $pasajero1->getContraseña();
            $nombre = $pasajero1->getNombre();
            $pais = $pasajero1->getPais();
            $ciudad = $pasajero1->getCiudad();
            $direccion = $pasajero1->getDireccion();
            $codigoPostal = $pasajero1->getcodigoPostal();
            $numeroTelefonico = $pasajero1->getNumeroTelefonico();
            $email = $pasajero1->getEmail();

            $registro = "INSERT INTO `pasajero`(`tipoIdentificacion`, `identificacion`, `usuario`, 
            `contraseña`, `nombre`, `pais`, `ciudad`, `direccion`, `codigo_Postal`, `telefono`, 
            `email`) VALUES ('$tipoIdentificacion','$identificacion',
            '$usuario','$contraseña','$nombre',
            '$pais','$ciudad','$direccion',
            '$codigoPostal','$numeroTelefonico','$email')";

            try{
                $consulta = mysqli_query($con, $registro);
                if($consulta) {
                    ?>
                    <h3 class="ok">¡Registro Completado!</h3>
                    <?php
                }else{
                    ?>
                    <h3 class="bad">¡Ups ha ocurrido un error!</h3>
                    <?php
                }
            }catch(Exception $e){
                ?>
                <h3 class="bad">¡Ups ha ocurrido un error!</h3>
                <?php
            }
        }else{
            ?>
            <h3 class="bad">¡Por favor complete los datos!</h3>
            <?php
        }
    }catch(Exception $e){
        ?>
        <h3 class="bad">¡Por favor complete los datos!</h3>
        <?php
    }

    
?>