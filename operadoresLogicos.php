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
            <h2 class="titlemain">Operadores lógicos!</h2>
            <h3 class="subtitle">Mostrar se um eleitor é obrigado a votar ou não.</h3>
            <h3 class="subtitle">Utilize a <span>URL</span> para inserir os valores desejados!</h3>
            <h3 class="subtitle">Exemplo: <span>/operadoresLogicos.php?a=2004</span></h3>
        </div>
        <div class="programa">
            <!-- Códigos PHP -->
            <?php
                //Entre 16 e 17 anos = Opcional
                //65 = Opcional
                //Entre 18 até 64 = Obrigatório
                
                $ano = $_GET["a"];
                $idade = 2022 - $ano;

                echo "Ano de nascimento informado: $ano<br>";
                echo "Você tem $idade anos!";

                $tipo = ($idade>=18 && $idade<65)? "é obrigatório" : "não é obrigatório";
                echo "<br><br>Logo, o seu voto <strong>$tipo</strong>!";
            ?>
        </div>
    </body>
</html>