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
                $n1 = $_GET["num"];
                $n2 = $_GET["num2"];
                $oper = $_GET["ope"];
                echo "Valores recebidos: <br>1 = <strong>$n1</strong><br>2 = <strong>$n2</strong>";
                if(($n1) && ($n2)){
                    switch ($oper){
                        case "sm":
                            $resul = $n1 + $n2;
                            break;
                        case "sb":
                            $resul = $n1 - $n2;
                            break;
                        case "m":
                            $resul = $n1 * $n2;
                            break;
                        case "dv":
                            $resul = $n1 / $n2;
                            break;
                        case "r":
                            $resul = $n1 % $n2;
                            break;
                    }
                    echo "<br><br>";
                    if($oper == "sm"){
                        echo "Operação escolhida foi <strong>soma.</strong>";
                        echo "<br>O resultado da operação foi de: <strong>$resul</strong>";
                    }
                    else if ($oper == "sb"){
                        echo "Operação escolhida foi <strong>subtração.</strong>";
                        echo "<br>O resultado da operação foi de: <strong>$resul</strong>";
                    }
                    else if ($oper == "m"){
                        echo "Operação escolhida foi <strong>multiplicação.</strong>";
                        echo "<br>O resultado da operação foi de: <strong>$resul</strong>";
                    }
                    else if ($oper == "dv"){
                        echo "Operação escolhida foi <strong>divisão.</strong>";
                        echo "<br>O resultado da operação foi de: <strong>$resul</strong>";
                    }
                    else if ($oper == "rs"){
                        echo "Operação escolhida foi <strong>resto.</strong>";
                        echo "<br>O resultado da operação foi de: <strong>$resul</strong>";
                    }
                }
                else{
                    echo "Valores inválidos ou não registrados!";
                }
                echo "<br><br><a href='../conceitos/estCondSwitch.php'>Voltar</a>";
            ?>
        </div>
    </body>
</html>