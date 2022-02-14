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
            <h2 class="titlemain">Exercício 02</h2>
            <h3 class="subtitle">Mostrar qual foi o ano anterior ao ano atual.</h2>
            <h3 class="subtitle">Utilize a <span>URL</span> para inserir os valores desejados!</h3>
            <h3 class="subtitle">Exemplo: <span>/exe02.php?a=2004</span></h3>
        </div>
        <div class="programa">
            <!-- Códigos PHP -->
            <?php
                $atual = $_GET["a"];
                echo "Ano atual recebido: $atual";
                echo "<br><br>O próximo ano é: ", ++$atual;
                echo "<br>O ano anteirior é: ", --$atual;
            ?>
        </div>
    </body>
</html>