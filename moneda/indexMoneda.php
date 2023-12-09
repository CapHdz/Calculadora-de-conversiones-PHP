
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
        <form action="" method="POST" class="needs-validation" novalidate>
            <div class="col-md-6">
                <label for="usd" class="form-label">USD</label>
                <input type="number" step="0.01" class="form-control" min="0" id="usd" required>
                <div class="valid-feedback">
                    Formato correcto
                </div>
                <div class="invalid-feedback">
                    Debes llenar este campo
                </div>
            </div>
            <br>
            <div class="col-md-6">
                <label for="convertir" class="form-label">Moneda a convertir: </label>
                <select required required>
                    <option selected disabled value="">Seleccionar opcion...</option>
                    <option value="euro">Euro</option>
                    <option value="quetzal">Quetzal</option>
                    <option value="lempira">Lempira</option>
                    <option value="cordova">Cordova</option>
                    <option value="balboa">Balboa</option>
                </select>
            </div>
            <br>
            <input class="btn btn-primary" type="submit" value="Convertir">
        </form>
    </section>
    <br>
    <section class="container">
        <h2>Resultado de la conversion:</h2>
    </section>

    <script src="../validaciones.js"></script>
    <!--Script de bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

