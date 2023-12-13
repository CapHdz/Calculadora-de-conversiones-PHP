<?php
    require "clases/Masa.php";
    require "clases/Volumen.php";
    class Calculadora implements Convertidor{
        public function convertir($tipo, $cantidad, $unidad_origen, $unidad_destino){
            switch ($tipo) {
                case 'masa':
                    $conversor = new Masa();
                    break;
                case 'volumen':
                    $conversor = new Volumen();
                    break;
                default:
                    return "Tipo de medida no válido.";
            }
            return $conversor->convertir($tipo,$cantidad, $unidad_origen, $unidad_destino);
        }
    }
?>