<?php 
    include('conexao.php');
    $sql = "SELECT * FROM clientes";
    $query_clientes = $mysqli->query($sql) or die($mysqli->error);
    $num_clientes = $query_clientes->num_rows;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clientes</title>
</head>
<body>
    <h1>Lista de Clientes</h1>
    <p>Estes são os clientes cadastrados no sistema:</p>
    <table border="1" cellpadding="10">
        <thead>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Telefone</th>
            <th>Nascimento</th>
            <th>Data</th>
            <th></th>
        </thead>
        <tbody>
            <?php if($num_clientes == 0) { ?>
                <tr>
                    <td colspan="7">Nenhum cliente cadastrado!</td>
                </tr>
            <?php } else { 
                while($cliente = $query_clientes->fetch_assoc()) {
                ?>
                <tr>
                    <td><?= $cliente['id'] ?></td>
                    <td><?= $cliente['nome'] ?></td>
                    <td><?= $cliente['email'] ?></td>
                    <td><?= $cliente['telefone'] ?></td>
                    <td><?= $cliente['nascimento'] ?></td>
                    <td><?= $cliente['data'] ?></td>
                    <td></td>
                </tr>
            <?php }} ?>
        </tbody>
    </table>
</body>
</html>