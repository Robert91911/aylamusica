<?php

function cargarWeb() {
    show_header();
    show_banner();
    show_seccionCentral();
    show_ads();
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
                <p>Nuevas canciones:</p>
            </div>
        </div>
        ';
    }else {
        cargar_cancion();
        
    }
    echo '
    </div>
    ';
}

function show_ads() {
    echo '
    <div class="anuncio" id="anuncioDer">

    </div>

    <div class="anuncio" id="anuncioIzq">

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


?>