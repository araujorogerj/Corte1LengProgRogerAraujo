<?php
$atencion = $_GET['atencion'];
$calidad = $_GET['calidad'];
$tiempo = $_GET['tiempo'];
$puntoAtencion = 0;
$puntoCalidad = 0;
$puntoTiempo = 0;

echo "<h2> Información recibida </h2>";
echo "La atención del personal fue: " . $atencion . "<br/>";
echo "La calidad de la comida fue: " . $calidad . "<br/>";
echo "El tiempo de entrega de la comida fue: " . $tiempo . "<br/>";

if ($atencion === 'buena') {
    $puntoAtencion = 5;
} elseif ($atencion === 'regular') {
    $puntoAtencion = 3;
} else {
    $puntoAtencion = 1;
}

if ($calidad === 'buena') {
    $puntoCalidad = 5;
} elseif ($calidad === 'regular') {
    $puntoCalidad = 3;
} else {
    $puntoCalidad = 1;
}

if ($tiempo === 'buena') {
    $puntoTiempo = 5;
} elseif ($tiempo === 'regular') {
    $puntoTiempo = 3;
} else {
    $puntoTiempo = 1;
}

$sumaPuntos = $puntoAtencion + $puntoCalidad + $puntoTiempo;
$calificacionFinal = "";


echo "El total es de: " . $sumaPuntos . "<br />";

if ($sumaPuntos >= 14) {
    $calificacionFinal = "Buena";
} else if ($sumaPuntos <= 9) {
    $calificacionFinal = "Mala";
} else {
    $calificacionFinal = "Regular";
}


echo "La apreciación del cliente es: " . $calificacionFinal . "<br />";
?>