<?php
    require_once "clases/InterfaceConvertidor.php";
    class Datos implements Convertidor{
        public function convertir($tipo, $cantidad, $unidad_origen, $unidad_destino){
            $conversiones = [
            'bits' => 1,
            'bytes' => 0.125,
            'kilobits' => 0.001,
            'kilobytes' => 0.000125,
            'megabytes' => 1.25e-7,
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