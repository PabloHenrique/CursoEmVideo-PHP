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
            <h3 class="subtitle">From: Estrutura de Repetição</h3>
        </div>
        <div class="programa">
            <!-- Códigos PHP -->
            <?php
                $c = 0;
                $n1 = $_GET["num"];
                while($n1 >= $c){
                    echo $c;
                    $c++;
                    echo "<br>";
                }
                echo "<br><br><a href='../conceitos/estruturaWhile.php'>Voltar</a>";
            ?>
        </div>
    </body>
</html>