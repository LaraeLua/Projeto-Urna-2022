<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Vamos votar?</title>
    <script src="botao.js"></script>
</head>
<body>
        <h2>Deputado Federal</h2>
        
        <p>Número:</p>
            <input size="1" maxlength="0" type="text" />
            <input size="1" maxlength="0" type="text" />
            <input size="1" maxlength="0" type="text" />
            <input size="1" maxlength="0" type="text" />
        <p>Nome:</p>
            <input size="15" maxlength="10" type="text" /><br><br>

        <form action="Botoes()">
            <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar com grupos de botões">
                <div class="btn-group" role="group" aria-label="Primeiro grupo" >
                  <button type="button" class="btn btn-secondary" id="1">1</button>
                  <button type="button" class="btn btn-secondary" id="2">2</button>
                  <button type="button" class="btn btn-secondary" id="3">3</button><br>
                  <button type="button" class="btn btn-secondary" id="4">4</button>
                  <button type="button" class="btn btn-secondary" id="5">5</button>
                  <button type="button" class="btn btn-secondary" id="6">6</button><br>
                  <button type="button" class="btn btn-secondary" id="7">7</button>
                  <button type="button" class="btn btn-secondary" id="8">8</button>
                  <button type="button" class="btn btn-secondary" id="9">9</button><br>
                  <button type="button" class="btn btn-secondary" id="0">0</button>
                </div>
            </div>

                <br><button onclick="botao()">Branco</button> <button onclick="botao()">Corrigir</button> <button onclick="botao()">Confirmar</button><br>

            </form>
</body>
</html>

