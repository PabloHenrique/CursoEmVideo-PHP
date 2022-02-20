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
            <h3 class="subtitle">From: Exercício 09</h3>
        </div>
        <div class="programa">
            <!-- Códigos PHP -->
            <?php
                $n1 = $_GET["nota1"];
                $n2 = $_GET["nota2"];
                $n3 = $_GET["nota3"];
                if(($n1) && ($n2) && ($n3)){
                    echo "Notas recebidas: ";
                    
                    echo "<ol>";
                    echo "<li>$n1</li>";
                    echo "<li>$n2</li>";
                    echo "<li>$n3</li>";
                    echo "</ol>";
                    
                    $media = ($n1 + $n2 + $n3) / 3;
                    echo "A sua média resultou em: ", number_format($media, 1);

                    if($media >= 7){
                        $print = "<br>Portanto, você foi <strong>aprovado</strong>. Parabéns!";
                    }
                    else if($media > 5 && $media < 7){
                        $print = "<br>Portanto, você está de <strong>recuperação</strong>.";
                    }
                    else if($media <= 5){
                        $print = "<br>Infelizmente você foi <strong>reprovado</strong>.<br>Procure a secretaria!";
                    }

                    echo $print;
                }
                else{
                    echo "Insira todas as notas!";
                }
                echo "<br><br><a href='../exercicios/exe09.php'>Voltar</a>";
            ?>
        </div>
    </body>
</html>