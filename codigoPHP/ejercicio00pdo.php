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
             * 0. Mostrar el contenido de las variables superglobales y phpinfo(). ProyectoTema5
             */
            ?>
        
            <!–– Muestra del contenido de la variable $_SERVER con foreach()––>
            <?php if(!empty($_SERVER)){?>
                <h2>Mostrar $_SERVER con foreach()</h2>
                <table class="tablavariable"><tr><th class="cajas">Clave</th><th class="cajas">Valor</th></tr>
                <?php foreach ($_SERVER as $clave => $valor){?>
                    <tr>
                        <td><strong><?php echo $clave?></strong></td>
                        <td><?php echo $valor?></td>
                    </tr>
                <?php
                }
                ?>
                </table>
                <br>
            <?php
            }
            ?>
            
            <!–– Muestra del contenido de la variable $_REQUEST con foreach()––>
            <?php if(!empty($_REQUEST)){?>
                <h2>Mostrar $_REQUEST con foreach()</h2>
                <table class="tablavariable"><tr><th class="cajas">Clave</th><th class="cajas">Valor</th></tr>
                <?php foreach ($_REQUEST as $clave => $valor){?>
                    <tr>
                        <td><strong><?php echo $clave?></strong></td>
                        <td><?php echo $valor?></td>
                    </tr>
                <?php
                }
                ?>
                </table>
                <br>
            <?php
            }
            ?>
            
            <!–– Muestra del contenido de la variable $_GET con foreach()––>
            <?php if(!empty($_GET)){?>
                <h2>Mostrar $_GET con foreach()</h2>
                <table class="tablavariable"><tr><th class="cajas">Clave</th><th class="cajas">Valor</th></tr>
                <?php foreach ($_GET as $clave => $valor){?>
                    <tr>
                        <td><strong><?php echo $clave?></strong></td>
                        <td><?php echo $valor?></td>
                    </tr>
                <?php
                }
                ?>
                </table>
                <br>
            <?php
            }
            ?>
            
            <!–– Muestra del contenido de la variable $_FILES con foreach()––>
            <?php if(!empty($_FILES)){?>
                <h2>Mostrar $_FILES con foreach()</h2>
                <table class="tablavariable"><tr><th class="cajas">Clave</th><th class="cajas">Valor</th></tr>
                <?php foreach ($_FILES as $clave => $valor){?>
                    <tr>
                        <td><strong><?php echo $clave?></strong></td>
                        <td><?php echo $valor?></td>
                    </tr>
                <?php
                }
                ?>
                </table>
                <br>
            <?php
            }
            ?>
            
            <!–– Muestra del contenido de la variable $_ENV con foreach()––>
            <?php if(!empty($_ENV)){?>
                <h2>Mostrar $_ENV con foreach()</h2>
                <table class="tablavariable"><tr><th class="cajas">Clave</th><th class="cajas">Valor</th></tr>
                <?php foreach ($_ENV as $clave => $valor){?>
                    <tr>
                        <td><strong><?php echo $clave?></strong></td>
                        <td><?php echo $valor?></td>
                    </tr>
                <?php
                }
                ?>
                </table>
                <br>
            <?php
            }
            ?>
            
            <!–– Muestra del contenido de la variable $_POST con foreach()––>
            <?php if(!empty($_POST)){?>
                <h2>Mostrar $_POST con foreach()</h2>
                <table class="tablavariable"><tr><th class="cajas">Clave</th><th class="cajas">Valor</th></tr>
                <?php foreach ($_POST as $clave => $valor){?>
                    <tr>
                        <td><strong><?php echo $clave?></strong></td>
                        <td><?php echo $valor?></td>
                    </tr>
                <?php
                }
                ?>
                </table>
                <br>
            <?php
            }
            ?>
            
            <!–– Muestra del contenido de la variable $_COOKIE con foreach()––>
            <?php if(!empty($_COOKIE)){?>
                <h2>Mostrar $_COOKIE con foreach()</h2>
                <table class="tablavariable"><tr><th class="cajas">Clave</th><th class="cajas">Valor</th></tr>
                <?php foreach ($_COOKIE as $clave => $valor){?>
                    <tr>
                        <td><strong><?php echo $clave?></strong></td>
                        <td><?php echo $valor?></td>
                    </tr>
                <?php
                }
                ?>
                </table>
                <br>
            <?php
            }
            ?>
            
            <!–– Muestra del contenido de la variable $_SESSION con foreach()––>
            <?php if(!empty($_SESSION)){?>
                <h2>Mostrar $_SESSION con foreach()</h2>
                <table class="tablavariable"><tr><th class="cajas">Clave</th><th class="cajas">Valor</th></tr>
                <?php foreach ($_SESSION as $clave => $valor){?>
                    <tr>
                        <td><strong><?php echo $clave?></strong></td>
                        <td><?php echo $valor?></td>
                    </tr>
                <?php
                }
                ?>
                </table>
                <br>
            <?php
            }
            ?>
            
            <!–– Muestro el contenido de phpinfo()––>
            <h2>Mostrar phpinfo()</h2>
            <?php
            //Muestro el contenido de phpinfo()
            phpinfo();
            ?>
        
        <footer class="piepagina">
            <a href="../indexProyectoTema5.php"><img src="../webroot/css/img/atras.png" class="imageatras" alt="IconoAtras" /></a>
            <a href="https://github.com/AlbertoFRSauces/207DWESProyectoTema5" target="_blank"><img src="../webroot/css/img/github.png" class="imagegithub" alt="IconoGitHub" /></a>
            <p><a>&copy;</a>Alberto Fernández Ramírez 29/09/2021 Todos los derechos reservados.</p>
            <p>Ultima actualización: 24/11/2021 12:10</p>
        </footer>
    </body>
</html>

