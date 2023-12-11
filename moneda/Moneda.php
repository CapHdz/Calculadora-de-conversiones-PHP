
<?php
//Creacion de la interfaz
//Principio de Segregacion de interfaz
interface IMoneda{
    public function convertir($moneda);
}

//Principio de Responsabilidad Unica
//Clases implementadoras
class Euro implements IMoneda{
    public function convertir($moneda){
        //Valores de monedas respecto al dolar a $1 el 8/12/23
        $eur = 0.93;
        $moneda = floatval($moneda);
        $resultado = $moneda * $eur;
        return "<h4>El valor ingresado en DOLARES equivalen a: <p class='text-success'>$resultado EUROS</p><h4>";
    }
}

class Yen implements IMoneda{
    public function convertir($moneda){
        //Valores de monedas respecto al dolar a $1 el 8/12/23
        $yen = 144.86;
        $moneda = floatval($moneda);
        $resultado = $moneda * $yen;
        return "<h4>El valor ingresado en DOLARES equivalen a:<p class='text-success'>$resultado YENES</p><h4>";
    }
}

class FrancoSuizo implements IMoneda{
    public function convertir($moneda){
        //Valores de monedas respecto al dolar a $1 el 8/12/23
        $francoSuizo = 0.88;
        $moneda = floatval($moneda);
        $resultado = $moneda * $francoSuizo;
        return "<h4>El valor ingresado en DOLARES equivalen a:<p class='text-success'>$resultado FRANCOS SUIZOS</p><h4>";
    }
}

class AUD implements IMoneda{
    public function convertir($moneda){
        //Valores de monedas respecto al dolar a $1 el 8/12/23
        $dolarAustraliano = 1.36;
        $moneda = floatval($moneda);
        $resultado = $moneda * $dolarAustraliano;
        return "<h4>El valor ingresado en DOLARES equivalen a: <p class='text-success'>$resultado DOLARES AUSTRALIANOS</p><h4>";
    }
}

class LibraEsterlina implements IMoneda{
    public function convertir($moneda){
        //Valores de monedas respecto al dolar a $1 el 8/12/23
        $libraEsterlina= 0.80;
        $moneda = floatval($moneda);
        $resultado = $moneda * $libraEsterlina;
        return "<h4>El valor ingresado en DOLARES equivalen a:<p class='text-success'>$resultado LIBRAS ESTERLINAS</p><h4>";
    }
}

//Principio de abierto y cerrado




