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
            <h3 class="subtitle">From: Exercício 13</h3>
        </div>
        <div class="programa">
            <!-- Códigos PHP -->
            <?php
                $n1 = $_GET["n1"];
                $n2 = $_GET["n2"]; 
                $n3 = $_GET["n3"]; 
                $n4 = $_GET["n4"];           
                $n5 = $_GET["n5"];
                
                if(($n1) && ($n2) && ($n3) && ($n4) && ($n5)){
                    $soma = $n1 + $n2 + $n3 + $n4 + $n5;
                    echo "<br>O valor da soma resulta em: <strong>$soma</strong>";
                    $media = $soma / 5;
                    echo "<br><br>E a média resulta em: <strong>$media</strong>";
                }
                else{
                    echo "Não foi possível calcular!";
                    echo "<br>Tente novamente com valores válidos!";
                }
                echo "<br><br><a href='../exercicios/exe13.php'>Voltar</a>";
            ?>
        </div>
    </body>
</html>