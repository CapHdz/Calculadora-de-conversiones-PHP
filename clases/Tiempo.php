<?php
    require_once "clases/InterfaceConvertidor.php";
    class Tiempo implements Convertidor{
        public function convertir($tipo, $cantidad, $unidad_origen, $unidad_destino){
            $conversiones = [             
                'segundos' => 1,             
                'minutos' => 0.0166667,             
                'horas' => 0.000277778,             
                'dias' => 1.15741e-5,             
                'semanas' => 1.65344e-6,         
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