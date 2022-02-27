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
            <h2 class="titlemain">Exercício 13</h2>
            <h3 class="subtitle">Ler 5 números (While), mostrar a soma e a média deles.</h3>
            <form action="../resultados/resultExe13.php" method="get">
                <?php
                    $c = 1;
                    while(5 >= $c){
                        echo "<h3 class='subtitle'>Número $c: <input type='number' class='dados' name='n$c'></h3>";
                        $c++;
                    }
                ?>
                <input class="botao" type="submit" value="Registrar">
            </form>
        </div>
    </body>
</html>