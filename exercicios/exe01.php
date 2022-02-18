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
            <h2 class="titlemain">Exercício 01</h2>
            <h3 class="subtitle">Aplicar 10% de desconto ao preço de um produto.</h2>
            <h3 class="subtitle">Utilize a <span>URL</span> para inserir os valores desejados!</h3>
            <h3 class="subtitle">Exemplo: <span>/exe01.php?p=200</span></h3>
        </div>
        <div class="programa">
            <!-- Códigos PHP -->
            <?php
                $preco = $_GET["p"];
                echo "Preço recebido: R$", number_format($preco, 2, ",",".");
                $preco = $preco + ($preco*10/100); //10% de aumento
                echo "<br><br>O novo preço com <strong>10% de aumento</strong> resulta em: R$", number_format($preco, 2, ",",".");
                $preco = $preco - ($preco*10/100); //10% de desconto
                echo "<br><br>O novo preço com <strong>10% de desconto</strong> resulta em: R$", number_format($preco, 2, ",",".");
            ?>
        </div>
    </body>
</html>