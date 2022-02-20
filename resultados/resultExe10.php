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
            <h3 class="subtitle">From: Exercício 10</h3>
        </div>
        <div class="programa">
            <!-- Códigos PHP -->
            <?php
                $diaSemana = $_GET["ds"];
                if($diaSemana){
                    switch($diaSemana){
                        case 1:
                        case 7:
                            echo "Descansa um pouco! Hoje não têm aula!";
                            break;
                        case 2:
                        case 3:
                        case 4:
                        case 5:
                        case 6:
                            echo "Bom ânimo!! Hoje têm aula!";
                            break;
                        default:
                            echo "Insira um valor válido!";
                            break;
                    }
                }
                else{
                    echo "Insira um valor válido!";
                }
                echo "<div class='note'>Observação: Switch com múltiplos casos<div>";
                echo "<br><br><a href='../exercicios/exe10.php'>Voltar</a>";
            ?>
        </div>
    </body>
</html>