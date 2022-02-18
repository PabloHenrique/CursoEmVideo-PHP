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
            <h2 class="titlemain">Exercício 05</h2>
            <h3 class="subtitle">Calcular a média e mostrar a situação</h3>
            <h3 class="subtitle">Utilize a <span>URL</span> para inserir os valores desejados!</h3>
            <h3 class="subtitle">Exemplo: <span>/operadoresRelacionais.php?a=10&b=10&c=10</span></h3>
        </div>
        <div class="programa">
            <!-- Códigos PHP -->
            <?php
                $nota1 = $_GET["a"];
                $nota2 = $_GET["b"];
                $nota3 = $_GET["c"];

                echo "Valores recebidos:<br>";
                echo "Nota 1: $nota1<br>";
                echo "Nota 2: $nota2<br>";
                echo "Nota 3: $nota3<br><br>";
                $somanota = $nota1 + $nota2 + $nota3;
                $media = $somanota / 3;

                $resultado = ($media >= 7)? "Aprovado" : "Reprovado";
                echo "A média resultou em: $media";
                if($resultado == "Aprovado"){
                    echo "<br>Boaaa! Você foi aprovado!";
                }
                else if($resultado == "Reprovado"){
                    echo "<br>Infelizmente você não foi aprovado, procure a secretaria.";
                }
            ?>
        </div>
    </body>
</html>