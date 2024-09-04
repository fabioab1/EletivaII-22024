<?php
    declare(strict_types=1);
?>
<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resposta do Exercício 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <h1>Resposta do Exercício 2</h1>

        <?php
            function maiusculoMinusculo(string $palavra): void
            {
                echo '<p>Maiúscula: '.strtoupper($palavra).'.</p>';
                echo '<p>Minúscula: '.strtolower($palavra).'.</p>';
            }

            if($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                try
                {
                    $palavra = $_POST['palavra'] ?? "";

                    maiusculoMinusculo($palavra);
                }
                catch (Exception $e)
                {
                    echo 'Erro! '.$e->getMessage();
                }
            }
            else
            {
                echo "<h4>Ops! Algo deu errado...</h4>";
                echo "<p>Tente novamente.</p>";
                echo "<a class='btn btn-primary' href='exer2.php' role='button'>Voltar</a>";
            }



        ?>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>