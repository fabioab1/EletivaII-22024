<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercício 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <h1>Exercício 2</h1>

        <form action="respexer2.php" method="POST">
            <div class="row mb-3">
                <div class="col-2">
                    <label for="valor1" class="form-label">Valor 1:</label>
                    <input type="number" class="form-control" id="valor1" name="valor1">
                </div>
                <div class="col-2">
                    <label for="valor2" class="form-label">Valor 2:</label>
                    <input type="number" class="form-control" id="valor2" name="valor2">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Calcular</button>

        </form>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>