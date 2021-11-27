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

    $juego1 = [
    "nombreJugadorX"=> "JUANCHI",
    "nombreJugadorO"=> "ANA",
    "puntosObtenidosX"=> 1,
    "puntosObtenidosO"=> 1];

    $juego2 = [
        "nombreJugadorX"=> "ALBERTO",
        "nombreJugadorO"=> "KRISTINA",
        "puntosObtenidosX"=> -1,
        "puntosObtenidosO"=> 2];

    $juego3 = [
        "nombreJugadorX"=> "MAJO",
        "nombreJugadorO"=> "PEPE",
        "puntosObtenidosX"=> 5,
        "puntosObtenidosO"=> 3];

    $juego4 = [
        "nombreJugadorX"=> "MARIA",
        "nombreJugadorO"=> "JOSE",
        "puntosObtenidosX"=> 3,
        "puntosObtenidosO"=> 3];

    $juego5 = [
        "nombreJugadorX"=> "DEBY",
        "nombreJugadorO"=> "KAREN",
        "puntosObtenidosX"=> 6,
        "puntosObtenidosO"=> 3];

    $juego6 = [
        "nombreJugadorX"=> "WALTER",
        "nombreJugadorO"=> "MARTINA",
        "puntosObtenidosX"=> 2,
        "puntosObtenidosO"=> 4];

    $juego7 = [
        "nombreJugadorX"=> "ALICIA",
        "nombreJugadorO"=> "DORA",
        "puntosObtenidosX"=> 7,
        "puntosObtenidosO"=> 2];
        
    $juego8 = [
        "nombreJugadorX"=> "HECTOR",
        "nombreJugadorO"=> "LUIS",
        "puntosObtenidosX"=> 1,
        "puntosObtenidosO"=> 2];
    
    $juego9 = [
        "nombreJugadorX"=> "MANUEL",
        "nombreJugadorO"=> "JOSE",
        "puntosObtenidosX"=> 10,
        "puntosObtenidosO"=> 4];

    $juego10 = [
        "nombreJugadorX"=> "LEONARDO",
        "nombreJugadorO"=> "IVAN",
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
 * Calcula el resultado a partir de los puntos de cada jugador.
 * 
 */
function resultadoJuego($juego){
    if ($juego["puntosObtenidosX"] > $juego["puntosObtenidosO"]) {
        $resultado = "GANO JUGADOR X";
    } elseif ($juego["puntosObtenidosX"] < $juego["puntosObtenidosO"]) {
        $resultado = "GANO JUGADOR O";
    } else {
        $resultado = "EMPATE";
    }
    return $resultado;
}

/**
 * Pide al usuario un numero de juego y muestra su resumen.
 * @param array $coleccionJuegos
 * 
 */
function mostrarJuego($coleccionDeJuegos){
    $cantidadDeJuegos = count($coleccionDeJuegos);
    
    echo "Ingrese el numero del juego que desea ver: ";
    $num=trim(fgets(STDIN));

    $resultado = resultadoJuego($coleccionDeJuegos[$num]);

    if ($num >=0 && $num <= $cantidadDeJuegos){
        echo "******************************\n";
        echo "JUEGO TATETI N°: ".$num." " . "(".$resultado.")" ."\n";
        echo "JUGADOR X: ".$coleccionDeJuegos[$num]["nombreJugadorX"]." obtuvo ".$coleccionDeJuegos[$num]["puntosObtenidosX"]." punto."."\n";
        echo "JUGADOR O: ".$coleccionDeJuegos[$num]["nombreJugadorO"]." obtuvo ".$coleccionDeJuegos[$num]["puntosObtenidosO"]." punto."."\n";
        echo "******************************\n";
    }else{
        echo"Error, ese juego no existe!\n";
        echo "Ingrese nuevamente el juego que desea ver: ";
        $num=trim(fgets(STDIN));
    }
}

/**
 * Le pide al usuario un número dentro del rango de las opciones del menu.
 * Se llama a la funcion solicitarNumeroEntre() del archivo tateti.php
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
    
    $opcion = solicitarNumeroEntre($min, $max);
    
    return $opcion;
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

/**
 * Solicita un simbolo X ó O valida que lo ingresado sea correcto y lo devuelve.
 * @return string
 */
function simboloElegido(){
    echo "Ingrese un símbolo (X ó O): ";
    $simbolo = trim(fgets(STDIN));
    $simbolo = strtoupper($simbolo);

    if($simbolo == "X" || $simbolo == "O"){
        $simboloUsuario = $simbolo;
    }else{
        echo "Ingrese un símbolo válido X ó O: ";
        $simbolo = trim(fgets(STDIN));
        $simbolo = strtoupper($simbolo);
    }
    return $simboloUsuario;
}

/**
 * Recibe la coleccion de juegos y devuelve la cantida de juegos ganados.
 * @param array $coleccionDeJuegos
 * 
 */
function cantidadGanados($juegos){
    $juegosGanados = 0;
    foreach ($juegos as $indice => $juego) {
        if($juego["puntosObtenidosX"] <> $juego["puntosObtenidosO"]){
                    $juegosGanados ++;
        }
    }
    return $juegosGanados;
}

/**
 * Muestra el primer juego ganado a partir del nombre del jugador
 * @return array
 */
function primerJuegoGanado($juegos){
    echo "Ingrese el nombre del jugador: ";
    $nombreJugador = strtoupper(trim(fgets(STDIN)));
    
    foreach ($juegos as $indice => $juego) {
        if ($juego["nombreJugadorX"] == $nombreJugador && $juego["puntosObtenidosX"] > $juego["puntosObtenidosO"]){
            $juegoGanado = $juego;
        }elseif ($juego["nombreJugadorO"] == $nombreJugador && $juego["puntosObtenidosO"] > $juego["puntosObtenidosX"]) {
            $juegoGanado = $juego;
        }else {
            $juegoGanado = [];
        }
    }
    return $juegoGanado;
}

/**
 * A partir de la coleccion de juegos se pide un nombre de un jugador y se devuelve su resumen.
 * 
 */
function resumenJugador($juegos){
    echo "ingrese el nombre del jugador: ";
    $nombreJugador = trim(fgets(STDIN));
    $nombreJugador = strtoupper($nombreJugador);
    $partidosGanados = 0;
    $partidosPerdidos = 0;
    $partidosEmpatados = 0;
    $puntosAcumulados = 0;

    foreach ($juegos as $juego) {
        
            if($juego["nombreJugadorX"] == $nombreJugador){ 
                if (resultadoJuego($juego) == "GANO JUGADOR X"){ 
                    $partidosGanados ++;
                    $puntosAcumulados = $puntosAcumulados + $juego["puntosObtenidosX"];
                }elseif (resultadoJuego($juego) == "GANO JUGADOR O") {
                    $partidosPerdidos ++;    
                }else {
                    $partidosEmpatados ++;
                    $puntosAcumulados = $puntosAcumulados + $juego["puntosObtenidosX"];
                }
            }elseif ($juego["nombreJugadorO"] == $nombreJugador){
                if(resultadoJuego($juego) == "GANO JUGADOR O") {
                    $partidosGanados ++;
                    $puntosAcumulados = $puntosAcumulados + $juego["puntosObtenidosO"];
                }elseif (resultadoJuego($juego) == "GANO JUGADOR X") {
                    $partidosPerdidos ++;
                }else {
                    $partidosEmpatados ++;
                    $puntosAcumulados = $puntosAcumulados + $juego["puntosObtenidosO"];
                }
            // }elseif ($juego["nombreJugadorX"] <> $nombreJugador) {
            //      echo "Ese jugador no jugó todavía.\n";
            //      echo "ingrese el nombre del jugador: ";
            //      $nombreJugador = strtoupper(trim(fgets(STDIN))); 
            }
        
    }
    $partidosJugados = $partidosGanados + $partidosPerdidos + $partidosEmpatados;

    if ($partidosJugados == 0) {
        echo "******************************\n";
        echo "Ese jugador todavía no jugó ningun partido.\n";
        echo "******************************\n";
    }else {
        echo "******************************\n";
        echo "JUGADOR: " . $nombreJugador . "\n";
        echo "Gano: " . $partidosGanados . " juegos.\n";
        echo "Perdió: " . $partidosPerdidos . " juegos.\n";
        echo "Empató: " . $partidosEmpatados . " juegos.\n";
        echo "Total de puntos acumulados: " . $puntosAcumulados . " puntos. \n";
        echo "******************************\n";
    }    
}

// /**
//  * A partir de la coleccion de juegos se pide un nombre de un jugador y se devuelve su resumen.
//  * @param array $coleccionJuegos
//  */
// function resumenJugador($coleccionJuegos)
// {
//     echo "ingrese el nombre del jugador: ";
//     $nombreJugador = strtoupper(trim(fgets(STDIN)));

//     $partidosGanados = 0;
//     $partidosPerdidos = 0;
//     $partidosEmpatados = 0;
//     $puntosAcumulados = 0;

//     //recorre el array $coleecionJuegos , vuelca todos los arreglos en $juegos
//     foreach($coleccionJuegos as $juegos)
//     {
//         /*recorre  el array $juegos
//         que serian los valores de los mismos valores que el array principal
//         $juegos("nombreJugadorX","nombreJugadorO","puntosObtenidosX","puntosObtenidosO")
//         esos valores de juego los vuelca en $datos*/ 
//         foreach($juegos as  $posicionDatosJuego => $datos)/* toma la posicion del array y el dato en esa posicion*/
//         {
//             //comparar si el nombre ingresado por el usario es el mismo del arreglo
//             if($datos==$nombreJugador)
//             {
//                 if($posicionDatosJuego == "nombreJugadorX")
//                 {
//                     //llamar a la funcion, que determina quien gano X o O
//                     $resultado = resultadoJuego($datos);/*se envian por parametro los $datos */
//                     //llama a la funcion determinarPuntos, para que determine los puntos (gano, perdio, empate)
//                     if ($resultado = "GANO JUGADOR X"){
//                         $partidosGanados =  $partidosGanados + 1;
//                         $puntosAcumulados = $puntosAcumulados+$datos["puntosObtenidosX"];
//                     }elseif ($resultado = "GANO JUGADOR O"){
//                         $partidosPerdidos = $partidosPerdidos + 1;
//                     }else{
//                         $partidosEmpatados=$partidosEmpatados + 1;
//                     }
//                 }
//                 else($posicionDatosJuego == "nombreJugadorO")
//                 {
//                     $resultado = resultadoJuego($datos);
//                     if ($resultado = "GANO JUGADOR O"){
//                         $partidosGanados =  $partidosGanados + 1;
//                         $puntosAcumulados = $puntosAcumulados+ $datos["puntosObtenidosO"];
//                     }elseif ($resultado = "GANO JUGADOR X"){
//                         $partidosPerdidos = $partidosPerdidos + 1;
//                     }else{
//                         $partidosEmpatados=$partidosEmpatados + 1;
//                     }
//                 }
        
//             }else{
//                 echo "Ese jugador nunca jugo una partida!\n";
//                 echo "Ingrese un nombre diferente por favor: ";
//                 $nombreJugador = strtoupper(trim(fgets(STDIN)));} 
//         }
//     }
//     //esto tiene que devolverse en ese arreglo
//     $resumenJuego= ["nombreJugador"=>$nombreJugador, "juegosGandos"=>$partidosGanados ,"juegosPerdidos"=>$partidosPerdidos ,"juegosEmpatados"=>$partidosEmpatados ,"puntosAcumulados"=>$puntosAcumulados];  
//     return $resumenJuego;
// }



/**
 * A partir de la colleccion de juegos, ordena los juegos
 */
function ordenarPorO($juegos){
    foreach ($juegos as $indice => $juego) {
        
    }
}

/**
 * Pide un simbolo (X ó O) y recorre la coleccion de juegos, devuelve el porcentaje de juegos ganados.
 * @return int
 */
function porcentajeGanados($juegos){
    $juegosPorSimbolo = 0;
    $total = count($juegos);
    $simbolo = simboloElegido();
    
    foreach ($juegos as $indice => $juego) {
        if ($simbolo == "X"){
            if (resultadoJuego($juego) == "GANO JUGADOR X") {
                $juegosPorSimbolo ++;
            }
        }
        if ($simbolo == "O"){
            if (resultadoJuego($juego) == "GANO JUGADOR O") {
                $juegosPorSimbolo ++;
            }
        }
    }
    $porcentaje = ($juegosPorSimbolo * 100) / $total;
    echo "El porcentaje de juegos ganador por " . $simbolo . " es " . $porcentaje . "%\n";
}



/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/

//Declaración de variables:

//Inicialización de variables:

// Carga la collecion de 10 juegos
$coleccionDeJuegos = cargarJuegos();

//Valores del rango
$min = 1;
$max = 7;

//Proceso:

// $juego = jugar();
// print_r($juego);

do {
    // Opcion del menu
    $opcion = seleccionarOpcion();
        switch ($opcion) {
            case 1: 
                //Inicia el juego de Tateti.
                echo "Elegiste jugar al Tateti! \n";
                $juego = jugar();
                imprimirResultado($juego);

                $coleccionDeJuegos = agregarJuego($coleccionDeJuegos, $juego);
                print_r($coleccionDeJuegos);
                break;
            case 2: 
                //Muesttra un juego a partir de un numero ingresado.
                $juegoElegido = mostrarJuego($coleccionDeJuegos);
                break;
            case 3: 
                //Muestra el primer juego ganador, a partir del nombre del jugador.
                $juegoGanador = primerJuegoGanado($coleccionDeJuegos);
                print_r($juegoGanador);
                // if ($juegoGanador == []) {
                //     echo "Ese jugador no ha gando ningún juego aún.\n";
                // }else{
                //     echo $juegoGanador;
                // }
                break;
            case 4: 
                //Muestra el porcentaje de juegos ganados de "X" o "0".
                porcentajeGanados($coleccionDeJuegos);
                break;
            case 5: 
                //Muestra resumen de un jugador.
                resumenJugador($coleccionDeJuegos);
                break;
            case 6: 
                //Muestra listado de juegos ordenados por jugador "0".
                
                break;
        }
}
// Opción 7 sale del programa.
while ($opcion != 7);

echo "\n Gracias por jugar al Tateti!\n";