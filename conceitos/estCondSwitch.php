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
            <h2 class="titlemain">Estrutura Condicional - Parte 2</h2>
            <form action="../resultados/resultEstCondSwitch.php" method="get">
                <h3 class="subtitle">Insira um número: <input type="text" class="dados" name="num" placeholder="Exemplo: 5"></h3>
                <h3 class="subtitle">Insira outro número: <input type="text" class="dados" name="num2" placeholder="Exemplo: 4"></h3>
                <h3 class="subtitle">
                    <fieldset>
                        <legend>Operações</legend>
                        <label for="soma"><input type="radio" name="ope" id="soma" value="sm">Somar</label><br>
                        <label for="sub"><input type="radio" name="ope" id="sub" value="sb">Subtração</label><br>
                        <label for="mult"><input type="radio" name="ope" id="mult" value="m">Multiplicação</label><br>
                        <label for="div"><input type="radio" name="ope" id="div" value="dv">Divisão</label><br>
                        <label for="dobro"><input type="radio" name="ope" id="dobro" value="rs" checked>Resto Div</label><br>
                    </fieldset>
                </h3>
                <input class="botao" type="submit" value="Registrar">
            </form>
        </div>
    </body>
</html>