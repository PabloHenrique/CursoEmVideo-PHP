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
            <h2 class="titlemain">Diferença entre == e ===</h2>
            <h3 class="subtitle">Entendendo conceitos de igualdade e idêntico</h3>
        </div>
        <div class="programa">
            <!-- Códigos PHP -->
            <?php
                $a = 3; //int
                $b = "3"; //string
                $resultado = ($a === $b)? "Sim" : "Não"; //== igual ===idêntico

                echo "As variáveis $a e $b são iguais?<br><br>$resultado";
            ?>
        </div>
    </body>
</html>