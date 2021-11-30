<?php
include_once("tateti.php");

/**************************************/
/***** DATOS DE LOS INTEGRANTES *******/
/**************************************/
// Técnicatura Universitaria en desarrollo web.

// Orozco Iván FAI 3699
// ivan.orozco@est.fi.uncoma.edu.ar

// Pohle Héctor FAI 3715
// hector.pohle@est.fi.uncoma.edu.ar

// https://github.com/hepohle/tateti

/**************************************/
/***** DEFINICION DE FUNCIONES ********/
/**************************************/

// Carga un array con diez juegos.
/**
 * Inicializa la estructura de datos de la coleccion de juegos.
 * @return array 
 */
function cargarJuegos(){
    //array juegos cargados




    $juego1 = ["jugadorCruz"=> "IVAN","jugadorCirculo"=> "HECTOR","puntosCruz"=> 1,"puntosCirculo"=> 1];
    $juego2 = ["jugadorCruz"=> "MAJO","jugadorCirculo"=> "SANDRA", "puntosCruz"=> 1,"puntosCirculo"=> 2];
    $juego3 = ["jugadorCruz"=> "MAJO","jugadorCirculo"=> "SANDRA","puntosCruz"=> 5,"puntosCirculo"=> 3];
    $juego4 = ["jugadorCruz"=> "MARIA","jugadorCirculo"=> "JOSE","puntosCruz"=> 3,"puntosCirculo"=> 3];
    $juego5 = ["jugadorCruz"=> "DEBY","jugadorCirculo"=> "KAREN","puntosCruz"=> 6,"puntosCirculo"=> 3];
    $juego6 = ["jugadorCruz"=> "HECTOR","jugadorCirculo"=> "MAJO","puntosCruz"=> 2,"puntosCirculo"=> 4];
    $juego7 = ["jugadorCruz"=> "IVAN","jugadorCirculo"=> "ALICIA","puntosCruz"=> 7,"puntosCirculo"=> 2];
    $juego8 = ["jugadorCruz"=> "HECTOR","jugadorCirculo"=> "LUIS","puntosCruz"=> 1,"puntosCirculo"=> 2];
    $juego9 = ["jugadorCruz"=> "SANDRA","jugadorCirculo"=> "JOSE","puntosCruz"=> 10,"puntosCirculo"=> 4];
    $juego10 = ["jugadorCruz"=> "LEONARDO","jugadorCirculo"=> "IVAN","puntosCruz"=> 2,"puntosCirculo"=> 2];

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

    $coleccionJuegos = [];

$jg1 = ["jugadorCruz" => "AMARILIS", "jugadorCirculo" => "MILOS",    "puntosCruz" => 1, "puntosCirculo" => 1];
$jg2 = ["jugadorCruz" => "ZENDA",    "jugadorCirculo" => "AMARILIS", "puntosCruz" => 3, "puntosCirculo" => 0];
$jg3 = ["jugadorCruz" => "ZENDA",    "jugadorCirculo" => "MILOS",    "puntosCruz" => 0, "puntosCirculo" => 4];
$jg4 = ["jugadorCruz" => "CALIXTO",  "jugadorCirculo" => "TRUMAN",   "puntosCruz" => 1, "puntosCirculo" => 1];
$jg5 = ["jugadorCruz" => "AMARILIS", "jugadorCirculo" => "MILOS",    "puntosCruz" => 5, "puntosCirculo" => 0];
$jg6 = ["jugadorCruz" => "FEDORA",   "jugadorCirculo" => "CALIXTO",  "puntosCruz" => 0, "puntosCirculo" => 3];
$jg7 = ["jugadorCruz" => "TRUMAN",   "jugadorCirculo" => "AMARILIS", "puntosCruz" => 4, "puntosCirculo" => 0];
$jg8 = ["jugadorCruz" => "CALIXTO",  "jugadorCirculo" => "TRUMAN",   "puntosCruz" => 1, "puntosCirculo" => 1];
$jg9 = ["jugadorCruz" => "TRUMAN",   "jugadorCirculo" => "FEDORA",   "puntosCruz" => 2, "puntosCirculo" => 0];
$jg10= ["jugadorCruz" => "MILOS",    "jugadorCirculo" => "ZENDA",   "puntosCruz" => 1, "puntosCirculo" => 1];

array_push($coleccionJuegos, $jg1, $jg2, $jg3, $jg4, $jg5, $jg6, $jg7, $jg8, $jg9, $jg10);


    return $coleccionJuegos;
};

/**
 * Calcula el resultado a partir de los puntos de cada jugador.
 * @param array $juego
 * @return string
 */
function resultadoJuego($juego){
    if ($juego["puntosCruz"] > $juego["puntosCirculo"]) {
        $resultado = "GANO JUGADOR X";
    } elseif ($juego["puntosCruz"] < $juego["puntosCirculo"]) {
        $resultado = "GANO JUGADOR O";
    } else {
        $resultado = "EMPATE";
    }
    return $resultado;
}

/**
 * Pide al usuario un numero de juego y muestra su resumen.
 * @param array $coleccionJuegos
 * @param int $num
 */
function mostrarJuego($coleccionDeJuegos, $num){
    $cantidadDeJuegos = count($coleccionDeJuegos);
    
   while ($num > $cantidadDeJuegos || $num < 0) {
        echo"Error, ese juego no existe!\n";
        echo "Ingrese nuevamente el juego que desea ver: ";
        $num=trim(fgets(STDIN));
   }
    if($num > 0 && $num <= $cantidadDeJuegos) {
        $resultado = resultadoJuego($coleccionDeJuegos[$num]);
        echo "******************************\n";
        echo "JUEGO TATETI N°: ".$num." " . "(".$resultado.")" ."\n";
        echo "JUGADOR X: ".$coleccionDeJuegos[$num]["jugadorCruz"]." obtuvo ".$coleccionDeJuegos[$num]["puntosCruz"]." punto."."\n";
        echo "JUGADOR O: ".$coleccionDeJuegos[$num]["jugadorCirculo"]." obtuvo ".$coleccionDeJuegos[$num]["puntosCirculo"]." punto."."\n";
        echo "******************************\n";
    }
}

/**
 * Le pide al usuario un número dentro del rango de las opciones del menu.
 * Se llama a la funcion solicitarNumeroEntre() del archivo tateti.php
 * @return int 
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
    
    $opcion = solicitarNumeroEntre(1, 7);
    
    return $opcion;
}

/**
 * Recibe un array con la coleccion de juegos y un juego nuevo.
 * @param array $coleccionDeJuegos
 * @param array $nuevoJuego
 * @return array 
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
 * @return int 
 */
function cantidadGanados($juegos){
    $juegosGanados = 0;
    foreach ($juegos as $indice => $juego) {
        if($juego["puntosCruz"] <> $juego["puntosCirculo"]){
                    $juegosGanados ++;
        }
    }
    return $juegosGanados;
}

/**
 * Muestra el primer juego ganado a partir del nombre del jugador
 * @param array $juego
 * @return int 
 */
function primerJuegoGanado($juegos, $nombreJugador){ 
    $n = count($juegos);
    $i=0;
    $indice = -1;

    while ($i < $n && $indice==-1) {
        if ($juegos[$i]["jugadorCruz"] == $nombreJugador){
            if (resultadoJuego($juegos[$i]) == "GANO JUGADOR X"){
                $indice = $i;
            }
        }elseif ($juegos[$i]["jugadorCirculo"] == $nombreJugador) {
            if (resultadoJuego($juegos[$i]) == "GANO JUGADOR O") {
                $indice = $i;
            }   
        }
        $i++;
    }
    return $indice;
}

/**
 * Toma el número que devuelve primerJuegoGanado (indice del juego encontrado o -1) y muestra el resultado.
 * @param int $n
 * 
 */
function juegoEncontrado($n){
    if ($n == -1) {
        echo"\n******************************\n";
        echo "Este jugador no ganó ningún juego todavía\n";
        echo "******************************\n";
    }else {
        echo"\n******************************\n";
        echo"El jugador ganó el juego nº " . $n+1;
        echo "\n******************************\n";
    }
}

/**
 * A partir de la coleccion de juegos se pide un nombre de un jugador y se devuelve su resumen.
 * @param array $juegos
 * @return array $jugador
 */
function resumenJugador($juegos){
    echo "ingrese el nombre del jugador: ";
    $nombreJugador = trim(fgets(STDIN));
    $nombreJugador = strtoupper($nombreJugador);
    $partidosGanados = 0;
    $partidosPerdidos = 0;
    $partidosEmpatados = 0;
    $puntosAcumulados = 0;
    $jugador =[];
    foreach ($juegos as $juego) {
        
            if($juego["jugadorCruz"] == $nombreJugador){ 
                if (resultadoJuego($juego) == "GANO JUGADOR X"){ 
                    $partidosGanados ++;
                    $puntosAcumulados = $puntosAcumulados + $juego["puntosCruz"];
                }elseif (resultadoJuego($juego) == "GANO JUGADOR O") {
                    $partidosPerdidos ++;    
                }else {
                    $partidosEmpatados ++;
                    $puntosAcumulados = $puntosAcumulados + $juego["puntosCruz"];
                }
            }elseif ($juego["jugadorCirculo"] == $nombreJugador){
                if(resultadoJuego($juego) == "GANO JUGADOR O") {
                    $partidosGanados ++;
                    $puntosAcumulados = $puntosAcumulados + $juego["puntosCirculo"];
                }elseif (resultadoJuego($juego) == "GANO JUGADOR X") {
                    $partidosPerdidos ++;
                }else {
                    $partidosEmpatados ++;
                    $puntosAcumulados = $puntosAcumulados + $juego["puntosCirculo"];
                } 
            }
        
    }

    $jugador =["nombre"=>$nombreJugador, "juegosGanados"=>$partidosGanados, "juegosPerdidos"=>$partidosPerdidos, "juegosEmpatados"=>$partidosEmpatados, "puntosAcumulados"=>$puntosAcumulados];

    return $jugador;  
}

/**
 * Recibe el array jugador y muestra el resumen.
 * @param array $jugador
 */
function mostrarResumen($jugador){
    $partidosJugados = $jugador["juegosGanados"] + $jugador["juegosPerdidos"] + $jugador["juegosEmpatados"];
    if ($partidosJugados == 0) {
        echo "******************************\n";
        echo "Ese jugador todavía no jugó ningun partido.\n";
        echo "******************************\n";
    }else {
        echo "******************************\n";
        echo "JUGADOR: " . $jugador["nombre"] . "\n";
        echo "Gano: " . $jugador["juegosGanados"] . " juegos.\n";
        echo "Perdió: " . $jugador["juegosPerdidos"] . " juegos.\n";
        echo "Empató: " . $jugador["juegosEmpatados"] . " juegos.\n";
        echo "Total de puntos acumulados: " . $jugador["puntosAcumulados"] . " puntos. \n";
        echo "******************************\n";
    }  
}

/**
 * compara dos valores y los ordena en forma ascendente.
 * @param string $a, $b
 */
function cmp($a, $b) {
    if ($a["jugadorCirculo"] == $b["jugadorCirculo"]) {
        $a = 0;
    }elseif($a["jugadorCirculo"] < $b["jugadorCirculo"]){
        $a = -1;
    }elseif($a["jugadorCirculo"] > $b["jugadorCirculo"]){
        $a = 1;
    }
    return $a;
}
/**
 * A partir de la colleccion de juegos, ordena los juegos
 * @param array $ColeccionDeJuegos
 */
function ordenarPorO($coleccionDeJuegos)
{
    uasort($coleccionDeJuegos, "cmp");
    print_r($coleccionDeJuegos);
}

/**
 * Pide un simbolo (X ó O) y recorre la coleccion de juegos, devuelve el porcentaje de juegos ganados.
 * @param array $juegos
 * @param String $simbolo
 * @return int
 */
function porcentajeGanados($juegos, $simbolo){
    $juegosPorSimbolo = 0;
    
    $total = cantidadGanados($juegos);
    foreach ($juegos as  $juego) {
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
    echo "******************************\n";
    echo "El porcentaje de juegos ganador por " . $simbolo . " es " . round($porcentaje, 2) . "%\n";
    echo "******************************\n";
}

/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/

// Carga la collecion de 10 juegos
$coleccionDeJuegos = cargarJuegos();


//Proceso:

do {
    // Opcion del menu
    $opcion = seleccionarOpcion();
        switch ($opcion) {
            case 1: 
                //Inicia el juego de Tateti.
                echo "Elegiste jugar al Tateti! \n";
                $juego = jugar();
                //imprimirResultado($juego);

                // Agrega el juego jugado a la coleccion de juegos.
                $coleccionDeJuegos = agregarJuego($coleccionDeJuegos, $juego);
                //print_r($coleccionDeJuegos);
                break;
            case 2: 
                //Muestra un juego a partir de un numero ingresado.
                echo "Ingrese el numero del juego que desea ver: ";
                $num=trim(fgets(STDIN)); 
                mostrarJuego($coleccionDeJuegos,$num);
                break;
            case 3: 
                //Muestra el primer juego ganador, a partir del nombre del jugador.
                //juegoEncontrado(primerJuegoGanado($coleccionDeJuegos));
                echo "Ingrese el nombre del jugador: \n";
                $nombreJugador = strtoupper(trim(fgets(STDIN)));
                $num = primerJuegoGanado($coleccionDeJuegos, $nombreJugador);
                mostrarJuego($coleccionDeJuegos, $num);
                break;
            case 4: 
                //Muestra el porcentaje de juegos ganados de "X" o "0".
                $simbolo = simboloElegido();
                porcentajeGanados($coleccionDeJuegos, $simbolo);
                break;
            case 5: 
                //Muestra resumen de un jugador.
                mostrarResumen(resumenJugador($coleccionDeJuegos));
                break;
            case 6: 
                //Muestra listado de juegos ordenados por jugador "0".
                ordenarPorO($coleccionDeJuegos);
                break;
        }
}
// Opción 7 sale del programa.
while ($opcion != 7);

echo "\n Gracias por jugar al Tateti!\n";