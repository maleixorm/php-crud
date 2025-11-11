<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Cliente</title>
</head>
<body>
    <main>
        <a href="clientes.php">Voltar para a lista de clientes</a>
        <form action="" method="post">
            <div class="form-control">
                <label for="nome">Nome: </label>
                <input type="text" name="nome" id="">
            </div>
            <div class="form-control">
                <label for="email">Email: </label>
                <input type="email" name="email" id="">
            </div>
            <div class="form-control">
                <label for="telefone">Telefone: </label>
                <input type="text" name="telefone" id="">
            </div>
            <div class="form-control">
                <label for="nascimento">Data de Nascimento: </label>
                <input type="date" name="nascimento" id="">
            </div>
            <input type="submit" value="Cadastrar">
        </form>
    </main>
</body>
</html>