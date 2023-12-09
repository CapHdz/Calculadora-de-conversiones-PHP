
<?php
//Creacion de la interfaz
interface IMoneda{
    public function convertir($moneda);
}

//Clases implementadoras
class Euro implements IMoneda{
    public function convertir($moneda){
        $resultado = $moneda * 1.08;
        return "Resultado: " . $resultado;
    }
}

class Quetzal implements IMoneda{
    public function convertir($moneda){
        return "Conversion desde Dolar a Q";
    }
}

class Lempira implements IMoneda{
    public function convertir($moneda){
        return "Conversion desde Dolar a L";
    }
}

class Cordova implements IMoneda{
    public function convertir($moneda){
        return "Conversion desde Dolar a C";
    }
}

class Balboa implements IMoneda{
    public function convertir($moneda){
        return "Conversion desde Dolar a B";
    }
}

//Implementaciones
$euro = new Euro();
echo $euro->convertir(1);

