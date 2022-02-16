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
            <h2 class="titlemain">Operadores Relacionais</h2>
            <h3 class="subtitle">Utilize a <span>URL</span> para inserir os valores desejados!</h3>
            <h3 class="subtitle">Exemplo: <span>/operadoresRelacionais.php?a=10&b=5&op=s</span></h3>
        </div>
        <div class="programa">
            <!-- Códigos PHP -->
            <?php
                $n1 = $_GET["a"];
                $n2 = $_GET["b"];
                $tipo = $_GET["op"]; //Opção S = Soma / M = Multiplicação
                
                if($tipo == "s"){
                    $tipo = "Soma";
                }
                else if($tipo == "m"){
                    $tipo = "Multiplicação";
                }
                
                echo "Os valores passados foram: $n1 e $n2<br>";
                echo "A opção desejada foi: <strong>$tipo</strong>";
                $resultado = ($tipo == "Soma")?$n1+$n2 : $n1*$n2; //Expressão Unária

                echo "<br><br>O resultado foi: $resultado";
            ?>
        </div>
    </body>
</html>