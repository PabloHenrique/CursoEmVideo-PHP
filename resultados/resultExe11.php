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
            <h3 class="subtitle">From: Exercício 11</h3>
        </div>
        <div class="programa">
            <!-- Códigos PHP -->
            <?php
                $estado = isset ($_GET["estado"]) ? $_GET["estado"] : "Indefinido";
                switch($estado){
                    case "Rnorte":
                        echo "Você mora na <strong>região Norte!</strong>";
                        break;
                    case "Rsul":
                        echo "Você mora na <strong>região Sul!</strong>";
                        break;
                    case "Rcentroeste":
                        echo "Você mora na <strong>região Centro-Oeste!</strong>";
                        break;
                    case "Rnordeste":
                        echo "Você mora na <strong>região Nordeste!</strong>";
                        break;
                    case "Rsudeste":
                        echo "Você mora na <strong>região Sudeste!</strong>";
                        break;
                }
                echo "<br><br><a href='../exercicios/exe11.php>Voltar</a>";
            ?>
        </div>
    </body>
</html>