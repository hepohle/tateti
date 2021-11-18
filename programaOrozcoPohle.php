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

// https://github.com/hepohle/tateti

/**************************************/
/***** DEFINICION DE FUNCIONES ********/
/**************************************/

/**
 * Ordena la coleccion de juegos por jugador 0.
 * @param array $arr
 * @return array colleccion ordenada.
 */
function ordenarPor0($arr){
    foreach ($arr as $indice => $valor) {
        
    }
}






/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/

//Declaración de variables:


//Inicialización de variables:


//Proceso:

//$juego = jugar();
//print_r($juego);
//imprimirResultado($juego);


do {
    echo "MENU DE OPCIONES: \n
            1)- JUGAR AL TATETI.\n
            2)- MOSTRAR UN JUEGO.\n
            3)- MOSTRAR EL PRIMER JUEGO GANADOR.\n
            4)- MOSTRAR PORCENTAJE DE JUEGOS GANADOS.\n
            5)- MOSTRAR RESUMEN JUGADOR.\n
            6)- MOSTRAR LISTADO DE JUEGOS ORDENADOS POR 0.\n
            7)- SALIR. \n";
    $opcion = trim(fgets(STDIN));

    if ($opcion < 1 || $opcion > 7){
        echo "Ingrese una opción válida:";
    }else{
        switch ($opcion) {
            case 1: 
                //Inicia el juego de Tateti.
                echo "Elegiste jugar al Tateti! \n";
                $juego = jugar();
                break;
            case 2: 
                //Muesttra un juego a partir de un numero ingresado.

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
                uasort($coleccionDeJuegos, 'ordenarPor0');
                print_r($coleccionDeJuegos);
                break;
        }
    }
}
// Opción 7 sale del programa.
while ($opcion != 7);

echo "Gracias por jugar al Tateti!";