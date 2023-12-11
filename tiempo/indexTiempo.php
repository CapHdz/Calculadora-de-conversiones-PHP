
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Convertidor de tiempo</title>
</head>
<body>
    <header class="container">
        <h1>Conversor de Tiempo</h1>
    </header>
    <section class="container">
        <form action="" method="post" class="needs-validation" novalidate>
            <div class="col-md-6">
                <label for="convertir" class="form-label">Que deseas convertir?</label>
                <select name="unidad" required>
                    <option selected disabled value="">Seleccionar opcion...</option>
                    <option value="segundo">Segundo</option>
                    <option value="minuto">minuto</option>
                    <option value="hora">hora</option>
                    <option value="dia">dia</option>
                    <option value="semana">semana</option>
                    <option value="anio">anio</option>
                </select>
                <div class="valid-feedback">
                    Seleccion correcta
                </div>
                <div class="invalid-feedback">
                    Debes seleccionar una opcion
                </div>
            </div>
            <div class="col-md-6">
                <label for="valor" class="form-label">Cuanto quieres convertir?</label>
                <input name="valor" type="number" step="0.01" class="form-control" min="0" required>
                <div class="valid-feedback">
                    Formato correcto
                </div>
                <div class="invalid-feedback">
                    Este campo no puede estar vacio y debes ingresar solo numeros.
                </div>
            </div>
            <br>
            
            <br>
            <input class="btn btn-primary" type="submit" value="Convertir">
        </form>
    </section>
    <section class="container">
        <?php
            require './Tiempo.php';

            if(isset($_POST['unidad'], $_POST['valor'])){
                if($_POST['unidad'] == 'segundo'){
                    $segundo = new Segundos();
                    $segundo->calcular($_POST['valor']);
                    echo $segundo->mostrarInformacion();
                }elseif($_POST['unidad'] == 'minuto'){
                    $minuto = new Minutos();
                    $minuto->calcular($_POST['valor']);
                    echo $minuto->mostrarInformacion();
                }elseif($_POST['unidad'] == 'hora'){
                    $hora = new Horas();
                    $hora->calcular($_POST['valor']);
                    echo $hora->mostrarInformacion();
                }elseif($_POST['unidad'] == 'dia'){
                    $dia = new Dias();
                    $dia->calcular($_POST['valor']);
                    echo $dia->mostrarInformacion();
                }elseif($_POST['unidad'] == 'semana'){
                    $semana = new Semanas();
                    $semana->calcular($_POST['valor']);
                    echo $semana->mostrarInformacion();
                }elseif($_POST['unidad'] == 'anio'){
                    $anio = new Anio();
                    $anio->calcular($_POST['valor']);
                    echo $anio->mostrarInformacion();
                }else{
                    echo "<h3>Valores ingresados no corresponden a valores validos de tiempo</h3>";
                }
            }
        ?>
    </section>

    <script src="validaciones.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

