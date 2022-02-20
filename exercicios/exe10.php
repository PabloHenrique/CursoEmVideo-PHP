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
            <h2 class="titlemain">Exercício 10</h2>
            <h3 class="subtitle">Ler o dia da semana e mostrar de deve ou não ir para escola.</h3>
            <div class="infoTabela">
                <table>
                    <tr>Considerando que:</tr>
                    <tr>
                        <td>Domingo</td>
                        <td class="col2">1</td>
                    </tr>
                    <tr>
                        <td>Segunda</td>
                        <td class="col2">2</td>
                    </tr>
                    <tr>
                        <td>Terça</td>
                        <td class="col2">3</td>
                    </tr>
                    <tr>
                        <td>Quarta</td>
                        <td class="col2">4</td>
                    </tr>
                    <tr>
                        <td>Quinta</td>
                        <td class="col2">5</td>
                    </tr>
                    <tr>
                        <td>Sexta</td>
                        <td class="col2">6</td>
                    </tr>
                    <tr>
                        <td>Sábado</td>
                        <td class="col2">7</td>
                    </tr>
                </table>
            </div>
            <form action="../resultados/resultExe10.php" method="get">
                <h3 class="subtitle">Informe o dia da semana: <input type="text" class="dados" name="ds" placeholder="Exemplo: 2 (Segunda-Feira)"></h3>
                <input class="botao" type="submit" value="Verificar">
            </form>
        </div>
        <div class="programa">
            <!-- Códigos PHP -->
            <?php
                
            ?>
        </div>
    </body>
</html>