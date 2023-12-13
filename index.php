<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Conversor de unidades</title>
</head>
<body>
    <?php include "modulos/header.php" ?>
    <section class="container py-5 d-flex justify-content-center">
    <form class="w-50 p-3" action="" method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label fs-5"><b>Unidad de medida</b></label>
            <select class="form-control" name="tipo" id="tipo" onchange="cargarUnidades()">
                <option selected></option>
                <option value="masa">Masa</option>
                <option value="volumen">Volumen</option>
            </select>
            <div id="emailHelp" class="form-text">Selecciona la unidad de medida a convertir</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="cantidad">Ingresa la cantidad a convertir:</label>
            <input class="form-control" type="number" name="cantidad" id="cantidad" required>
            <label class="form-label" for="unidad_origen">Unidad de origen:</label>
            <select class="form-control" name="unidad_origen" id="unidad_origen" required>
                <!-- Las opciones se cargarán dinámicamente mediante JavaScript -->
            </select>
            <label for="unidad_destino">Unidad de destino:</label>
            <select class="form-control" name="unidad_destino" id="unidad_destino" required>
            </select>
        </div>
        <button class="btn btn-outline-success" type="submit">Convertir</button>
    </form>
    </section>
    <?php
        include 'clases/Calculadora.php';
        if(isset($_POST['tipo'],$_POST['cantidad'],$_POST['unidad_origen'],$_POST['unidad_destino'])){
            $tipo = $_POST['tipo'];
            $cantidad = $_POST['cantidad'];
            $unidad_origen = $_POST['unidad_origen'];
            $unidad_destino = $_POST['unidad_destino'];

            $converter = new Calculadora();

            $resultado = $converter->convertir($tipo, $cantidad, $unidad_origen, $unidad_destino);

            echo "<p>La conversión de $cantidad $unidad_origen a $unidad_destino da como resultado: $resultado $unidad_destino";
        };
    ?>
    <?php include "modulos/footer.php"; ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="assets/js/main.js"></script>
</html>