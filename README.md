# barcode_UPC-A-Algoritmos
Varios algoritmos para codigos de barra
<?php
// Primero obtenemos el valor del codigo

$codigo = $_GET["barcodeID"]; // Obtenemos el valor del codigo del formulario

if (!$_GET['barcodeID']) {
    header("location: generar.php");
    die();
}

// Inicio función que nos permite obtener el mutliplo de 10 superior
function redondear_a_10($valor)
{
    // Convertimos $valor a entero
    $valor = intval($valor);
    // Si es un múltiplo de 10 exacto, no hace nada.
    if ($valor % 10 == 0) {
        return $valor;
    }
    // A $valor le agregamos lo que le falta para llegar al múltiplo de 10 superior
    $valor = $valor + (10 - ($valor % 10));
    return $valor;
}
// Fin función que nos permite el mutliplo de 10 superior

// Inicio proceso de localizar posiciones pares e impares en el valor del codigo obtenido desde un formulario x
// Lo que hace es buscar posiciones y no valores pares o impares
// Si la variable obtenida es por ejemplo: 56897425895 -> las posiciones pares serían  5 8 7 2 8 5 y la impares 6 9 4 5 9

$imparSalida = '';
$parSalida = '';

for ($contador = 0; $contador < strlen($codigo); $contador++) {
    if ($contador % 2 == 0) {
        $parSalida .= $codigo[$contador];
        $pares[] = $codigo[$contador];
    } else {
        $imparSalida .= $codigo[$contador];
        $impares[] = $codigo[$contador];
    }
}
// Fin proceso de localizar posiciones

// Obtenemos todos los valores de la variables y los guardamos para realizar los calculos necesarios para generar el codigo de validación $DifPI
// que se agregaría al final del código

$sumPares = array_sum($pares) * 3; // Sumamos el array obtenido en la variable $pares (valores en las posiociones pares) y lo multiplicamos por 3
$sumImpares = array_sum($impares); // Sumamos el array obtenido en la variable $impares (valores en las posiociones impares)
$sumParImpar = $sumPares + $sumImpares; // Obtenemos el resultado ($sumParImpar) de la suma de los array $sumPares e $sumImpares
$redondeado = redondear_a_10($sumParImpar); // Obtenemos el resultado ($redondeado) ejecutando la funcion redondear_a_10 
$DifParImpar = $redondeado - $sumParImpar; // Obtenemos el valor de control ($DifParImpar) restando el valor redondeado a la suma de Pares e impares 
?>
