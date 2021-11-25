<?php
include_once("tateti.php");

/**************************************/
/***** DATOS DE LOS INTEGRANTES *******/
/**************************************/

/* Apellido, Nombre. Legajo. Carrera. mail. Usuario Github */
/* ... COMPLETAR ... */

// Técnicatura Universitaria en desarrollo web.

// Orozco Iván FAI
// ivan.orozco@est.fi.uncoma.edu.ar

// Pohle Héctor FAI 3715
// hector.pohle@est.fi.uncoma.edu.ar

// Salto Tomás FAI
// tomas.salto@est.fi.uncoma.edu.ar

// https://github.com/hepohle/tateti

/**************************************/
/***** DEFINICION DE FUNCIONES ********/
/**************************************/

// Carga un array con diez juegos.
/**
 * Inicializa la estructura de datos de la coleccion de juegos.
 * @return array $coleccionJuegos
 */
function cargarJuegos(){
    //array juegos cargados

    $juego1 = ["resultado"=>"Empate",
    "nombreJugadorX"=> "juanchi",
    "nombreJugadorO"=> "Ana",
    "puntosObtenidosX"=> 1,
    "puntosObtenidosO"=> 1];


    $juego2 = ["resultado"=>"ganador O",
        "nombreJugadorX"=> "Alberto",
        "nombreJugadorO"=> "Kristina",
        "puntosObtenidosX"=> -1,
        "puntosObtenidosO"=> 2];

    $juego3 = ["resultado"=>"ganador X",
        "nombreJugadorX"=> "Majo",
        "nombreJugadorO"=> "Pepe",
        "puntosObtenidosX"=> 5,
        "puntosObtenidosO"=> 3];

    $juego4 = ["resultado"=>"Empate",
        "nombreJugadorX"=> "Maria",
        "nombreJugadorO"=> "Jose",
        "puntosObtenidosX"=> 3,
        "puntosObtenidosO"=> 3];

    $juego5 = ["resultado"=>"ganador X",
        "nombreJugadorX"=> "Deby",
        "nombreJugadorO"=> "Karen",
        "puntosObtenidosX"=> 6,
        "puntosObtenidosO"=> 3];

    $juego6 = ["resultado"=>"ganador O",
        "nombreJugadorX"=> "Walter",
        "nombreJugadorO"=> "Martina",
        "puntosObtenidosX"=> 2,
        "puntosObtenidosO"=> 4];

    $juego7 = ["resultado"=>"ganador X",
        "nombreJugadorX"=> "Alicia",
        "nombreJugadorO"=> "Dora",
        "puntosObtenidosX"=> 7,
        "puntosObtenidosO"=> 2];
        
    $juego8 = ["resultado"=>"ganador O",
        "nombreJugadorX"=> "Hector",
        "nombreJugadorO"=> "Luis",
        "puntosObtenidosX"=> 1,
        "puntosObtenidosO"=> 2];
    
    $juego9 = ["resultado"=>"ganador X",
        "nombreJugadorX"=> "Manuel",
        "nombreJugadorO"=> "Jose",
        "puntosObtenidosX"=> 10,
        "puntosObtenidosO"=> 4];

    $juego10 = ["resultado"=>"Empate",
        "nombreJugadorX"=> "Leonardo",
        "nombreJugadorO"=> "Ivan",
        "puntosObtenidosX"=> 2,
        "puntosObtenidosO"=> 2];

    $coleccionJuegos = [];

    $coleccionJuegos[0] = $juego1;
    $coleccionJuegos[1] = $juego2;
    $coleccionJuegos[2] = $juego3;
    $coleccionJuegos[3] = $juego4;
    $coleccionJuegos[4] = $juego5;
    $coleccionJuegos[5] = $juego6;
    $coleccionJuegos[6] = $juego7;
    $coleccionJuegos[7] = $juego8;
    $coleccionJuegos[8] = $juego9;
    $coleccionJuegos[9] = $juego10;

    return $coleccionJuegos;
};

/**
 * Pide al usuario un numero de juego y muestra su resumen.
 * @param array $coleccionJuegos
 * 
 */
function mostrarJuego($coleccionDeJuegos){
    $cantidadDeJuegos = count($coleccionDeJuegos);

    echo "Ingrese el numero del juego que desea ver: ";
    $num=trim(fgets(STDIN));

    if ($num >=0 && $num <= $cantidadDeJuegos){
        echo "JUEGO TATETI N°: ".$num." ".$coleccionDeJuegos[$num]["resultado"]."\n";
        echo "JUGADOR X: ".$coleccionDeJuegos[$num]["nombreJugadorX"]." obtuvo ".$coleccionDeJuegos[$num]["puntosObtenidosX"]." punto."."\n";
        echo "JUGADOR O: ".$coleccionDeJuegos[$num]["nombreJugadorO"]." obtuvo ".$coleccionDeJuegos[$num]["puntosObtenidosO"]." punto."."\n";
    }else{
        echo"Error, ese juego no existe!\n";
        echo "Ingrese nuevamente el juego que desea ver: ";
        $num=trim(fgets(STDIN));
    }
}

/**
 * Le pide al usuario un número dentro del rango de las opciones del menu.
 * @return int $opcion.
 */
function seleccionarOpcion(){
    $min = 1;
    $max = 7;
    echo "\n MENU DE OPCIONES: \n
            1)- JUGAR AL TATETI.\n
            2)- MOSTRAR UN JUEGO.\n
            3)- MOSTRAR EL PRIMER JUEGO GANADOR.\n
            4)- MOSTRAR PORCENTAJE DE JUEGOS GANADOS.\n
            5)- MOSTRAR RESUMEN JUGADOR.\n
            6)- MOSTRAR LISTADO DE JUEGOS ORDENADOS POR 0.\n
            7)- SALIR. \n";
    $num = trim(fgets(STDIN));

    $opcion = solicitarValor($num);
    
    return $opcion;
}


/**
 * Pide al usuario un numero y comprueba si está dentro de un rango de valores.
 * @param int $num
 * @return int
 */
function solicitarValor($num){
    $min = 1;
    $max = 7;
    while ($num < $min || $num > $max){
        echo "Ingrese una opcion válida entre " . $min . " y " . $max . ": ";
        $num = trim(fgets(STDIN));
    }
    return $num;
}

/**
 * Recibe un array con la coleccion de juegos y un juego nuevo.
 * @param array $coleccionDeJuegos
 * @param array $nuevoJuego
 * @return array $coleccionDeJuegos
 */
function agregarJuego($coleccionDeJuegos, $nuevoJuego){
    $ultimoIndice = count($coleccionDeJuegos);
    $coleccionDeJuegos[$ultimoIndice] = $nuevoJuego;
    return $coleccionDeJuegos;
}


/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/

//Declaración de variables:

//Inicialización de variables:

// Carga la collecion de 10 juegos
$coleccionDeJuegos = cargarJuegos();

// Opcion del menu
$opcion = seleccionarOpcion();

//Proceso:

//$juego = jugar();
//print_r($juego);
//imprimirResultado($juego);

do {
    
        switch ($opcion) {
            case 1: 
                //Inicia el juego de Tateti.
                echo "Elegiste jugar al Tateti! \n";
                $juego = jugar();
                break;
            case 2: 
                //Muesttra un juego a partir de un numero ingresado.
                mostrarJuego($coleccionDeJuegos);
                break;
            case 3: 
                //Muestra el primer juego ganador, a partir del nombre del jugador.
                
                break;
            case 4: 
                //Muestra el porcentaje de juegos ganados de "X" o "0".
        
                break;
            case 5: 
                //Muestra resumen de un jugador.
        
                break;
            case 6: 
                //Muestra listado de juegos ordenados por jugador "0".
                
                break;
        }
}
// Opción 7 sale del programa.
while ($opcion != 7);

echo "\n Gracias por jugar al Tateti!\n";