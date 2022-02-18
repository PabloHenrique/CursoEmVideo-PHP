<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/estilos/style.css">
        <title>Curso de PHP</title>
        <style>
            /* Estilos aqui */
        </style>
    </head>
    <body>
        <div class="informacoes">
            <h2 class="titlemain">Resultado</h2>
            <h3 class="subtitle">From: Exercício 06</h3>
        </div>
        <div class="programa">
            <!-- Códigos PHP -->
            <?php
                $num = $_GET["valor"];
                $resultado = sqrt($num);
                echo "A raiz quadrada de $num é: <strong>", number_format($resultado, 1) ,"</strong>";
                echo "<br><br><a href='../exercicios/exe06.php'>Voltar</a>";
            ?>
        </div>
    </body>
</html>