<?php
    require "clases/InterfaceConvertidor.php";
    class Masa implements Convertidor{
        public function convertir($tipo, $cantidad, $unidad_origen, $unidad_destino){
            $conversiones = [
                'gramos' => 1,
                'kilogramos' => 0.001,
                'toneladas' => 0.000001,
                'onzas' => 0.035274,
                'libras' => 0.00220462,
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