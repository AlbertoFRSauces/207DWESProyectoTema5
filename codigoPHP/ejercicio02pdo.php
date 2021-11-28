<?php
//Incluyo las variables de la conexion
require_once '../config/configDBPDO.php';

// Si el usuario aún no se ha autentificado, pedimos las credenciales
if (!isset($_SERVER['PHP_AUTH_USER']) || (!isset($_SERVER['PHP_AUTH_PW']))) { 
        header('WWW-Authenticate: Basic Realm="Contenido restringido"'); //Muestra de nuevo la cabezera de autentificacion
        header('HTTP/1.0 401 Unauthorized'); //Redirige con el estado Unauthorized
        echo "El usuario no puede ser reconocido. No puedes ACCEDER!"; //Muestro un mensaje de error
        exit;
}else {// Si ya ha enviado las credenciales, las comprobamos con la base de datos
    try{
        //Hago la conexion con la base de datos
        $DAW207DBDepartamentos = new PDO(HOST, USER, PASSWORD);
                
        // Establezco el atributo para la aparicion de errores con ATTR_ERRMODE y le pongo que cuando haya un error se lance una excepcion con ERRMODE_EXCEPTION
        $DAW207DBDepartamentos -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $usuario = $_SERVER['PHP_AUTH_USER']; //Guardo en una variable los datos pasados por teclado del usuario
        $password = $_SERVER['PHP_AUTH_PW']; //Guardo en una variable los datos pasados por teclado de la password
        
        $consulta = "SELECT T01_CodUsuario, T01_Password FROM T01_Usuario WHERE T01_CodUsuario='{$usuario}'"; //Creo la consulta y le paso el usuario a la consulta
        $resultadoConsulta=$DAW207DBDepartamentos->prepare($consulta); // Preparo la consulta antes de ejecutarla
        $resultadoConsulta->execute();//Ejecuto la consulta con el array de parametros 

        $oUsuario = $resultadoConsulta->fetchObject(); //Obtengo el resultado de la consulta en un objeto
        $passwordEncriptada = hash('sha256', ($usuario.$password)); //Encripto la password con el nombre de usuario mas su password pasada por teclado.
        if(($oUsuario->T01_CodUsuario == $usuario) && ($oUsuario->T01_Password == $passwordEncriptada)) { //Compruebo si los datos coinciden con los de la base de datos
            echo "Usuario y password correctos!" . "<br/>"; //Muestro un mensaje si todo ha ido bien.
            echo "Nombre de usuario: " . $usuario . "<br/>"; //Muestro el usuario
            echo "Password: " . $password; //Muestro la password
        }else{ // Si no existe, se vuelven a pedir las credenciales hasta que se introduzcan correctamente
            header('WWW-Authenticate: Basic realm="Contenido restringido"'); //Muestra de nuevo la cabecera de autentificacion
            header("HTTP/1.0 401 Unauthorized"); //Redirige con el estado Unauthorized
            exit;
        }
    }catch(PDOException $excepcion){//Codigo que se ejecuta si hay algun error
        $errorExcepcion = $excepcion->getCode();//Obtengo el codigo del error y lo almaceno en la variable errorException
        $mensajeException = $excepcion->getMessage();//Obtengo el mensaje del error y lo almaceno en la variable mensajeException
        echo "<p style='color: red'>Codigo del error: </p>" . $errorExcepcion;//Muestro el codigo del error
        echo "<p style='color: red'>Mensaje del error: </p>" . $mensajeException;//Muestro el mensaje del error
    }finally{
        //Cierro la conexion
        unset($DAW207DBDepartamentos);
    }
}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Alberto Fernandez Ramirez">
        <link href="../webroot/css/estiloejercicio.css" rel="stylesheet" type="text/css">
        <link rel="icon" href="../webroot/css/img/home.png" type="image/x-icon">
        <title>Ejercicio 00 PDO</title>
    </head>
    <body>
            <?php
            /*
             * @author: Alberto Fernandez Ramirez
             * @since: 24/11/2020
             * @version: v1.Realizacion del ejercicio
             * @copyright: Copyright (c) 2021, Alberto Fernandez Ramirez
             * 2. Desarrollo de un control de acceso con identificación del usuario basado en la función header() y en el uso de una tabla “Usuario” de la base de datos. (PDO). ProyectoTema5
             */
            
            ?>
        <footer class="piepagina">
            <a href="../indexProyectoTema5.php"><img src="../webroot/css/img/atras.png" class="imageatras" alt="IconoAtras" /></a>
            <a href="https://github.com/AlbertoFRSauces/207DWESProyectoTema5" target="_blank"><img src="../webroot/css/img/github.png" class="imagegithub" alt="IconoGitHub" /></a>
            <p><a>&copy;</a>Alberto Fernández Ramírez 29/09/2021 Todos los derechos reservados.</p>
            <p>Ultima actualización: 24/11/2021 22:20</p>
        </footer>
    </body>
</html>

