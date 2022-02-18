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
            <h2 class="titlemain">Funções Aritméticas</h2>
            <h3 class="subtitle">Utilize a <span>URL</span> para inserir os valores desejados!</h3>
            <h3 class="subtitle">Exemplo: <span>/funcoesAritmeticas.php?x=16&y=-5.49&z=2</span></h3>
        </div>
        <div class="programa">
            <!-- Códigos PHP -->
            <?php
                $valor1 = $_GET["x"];
                $valor2 = $_GET["y"];
                $valor3 = $_GET["z"];
                echo "<h3>Valores recebidos: $valor1, $valor2 e $valor3</h3>";
                echo "O valor absoluto de $valor2 é: ", abs($valor2);
                echo "<br><br>O valor de $valor1<sup>$valor3</sup> é: ", pow($valor1, $valor3);
                echo "<br><br>A raiz de $valor1 é: ", sqrt($valor1);
                echo "<br><br> O valor de $valor2 arredondado é: ", round($valor2);
                echo "<br><br> A parte inteira de $valor2 é: ", intval($valor2);
                echo "<br><br> O valor de $valor1 em moedas é: R$", number_format($valor1, 2, ",",".");
            ?>
        </div>
    </body>
</html>