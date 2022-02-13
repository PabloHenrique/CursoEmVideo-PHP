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
            <h2 class="titlemain">Operadores Aritméticos</h2>
            <h3 class="subtitle">Utilize a <span>URL</span> para inserir os valores desejados!</h3>
            <h3 class="subtitle">Exemplo: <span>/operadores.php?a=6&b=3</span></h3>
        </div>
        <div class="programa">
            <!-- Códigos PHP -->
            <?php
                $n1 = $_GET["a"];
                $n2 = $_GET["b"];
                echo "<h3>Valores recebidos: $n1 e $n2</h3>";
                $soma = $n1 + $n2;
                $media = ($n1 + $n2) / 2;

                echo "A <strong>soma</strong> entre $n1 e $n2 resulta em: $soma";    
                echo "<br><br>A <strong>subtração</strong> . resulta em: ", ($n1 - $n2);
                echo "<br>A <strong>multiplicação</strong> . resulta em: ", ($n1 * $n2);
                echo "<br>A <strong>divisão</strong> . resulta em: ", ($n1 / $n2);
                echo "<br>O <strong>resto/módulo</strong> . resulta em: ", ($n1 % $n2);
                echo "<br><br>A <strong>média</strong> . resulta em: $media";
            ?>
        </div>
    </body>
</html>