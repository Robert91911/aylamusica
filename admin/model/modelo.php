<?php

/*
* Sube una canción con sus parrafos a la base de datos
* E: String titulo, String Artistas, file imagen, String[] parrafos
* S: true si la ha introducido correctamente
* SQL: insert into cancion(titulo, artistas, imagen(la ruta)) vales (?, ?, ?, ?)
* insert into parrafos(contenido, id_cancion) values (?, ?) //Uno por parrafo introducido
*/
function subirCancion() {
    return true;
}

/*
* Comprueba que la contraseña del admin es correcta
* E: String contraseña
* S: true si contraseña está bien
* SQL: select * from admin where pass = ?;
*/
function checkAdminPass(){
    return true;
}

/*
* Recoge los mails de los patrocinadores y manda los correos
* E: String contraseña
* S: true si se han enviado los correos
* SQL: select mail from anuncio ;
*/
function sendMail() {
    return true;
}

/*
* Importa las canciones de la base de datos a partir de un XML
* E: NADA
* S: true si se han realizado las operaciones
* SQL: insert * from cancion join parrafos;
*/
function import() {
    return true;
}

/*
* Exporta las canciones de la base de datos y las pasa a un XML
* E: NADA
* S: true si se han realizado las operaciones
* SQL: select * from cancion join parrafos;
*/
function export() {
    return true;
}

/*
* Cambia los valores de un anuncio en la base de datos
* E: NADA
* S: true si se han realizado las operaciones
* SQL: insert into anuncio(url, multimedia, activo, mail) values (?, ?, ?, ?);
*/
function changeAd(){
    return true;
}

/*
* Recibe un insulto y lo carga a la base de datos de insultos
* E: String insulto
* S: true si se han realizado las operaciones
* SQL: insert into insulto(insulto) values (?);
*/
function addInsult(){
    return true;
}

/*
* Cambia el valor de la varible de config.php
* E: NADA
* S: true si se han realizado las operaciones
* SQL: NADA
*/
function cambiar_mantenimiento() {
    return true;
}

/*
* Cambia la contraseña de el admin
* E: String oldPass, newPass
* S: true si se han realizado las operaciones
* SQL: update pass from admin where pass = ?;
*/
function changePass(){
    checkAdminPass(); //Le paso la contraseña antigua para que la compruebe. Si es la misma inserto
    //Insert de la nueva
    return true;
}

?>