<?php

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
            <div class="result"></div>
        </div>
        <div id="noticias" class="contenido">
            <div class="noticia">
            <p>Noticia</p>
            </div>

        </div>
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

//Mustra la cacioón una vez el usuario la haya encontrado en el buscador
function show_songs() {
    
}

//Muestra las ultimas canciones subidas cuando el usuario aún no las ha buscado
function show_newSongs() {

}


?>