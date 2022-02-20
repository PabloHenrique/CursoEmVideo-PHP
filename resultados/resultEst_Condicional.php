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
            <h2 class="titlemain">Resultado</h2>
            <h3 class="subtitle">From: Estruturas Condicionais</h3>
        </div>
        <div class="programa">
            <!-- Códigos PHP -->
            <?php
                $anoNasc = $_GET["anoNasc"];
                if($anoNasc){
                    $idade = 2022 - $anoNasc;
                    echo "Olá! Você tem $idade anos!";
                    echo "<br><br>";
                    if(($idade >= 16 && $idade <= 17) || ($idade >  65)){
                        echo "Você <strong>não tem permissão</strong> para dirigir e tem o seu <strong>voto de forma opcional!</strong>";
                    }
                    else if($idade < 16){
                        echo "Você <strong>não tem permissão</strong> para dirigir e também <strong>não tem idade </strong> o suficiente para o voto!";
                    }
                    else if($idade >= 18){
                        echo "Você <strong>pode</strong> votar e também <strong>pode</strong> dirigir!";
                    }
                }
                else{
                    echo "Insira um valor válido!";
                }
                echo "<br><br><a href='../conceitos/estruturaCondicional.php'>Voltar</a>";
            ?>
        </div>
    </body>
</html>