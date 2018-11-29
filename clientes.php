
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cadastro de Clientes</title>
</head>
<body>
    <header>
        <div class="container">
            <h1>Cadastro de Clientes</h1>
        </div>
    </header>
    <main class="container">
        <section>
            <table>
                <tr>
                    <th>Nome</th>
                    <th>Endereço</th>
                    <th>Telefone</th>
                    <th>Nome do Pet</th>
                </tr>
                <tbody class="contato">

                </tbody>
            </table>
        </section>
        <section>
            <form id="formulario" >
                <fieldset>
                    <label for="campo-nome">Nome:</label>
                    <input id="campo-nome" type="text" placeholder="digite o nome do seu Contato">
                </fieldset>
                <fieldset class="campo-endereco">
                    <label for="campo-endereco">Endereço:</label>
                    <input id="campo-endereco" type="text" placeholder="digite o endereço do seu Contato">
                </fieldset>
                <fieldset class="campo-bairro">
                    <label for="campo-bairro">Telefone:</label>
                    <input id="campo-bairro" type="text" placeholder="digite o seu bairro do seu Contato">
                </fieldset>
                <fieldset class="campo-endereco">
                    <label for="campo-telefoneFixo">Nome do Pet:</label>
                    <input id="campo-telefoneFixo" type="text" placeholder="digite o telefone Fixo">
                </fieldset>
                <button id="adicionar-contato" class="botao bto-principal">Adicionar</button>
            </form>
        </section>
    </main>
    <script src="./static/js/dashboard.js"></script>
</body>
</html>