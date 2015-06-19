<table class="table">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>CPF</th>
        <th>E-MAIL</th>
    </tr>
    <?php foreach ($controller->alunos as $aluno) { ?>
        <tr>
            <td><?= $aluno['id'] ?></td>
            <td><?= $aluno['nome'] ?></td>
            <td><?= $aluno['cpf'] ?></td>
            <td><?= $aluno['email'] ?></td>
        </tr>
    <?php } ?>
</table>