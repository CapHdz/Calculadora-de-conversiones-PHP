
<?php
//Creacion de la interfaz
//Principio de segregacion de interfaz
interface ITiempo{
    public function calcular($valor);
}

interface IInformacion{
    public function mostrarInformacion();
}

//Principio de responsabilidad unica
//Clases implementadoras
class Tiempo{
    public $segundo = 0;
    public $minuto = 0;
    public $hora = 0;
    public $dia = 0;
    public $semana = 0;
    public $anio = 0;
}

class Segundos extends Tiempo implements ITiempo, IInformacion{
    public function calcular($valor){
        $this->segundo = $valor;
        $this->minuto = $valor / 60;
        $this->hora = $valor / 3600;
        $this->dia = $valor / 86400;
        $this->semana = $valor / 604800;
        $this->anio = $valor / 200752000;
    }

    public function mostrarInformacion(){
        return "<table class='table'>
        <tr>
        <thead>
            <th>Segundo</th>
            <th>Minuto</th>
            <th>Hora</th>
            <th>Dia</th>
            <th>Semana</th>
            <th>Anio</th>>
        </thead>
        </tr>
        <tr>
        <tbody>
            <td>$this->segundo</td>
            <td>$this->minuto</td>
            <td>$this->hora</td>
            <td>$this->dia</td>
            <td>$this->semana</td>
            <td>$this->anio</td>
        </tbody>
        </tr>
        </table>";
    }
}

class Minutos extends Tiempo implements ITiempo, IInformacion{
    public function calcular($valor){
        $this->segundo = $valor * 60;
        $this->minuto = $valor;
        $this->hora = $valor / 60;
        $this->dia = $valor / 1440;
        $this->semana = $valor / 10080;
        $this->anio = $valor / 525600;
    }

    public function mostrarInformacion(){
        return "<table class='table'>
        <tr>
        <thead>
            <th>Segundo</th>
            <th>Minuto</th>
            <th>Hora</th>
            <th>Dia</th>
            <th>Semana</th>
            <th>Anio</th>>
        </thead>
        </tr>
        <tr>
        <tbody>
            <td>$this->segundo</td>
            <td>$this->minuto</td>
            <td>$this->hora</td>
            <td>$this->dia</td>
            <td>$this->semana</td>
            <td>$this->anio</td>
        </tbody>
        </tr>
        </table>";
    }
}

class Horas  extends Tiempo implements ITiempo, IInformacion{
    public function calcular($valor){
        $this->segundo = $valor * 3600;
        $this->minuto = $valor * 60;
        $this->hora = $valor;
        $this->dia = $valor / 24;
        $this->semana = $valor / 168;
        $this->anio = $valor / 8760;
    }

    public function mostrarInformacion(){
        return "<table class='table'>
        <tr>
        <thead>
            <th>Segundo</th>
            <th>Minuto</th>
            <th>Hora</th>
            <th>Dia</th>
            <th>Semana</th>
            <th>Anio</th>>
        </thead>
        </tr>
        <tr>
        <tbody>
            <td>$this->segundo</td>
            <td>$this->minuto</td>
            <td>$this->hora</td>
            <td>$this->dia</td>
            <td>$this->semana</td>
            <td>$this->anio</td>
        </tbody>
        </tr>
        </table>";
    }
}

class Dias  extends Tiempo implements ITiempo, IInformacion{
    public function calcular($valor){
        $this->segundo = $valor * 86400;
        $this->minuto = $valor * 1440;
        $this->hora = $valor * 24;
        $this->dia = $valor;
        $this->semana = $valor / 7;
        $this->anio = $valor / 365;
    }

    public function mostrarInformacion(){
        return "<table class='table'>
        <tr>
        <thead>
            <th>Segundo</th>
            <th>Minuto</th>
            <th>Hora</th>
            <th>Dia</th>
            <th>Semana</th>
            <th>Anio</th>>
        </thead>
        </tr>
        <tr>
        <tbody>
            <td>$this->segundo</td>
            <td>$this->minuto</td>
            <td>$this->hora</td>
            <td>$this->dia</td>
            <td>$this->semana</td>
            <td>$this->anio</td>
        </tbody>
        </tr>
        </table>";
    }
}

class Semanas extends Tiempo implements ITiempo, IInformacion{
    public function calcular($valor){
        $this->segundo = $valor * 604800;
        $this->minuto = $valor * 1080;
        $this->hora = $valor * 168;
        $this->dia = $valor * 7;
        $this->semana = $valor;
        $this->anio = $valor / 52.14;
    }

    public function mostrarInformacion(){
        return "<table class='table'>
        <tr>
        <thead>
            <th>Segundo</th>
            <th>Minuto</th>
            <th>Hora</th>
            <th>Dia</th>
            <th>Semana</th>
            <th>Anio</th>>
        </thead>
        </tr>
        <tr>
        <tbody>
            <td>$this->segundo</td>
            <td>$this->minuto</td>
            <td>$this->hora</td>
            <td>$this->dia</td>
            <td>$this->semana</td>
            <td>$this->anio</td>
        </tbody>
        </tr>
        </table>";
    }
}

class Anio extends Tiempo implements ITiempo, IInformacion{
    public function calcular($valor){
        $this->segundo = $valor * 31536000;
        $this->minuto = $valor * 525600;
        $this->hora = $valor * 8760;
        $this->dia = $valor * 365;
        $this->semana = $valor * 52.14;
        $this->anio = $valor;
    }

    public function mostrarInformacion(){
        return "<table class='table'>
        <tr>
        <thead>
            <th>Segundo</th>
            <th>Minuto</th>
            <th>Hora</th>
            <th>Dia</th>
            <th>Semana</th>
            <th>Anio</th>>
        </thead>
        </tr>
        <tr>
        <tbody>
            <td>$this->segundo</td>
            <td>$this->minuto</td>
            <td>$this->hora</td>
            <td>$this->dia</td>
            <td>$this->semana</td>
            <td>$this->anio</td>
        </tbody>
        </tr>
        </table>";
    }
}

//Principio de Abierto/Cerrado


