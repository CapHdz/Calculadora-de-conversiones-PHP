<?php
    require "clases/Masa.php";
    require "clases/Volumen.php";
    require "clases/Tiempo.php";
    require "clases/Moneda.php";
    require "clases/Longitud.php";

    class Calculadora implements Convertidor{
        public function convertir($tipo, $cantidad, $unidad_origen, $unidad_destino){
            switch ($tipo) {
                case 'masa':
                    $conversor = new Masa();
                    break;
                case 'volumen':
                    $conversor = new Volumen();
                    break;
                case 'moneda':
                    $conversor = new Moneda();
                    break;
                case 'tiempo':
                    $conversor = new Tiempo();
                    break;
                case 'longitud':
                    $conversor = new Longitud();
                    break; 
                default:
                    return "Tipo de medida no válido.";
            }
            return $conversor->convertir($tipo,$cantidad, $unidad_origen, $unidad_destino);
        }
    }
?>