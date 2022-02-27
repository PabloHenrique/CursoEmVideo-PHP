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
            <h3 class="subtitle">From: Exercício 12</h3>
        </div>
        <div class="programa">
            <!-- Códigos PHP -->
            <?php
                $num = $_GET["num"];
                $inter = $_GET["inter"];
                $c = 0;
                if(($num) && ($inter)){
                    echo "<strong>Valor solicitado: $num<br><br></strong>";
                    echo "Iniciando contagem<br>...<br>";
                    while($num >= $c){
                        echo $c;
                        $c = $c + $inter;
                        echo "<br>";
                    }
                }
                else{
                    echo "Não foi possível contar!";
                    echo "<br>Tente novamente inserindo valores válidos!";
                }
                echo "<br><br><a href='../exercicios/exe12.php'>Voltar</a>";
            ?>
        </div>
    </body>
</html>