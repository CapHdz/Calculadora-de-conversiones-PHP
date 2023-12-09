
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <title>Convertidor de monedas</title>
</head>
<body>
    <br>
    <header class="container">
        <h1>Convertidor de monedas</h1>
    </header>
    <section class="container">
        <form action="" method="post" class="needs-validation" novalidate>
            <div class="col-md-6">
                <label for="usd" class="form-label">USD</label>
                <input name="dolar" type="number" step="0.01" class="form-control" min="0.01" required>
                <div class="valid-feedback">
                    Formato correcto
                </div>
                <div class="invalid-feedback">
                    Este campo no puede estar vacio y debes ingresar solo numeros.
                </div>
            </div>
            <br>
            <div class="col-md-6">
                <label for="convertir" class="form-label">Moneda a convertir: </label>
                <select name="moneda" required>
                    <option selected disabled value="">Seleccionar opcion...</option>
                    <option value="euro">Euro</option>
                    <option value="yen">YEN</option>
                    <option value="aud">Dolar Autraliano</option>
                    <option value="francoSuizo">Franco Suizo</option>
                    <option value="libraEsterlina">Libra Esterlina</option>
                </select>
                <div class="valid-feedback">
                    Seleccion correcta
                </div>
                <div class="invalid-feedback">
                    Debes seleccionar una opcion
                </div>
            </div>
            <br>
            <input class="btn btn-primary" type="submit" value="Convertir">
        </form>
    </section>
    <br>
    <section class="container">
        <?php
        require './Moneda.php';

        if(isset($_POST['dolar'], $_POST['moneda'])){
            if($_POST['moneda'] == 'euro'){
                $euroMoneda = new Euro();
                echo $euroMoneda->convertir($_POST['dolar']);
            }elseif($_POST['moneda'] == 'yen'){
                $yenMoneda = new Yen();
                echo $yenMoneda->convertir($_POST['dolar']);
            }elseif($_POST['moneda'] == 'aud'){
                $audMoneda = new AUD();
                echo $audMoneda->convertir($_POST['dolar']);
            }elseif($_POST['moneda'] == 'francoSuizo'){
                $francoMoneda = new FrancoSuizo();
                echo $francoMoneda->convertir($_POST['dolar']);
            }elseif($_POST['moneda'] == 'libraEsterlina'){
                $libraMoneda = new LibraEsterlina();
                echo $libraMoneda->convertir($_POST['dolar']);
            }else{
                echo "<p class='text-danger'>No has seleccionado una moneda valida</p>";
            }
        }
        ?>
    </section>

    <script src="../validaciones.js"></script>
    <!--Script de bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

