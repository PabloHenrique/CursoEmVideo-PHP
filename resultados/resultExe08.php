<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?php
            $texto = isset ($_GET["texto"]) ? $_GET["texto"] : "[Texto demonstrativo]";
            $cor = isset ($_GET["cor"]) ? $_GET["cor"] : "#000000";
            $tamanho = isset ($_GET["tam"]) ? $_GET["tam"] : "14pt";
        ?>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/estilos/style.css">
        <title>Curso de PHP</title>
        <style>
            span.texto{
                font-size: <?php echo $tamanho?>;;
                color: <?php echo $cor?>;;
            }
        </style>
    </head>
    <body>
        <div class="informacoes">
            <h2 class="titlemain">Resultado</h2>
            <h3 class="subtitle">From: Exercício 08</h3>
        </div>
        <div class="programa">
            <!-- Códigos PHP -->
            <?php
                echo "<span class='texto'>$texto</span>"; 
                echo "<br><br><a href='../exercicios/exe08.php'>Voltar</a>";
            ?>
        </div>
    </body>
</html>