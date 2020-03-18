<?php

function cargarWeb() {
    show_header();
    show_banner();
    show_seccionCentral();
    show_ads();
}

function cargarWebComentarios() {
    show_header();
    show_banner();
    show_seccionCentral();
    insertarComentario();
    show_ads();
}

function cargarWebCompartir() {
    show_header();
    show_banner();
    show_seccionCentral();
    show_compartir();
    show_ads();
}

function show_compartir() {
    echo '
        <div id="nuevoComentario">
            <ol>
                <form action="index.php" method="post" role="form">  
                    <li><h2>Compartir la canción</h2></li>
                    <li><input type="text" id="correo_compartir" name="fname" placeholder="Introduce aquí tu correo electronico"></li>
                    <li><h3>Vista previa:</h3></li>
                    <li><button type="submit" name="enviar_imagen_cancion">Enviar</button></li>
                    <li><img src="data/tmp/images-export/200219001.png" alt="Imagen de la canción generada" id="vista_export"></li>
                    <li></li>
                </form>
            </ol>
        </div>
    ';
}

function insertarComentario() {
    $parrafo = cargarUnParrafo($_GET['parrafo_id']);
    echo '
        <div id="nuevoComentario">
            <ol>
                <form action="index.php" method="post" role="form">  
                    <li><h2>Añadir comentario</h2></li>
                    <li><h3>Estas apunto de comentar el siguiente parrafo:</h3></li>
                    <li>
                    <div>
                    '.$parrafo.'
                    </div>
                    </li>
                    <li><textarea name="textoComentarioNuevo" rows="10" cols="80" placeholder="Introduce aquí tu comentario"></textarea></li>
                    <li><button type="submit" name="enviar_comentario">Enviar</button></li>
                    <li></li>
                </form>
            </ol>
        </div>
    ';
}

function show_banner() {
    echo '
    <div id="banner">
        <div id="idioma">
            <form>
                <select onChange="location=this.options[this.selectedIndex].value;">
                    <option value="#">Español</option>
                    <option value="#">English</option>
                </select>
            </form>
        </div>
    </div>
    ';
}

function show_seccionCentral() {
    echo '
    <div id="seccionCentral">
        <div id="buscador" class="contenido">
                <input type="text" autocomplete="off" placeholder="Busca una cancion..." id="inputBuscador" />
            <div class="result">
            
            </div>
        </div>
    ';
    if(!isset($_GET["cancion_id"])){
        echo '
        <div id="noticias" class="contenido">
            <div class="noticia">
                <p></p>
            </div>
        </div>
        ';
    }else {
        $cancion = cargar_cancion();
        foreach ($cancion as $parrafos) {
            $comentario = cargar_comentario($parrafos["id_parrafo"]);
            echo '
                <div class="parrafo">
                <li class="parrafo-interior"><a href=index.php?cmd=comentar&parrafo_id='.$parrafos['id_parrafo'].'><p>'.$parrafos['contenido'].'</p></a></li>
            ';
            if(is_array($comentario)) { //Para evitar un warning, cuando no hay comentarios
                echo '
                <li class="comentario-interior" id="etiqueta-comentario"><p>Comentarios de este parrafo parrafo:</p></li>
                ';
                foreach ($comentario as $comentarios){
                    echo '
                    <li class="comentario-interior"><p>'.$comentarios['contenido'].'</p></li>
                    ';
                }
                echo '</div>';
            } else {
                echo '</div>';
            }
              
        }

        echo '
        <div id="compartir">
            <form action="index.php" method="post" role="form"> 
                <button type="submit" name="compartir">Compartir canción</button>
            </form>
        </div>
        ';


    }
    echo '
    </div>
    ';
}

function show_ads() {
    echo '
    <div class="anuncio" id="anuncioDer">
        <h1> Croquetas de la abuela</h1>

        <p>Pruebe las nuevas croquetas de la abuela paka, en nuestro establecimiento</p>
        <img src="data/ads/005-crockLaPaka.jpg" alt="Anuncio de unas suculentas croquetas">
        <p>Ubicación: Calle de la Rosa Roja Nº8</p>
        <p>Para más imformacicón visite nuestra pagina web</p>
    </div>

    <div class="anuncio" id="anuncioIzq">
        <h1> Croquetas de la abuela</h1>

        <p>Pruebe las nuevas croquetas de la abuela paka, en nuestro establecimiento</p>
        <img src="data/ads/005-crockLaPaka.jpg" alt="Anuncio de unas suculentas croquetas">
        <p>Ubicación: Calle de la Rosa Roja Nº8</p>
    </div>
    ';

}

function show_footer() {
    echo '
    </body>
    ';
    
}

//Mustra la cacioón una vez el usuario la haya encontrado en el buscador
function show_songs() {
    
}

//Muestra las ultimas canciones subidas cuando el usuario aún no las ha buscado
function show_newSongs() {

}

function show_msg($msg)
{
	echo "<script type='text/javascript'>alert('".$msg."');</script>";
}

?>