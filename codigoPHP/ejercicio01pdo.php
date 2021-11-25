<?php
    /*
     * @author: Alberto Fernandez Ramirez
     * @since: 24/11/2020
     * @version: v1.Realizacion del ejercicio
     * @copyright: Copyright (c) 2021, Alberto Fernandez Ramirez
     * 1. Desarrollo de un control de acceso con identificación del usuario basado en la función header(). ProyectoTema5
     */
    if ($_SERVER['PHP_AUTH_USER']!='admin' || $_SERVER['PHP_AUTH_PW']!='paso') { //Si el usuario no es admin y la contrasena no es paso entramos en el if
        header('WWW-Authenticate: Basic Realm="Contenido restringido"'); //Muestra de nuevo la cabecera de autentificacion
        header('HTTP/1.0 401 Unauthorized'); //Redirige con el estado Unauthorized
        echo "El usuario no puede ser reconocido. No puedes ACCEDER!"; //Muestro un mensaje de error
        exit;
    }
?>

