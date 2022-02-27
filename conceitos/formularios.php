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
            <h2 class="titlemain">Receber dados de Formulários</h2>
            <form action="../resultados/resultFormularios.php" method="get">
                <h3 class="subtitle">Insira seu nome: <input type="text" class="dados" name="nome" placeholder="Exemplo: Pablo Henrique"></h3>
                <h3 class="subtitle">Insira sua idade: <input type="number" class="dados" name="idade" placeholder="Exemplo: 17"></h3>
                <input class="botao" type="submit" value="Registrar">
            </form>
        </div>
    </body>
</html>