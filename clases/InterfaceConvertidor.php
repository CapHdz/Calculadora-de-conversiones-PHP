<?php
    interface Convertidor{
        public function convertir($tipo, $cantidad, $unidad_origen, $unidad_destino);
    }
?>