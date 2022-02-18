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
            <h2 class="titlemain">Exercício 08</h2>
            <h3 class="subtitle">Permitir a personalização de um texto através de um formulário.</h3>
            <form action="../resultados/resultExe08.php" method="get">
                <h3 class="subtitle">Texto: <input type="text" class="dados" name="texto" placeholder="Exemplo: Texto qualquer!"></h3>
                <h3 class="subtitle">Cor: <input type="color" name="cor" id="cor"></h3>
                <h3 class="subtitle">Tamanho:
                <select name="tam" id="tam">
                    <option value="8pt">8</option>
                    <option value="10pt">10</option>
                    <option value="14pt" selected>14</option>
                    <option value="20pt">20</option>
                    <option value="40pt">40</option>
                </select>
                </h3>
                <input class="botao" type="submit" value="Gerar">
            </form>
        </div>
        <div class="programa">
            <!-- Códigos PHP -->
            <?php
                
            ?>
        </div>
    </body>
</html>