<?php

function show_panel_administracion() {
    echo '
    <div>
        <h1>Administración</h1>
        <div>
        <ol>
            <a href="index.php?cmd=subirCancion"><li>
                <h2>Subir una canción</h2>
                <p>Sube una cancion a la aplicación</p>
            </li></a>
            <a href="index.php?cmd=modoMantenimiento"><li>
                <h2>ON / OFF</h2>
                <p>Pon la web en modo mantenimiento o desactivala</p>
            </li></a>
            <a href="index.php?cmd=verLog"><li>
                <h2>Ver log</h2>
                <p>Ver el archivo log de la aplicación</p>
            </li></a>
            <a href="index.php?cmd=exportarImportar"><li>
                <h2>Import / Export</h2>
                <p>Importa o exporta las canciones de la aplicación</p>
            </li></a>
            <a href="index.php?cmd=adminAnuncios"><li>
                <h2>Anuncios</h2>
                <p>Gestionar anuncios</p>
            </li></a>
            <a href="index.php?cmd=correoPatrocinadores"><li>
                <h2>Correo</h2>
                <p>Manda un correo a los patrocinadores de la aplicacion</p>
            </li></a>
            <a href="index.php?cmd=passAcceso"><li>
                <h2>Contraseña</h2>
                <p>Gestiona tu contraseña de acceso</p>
            </li></a>
            <a href="index.php?cmd=diccionarioInsultos"><li>
                <h2>Diccionario de insultos</h2>
                <p>Añade entradas en el diccionario de insultos</p>
            </li></a>
        </ol>
        </div>
    </div>
    ';
}

function show_subir_cancion(){
    echo '
        <div>
            <h2>Importar / Exportar una canción</h2>
            <form action="index.php" method="post" role="form">
                <h3>Importar</h3>
                <input type="file" id="subir_cancion" name="subida">
                <input type="submit" name="subir" value="Subir" />
                <input type="submit" name="atras" value="Atrás" />
            </form>
        </div>
    ';
}


function show_ver_log(){
    echo '
        <div>
            <form action="index.php" method="post" role="form">
                <h2>Log de la aplicación</h2>
                <input type="submit" name="atras" value="Atrás" />
            </form>
        </div>
    ';
}

function show_exportar_importar(){
    echo '
        <div>
            <h2>Importar / Exportar una canción</h2>
            <form action="index.php" method="post" role="form">
                <h3>Importar</h3>
                <input type="file" id="importar" name="importar">
                <input type="submit" name="importar" value="Importar canciones" />
            </form>
            <form action="index.php" method="post" role="form">
                <h3>Exportar</h3>
                <input type="submit" name="exportar" value="Exportar canciones" />
                <input type="submit" name="atras" value="Atrás" />
            </form>
        </div>
    ';
}

function show_admin_anuncios(){
    echo '
    <div>
        <h2>Administrar anuncios</h2>
        <form action="index.php" method="post" role="form">
            <input type="submit" name="guardar_anuncios" value="Guardar anuncios" />
            <input type="submit" name="atras" value="Atrás" />
        </form>
    </div>
';
}

function show_correo_patrocinadores(){
    echo '
    <div>
        <h2>Mandar un correo a los patrocinadores</h2>
        <form action="index.php" method="post" role="form">
            <input type="text" name="asunto" placeholder="Introduce el asunto: ">
            <textarea name="mensaje" placeholder="Introduce aqui el cuerpo: MAX(255CHAR)"></textarea>
            <input type="submit" name="enviar_mail" value="Enviar correo" />
            <input type="submit" name="atras" value="Atrás" />
        </form>
    </div>
';
}

function show_pass_acceso(){
    echo'
        <div class="nuevaEntrada">
        <h1>Restablecer contraseña</h1>

        <form action="index.php" method="post" role="form">
            <input type="text" class="form-control" name="pass1" placeholder="Escribe tu contraseña antigua" />
            <input type="text" class="form-control" name="pass2" placeholder="Escribe tu nueva contraseña" />
            <input type="text" class="form-control" name="pass1" placeholder="Vuelve a escribir la contraseña" />
            <input type="submit" name="restablecer_pass" value="Restablecer contraseña" />
            <input type="submit" name="atras" value="Atrás" />        
        </form>
        </div>
	';
}

function show_diccionario_insultos(){
    echo'
    <div class="nuevaEntrada">
    <h1>Restablecer contraseña</h1>

    <form action="index.php" method="post" role="form">
        <input type="text" class="form-control" name="pass1" placeholder="Introduce un insulto" />
        <input type="submit" name="anadir_insulto" value="Introducir insulto" />
        <input type="submit" name="atras" value="Atrás" />
    </form>
    </div>
';
}


function show_login() {
    echo '
    <section id="slider">
    <form action="index.php" method="post" role="form">
        <h2>ENTRAR</h2>
        <input id="numero" type="text" name="username_user" placeholder="Usuario" required=""><br><br>
        <input id="numero" type="text" name="pass_user" placeholder="Contraseña" required=""><br><br>
       
        <button type="submit" name="login">Login</button><br><br>
        <input type="submit" name="atras" value="Atrás" />

        <a href="#"><p>¿Olvidaste tu contraseña?</p></a>
    </section>';
}

/*
*	Muestra un mensaje de tipo alert
*	E: $msg (mensaje que se quiere mostrar en alert)
*	S:
*	SQL:
*/
function show_msg($msg) {
	echo "<script type='text/javascript'>alert('".$msg."');</script>";
}

?>