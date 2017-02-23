<?php

/* 
 * La llamada a esta página ha de ser de tipo (Url)?cantidad=4.
 */

$palos = ['Espadas', 'Basto', 'Oro', 'Copa'];
$numeros = ['As','2','3','4','5','6','7','8','9','Sota','Caballo','Rey'];
$numeroDeCartas = $_GET['cantidad'];
$baraja = [];
if(($numeroDeCartas<=48)&&($numeroDeCartas>0)){
    while($numeroDeCartas>0){
        $paloSeleccionado = $palos[rand(0,3)];
        $numeroSeleccionado = $numeros[rand(0,11)];
        $carta = [
          'numero' => $numeroSeleccionado,
          'palo' => $paloSeleccionado
        ];
        if(!in_array($carta, $baraja)){
           // echo "cantidad ".$numeroDeCartas;
            $baraja[] = $carta;
            $numeroDeCartas--;
            // "carta ".$carta;

        }
    }
    echo json_encode($baraja);
} else {
    echo "Cantidad de cartas incorrecta.";
}
