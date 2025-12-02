<?php
    include 'conexao.php';
    $usuarios = get_usuarios();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <input type="text" id="busca" name="busca">
    <input type="submit" id="buscar" value="Buscar">
    <br>

    <h3>Listagem de Pessoas</h3>

    <table>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Data de Nasc.</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Ações</th>
        </tr>
        <?php foreach($usuarios as $u): ?>
        <tr>
            <td><?= $u['id'] ?></td>
            <td><?= $u['nome'] ?></td>
            <td><?= $u['data_nasc'] ?></td>
            <td><?= $u['email'] ?></td>
            <td><?= $u['telefone'] ?></td>
            <td>
                <a href="editar.php?id=<?= $u['id'] ?>">Editar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

</body>
</html>