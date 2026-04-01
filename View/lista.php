<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Alunos - Sistema Escolar</title>
</head>
<body>
    <h1> Alunos Matrícula</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome do Aluno</th>
                <th>turma</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($alunos as $aluno):  ?>
            <tr>
                <td><?= htmlspecialchars($aluno['id']) ?></td>
                <td><?= htmlspecialchars($aluno['nome']) ?></td>
                <td><?= htmlspecialchars($aluno['turma']) ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>