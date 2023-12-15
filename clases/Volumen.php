<?php
    require_once "clases/InterfaceConvertidor.php";
    class Volumen implements Convertidor{
        public function convertir($tipo, $cantidad, $unidad_origen, $unidad_destino){
            $conversiones = [
                'mililitros' => 1,
                'litros' => 0.001,
                'metros_cubicos' => 1e-6,
                'galones' => 0.000264172,
                'pulgadas_cubicas' => 0.0610237,
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