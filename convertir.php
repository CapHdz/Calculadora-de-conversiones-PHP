<?php
    include 'clases/Calculadora.php';

    $tipo = $_POST['tipo'];
    $cantidad = $_POST['cantidad'];
    $unidad_origen = $_POST['unidad_origen'];
    $unidad_destino = $_POST['unidad_destino'];

    $converter = new Calculadora();

    $resultado = $converter->convertir($tipo, $cantidad, $unidad_origen, $unidad_destino);

    echo "La conversión de $cantidad $unidad_origen a $unidad_destino da como resultado: $resultado $unidad_destino";
?>
