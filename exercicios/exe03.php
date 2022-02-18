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
            <h2 class="titlemain">Exercício 03</h2>
            <h3 class="subtitle">Colocar em prática o uso de variáveis referenciadas.</h2>
        </div>
        <div class="programa">
            <!-- Códigos PHP -->
            <?php
                $a = 3;
                $b = &$a; // & = referência
                $b += 5; // $b = $b + 5
                echo "O valor da variável A é: $a";
                echo "<br>O valor da variável B é: $b";
                echo "<br><br>Para referênciar uma variável, basta utilizar o <strong>&</strong>!"
            ?>
        </div>
    </body>
</html>