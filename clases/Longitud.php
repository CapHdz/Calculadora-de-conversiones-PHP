<?php
    require_once "clases/InterfaceConvertidor.php";
    class Longitud implements Convertidor{
        public function convertir($tipo, $cantidad, $unidad_origen, $unidad_destino){
            $conversiones = [             
                'centimetros' => 1,             
                'metros' => 0.01,             
                'kilometros' => 0.00001,             
                'pulgadas' => 0.393701,             
                'yardas' => 0.0109361,        
            ];
            return $this->realizarConversion($conversiones, $cantidad, $unidad_origen, $unidad_destino);
        }
        protected function realizarConversion($conversiones, $cantidad, $unidad_origen, $unidad_destino){
            if (isset($conversiones[$unidad_origen]) && isset($conversiones[$unidad_destino])) {
                $resultado = $cantidad * ($conversiones[$unidad_destino] / $conversiones[$unidad_origen]);
                return $resultado;
            } else {
                return "Unidades no válidas para la conversión.";
            }
        }
    }
?>