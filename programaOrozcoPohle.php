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

//Opcion numero 2 del menu (Mostrar Juego)
function mostrarJuego()
{

    //10 array multidimencionales.
    $mostrarJuego1= ["resultado"=>"Empate",
                 "nombreJugadorX"=> "juanchi",
                 "nombreJugadorO"=> "Ana",
                 "puntosObtenidosX"=> 1,
                 "puntosObtenidosO"=> 1];


    $mostrarJuego2= ["resultado"=>"ganador O",
                 "nombreJugadorX"=> "Alberto",
                 "nombreJugadorO"=> "Kristina",
                 "puntosObtenidosX"=> -1,
                 "puntosObtenidosO"=> 2];

    $mostrarJuego3= ["resultado"=>"ganador X",
                 "nombreJugadorX"=> "Majo",
                 "nombreJugadorO"=> "Pepe",
                 "puntosObtenidosX"=> 5,
                 "puntosObtenidosO"=> 3];

    $mostrarJuego4= ["resultado"=>"Empate",
                 "nombreJugadorX"=> "Maria",
                 "nombreJugadorO"=> "Jose",
                 "puntosObtenidosX"=> 3,
                 "puntosObtenidosO"=> 3];
            
    $mostrarJuego5= ["resultado"=>"ganador X",
                 "nombreJugadorX"=> "Deby",
                 "nombreJugadorO"=> "Karen",
                 "puntosObtenidosX"=> 6,
                 "puntosObtenidosO"=> 3];

    $mostrarJuego6= ["resultado"=>"ganador O",
                 "nombreJugadorX"=> "Walter",
                 "nombreJugadorO"=> "Martina",
                 "puntosObtenidosX"=> 2,
                 "puntosObtenidosO"=> 4];

    $mostrarJuego7= ["resultado"=>"ganador X",
                 "nombreJugadorX"=> "Alicia",
                 "nombreJugadorO"=> "Dora",
                 "puntosObtenidosX"=> 7,
                 "puntosObtenidosO"=> 2];
                 
    $mostrarJuego8= ["resultado"=>"ganador O",
                 "nombreJugadorX"=> "Hector",
                 "nombreJugadorO"=> "Luis",
                 "puntosObtenidosX"=> 1,
                 "puntosObtenidosO"=> 2];
              
    $mostrarJuego9= ["resultado"=>"ganador X",
                 "nombreJugadorX"=> "Manuel",
                 "nombreJugadorO"=> "Jose",
                 "puntosObtenidosX"=> 10,
                 "puntosObtenidosO"=> 4];

    $mostrarJuego10= ["resultado"=>"Empate",
                 "nombreJugadorX"=> "Leonardo",
                 "nombreJugadorO"=> "Ivan",
                 "puntosObtenidosX"=> 2,
                 "puntosObtenidosO"=> 2];


    $mostrarJuego = [];
    $mostrarJuego[0] =$mostrarJuego1;
    $mostrarJuego[1] =$mostrarJuego2;
    $mostrarJuego[2] =$mostrarJuego3;
    $mostrarJuego[3] =$mostrarJuego4;
    $mostrarJuego[4] =$mostrarJuego5;
    $mostrarJuego[5] =$mostrarJuego6;
    $mostrarJuego[6] =$mostrarJuego7;
    $mostrarJuego[7] =$mostrarJuego8;
    $mostrarJuego[8] =$mostrarJuego9;
    $mostrarJuego[9] =$mostrarJuego10;

    //contador de los juegos guardados en el array $mostrarJuego
    $cantJuegos = count($mostrarJuego); 

    echo "Ingrese el numero del juego que desea ver: ";
    $nroJuego=trim(fgets(STDIN));

    //si ingresa un numero valido, le muestra los datos, sino le pide que ingrese nuevamente un numero
    if ($nroJuego>=0 && $nroJuego<$cantJuegos){
        echo "JUEGO TATETI N°: ".$nroJuego." ".$mostrarJuego[$nroJuego]["resultado"]."\n";
        echo "JUGADOR X: ".$mostrarJuego[$nroJuego]["nombreJugadorX"]." obtuvo ".$mostrarJuego[$nroJuego]["puntosObtenidosX"]." punto."."\n";
        echo "JUGADOR O: ".$mostrarJuego[$nroJuego]["nombreJugadorO"]." obtuvo ".$mostrarJuego[$nroJuego]["puntosObtenidosO"]." punto."."\n";
    }else{
        echo"Error, ese juego no existe!\n";
        echo "Ingrese nuevamente el juego que desea ver: ";
        $nroJuego=trim(fgets(STDIN));
    }
 }
 
 
 /**
 * Ordena la coleccion de juegos por jugador 0.
 * @param array $arr
 * @return array colleccion ordenada.
 */
function ordenarPor0($arr){
    foreach ($arr as $indice => $valor) {
        
    }
}

//ESTO NO ME ANDA
/** se envian por parametros el array con los datos del juego
*@param array $juego, $mostrarJuego
*/
function almacenarJuego($juego)
{
    
    $cantJuegos = count($mostrarJuego);//cuenta los juegos guardados en el array $mostrarJuego

    //verifica quien fue el ganador comparando los puntos que obtuvieron cada uno
    if ($puntosCirculo>$puntosCruz){
        $resultado = "ganador O";
    }else{
        if ($puntosCruz>$puntosCirculo) {
            $resultado = "ganador X";
        } else {
             $resultado = "empate";
                }
        }
    $cantJuegos= $cantJuegos + 1; //al contador se le suma 1, para hacer el nuevo arreglo en ese espacio en memoria
    $mostrarJuego=[];//se crea el arreglo vacio
    //se crea un nuevo arreglo, en un nuevo espacio en memoria 
    $mostrarJuego[$cantJuegos] = ["resultado"=>$resultado, "nombreJugadorX"=> $nombreJugadorCruz,
                                  "nombreJugadorO"=> $nombreJugadorCirculo, "puntosObtenidosX"=> $puntosCruz,
                                  "puntosObtenidosO"=> $puntosCirculo];            
}


function nuevoJuegoGuardado($nuevoJuego){
    $nuevoJuego = array (
        "resultado"=> $resultado, "nombreJugadorX"=> $nombreJugadorCruz, "nombreJugadorO"=> $nombreJugadorCirculo, "puntosObtenidosX"=> $puntosCruz, "puntosObtenidosO"=> $puntosCirculo
    );
    $mostrarJuego[]=$nuevoJuego;
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
    echo "\n MENU DE OPCIONES: \n
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
                mostrarJuego();
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

echo "\n Gracias por jugar al Tateti!\n";