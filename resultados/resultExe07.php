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
            <h3 class="subtitle">From: Exercício 07</h3>
        </div>
        <div class="programa">
            <!-- Códigos PHP -->
            <?php
                $nome = $_GET["nome"];
                $anoNasc = $_GET["anoNasc"];
                $sexo = $_GET["sexo"];
                $idade = 2022 - $anoNasc;

                echo "<br>Oláa, $nome!<br>Você nasceu em $anoNasc, logo tem <strong>$idade anos!</strong>";
                echo "<br><br><a href='../exercicios/exe07.php'>Voltar</a>";
            ?>
        </div>
    </body>
</html>