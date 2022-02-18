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
            <h2 class="titlemain">Exercício 04</h2>
            <h3 class="subtitle">Colocar em prática o uso de variáveis <strong>variáveis</strong></h2>
        </div>
        <div class="programa">
            <!-- Códigos PHP -->
            <?php
                $x = "abc";
                $$x = "def";
                echo "O conteúdo da variável X é: $x";
                echo "<br>E o conteúdo da variável abc é: $abc";
                echo "<br><br>Para gerar uma variável variável, basta utilizar o <strong>$</strong> na frente dela!";
                echo "<br>Exemplo: $$ variável";
            ?>
        </div>
    </body>
</html>