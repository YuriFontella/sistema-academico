<table class="table">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>E-MAIL</th>
    </tr>
    <?php foreach ($controller->models as $professor) { ?>
        <tr>
            <td><?= $professor['id'] ?></td>
            <td><?= $professor['nome'] ?></td>
            <td><?= $professor['email'] ?></td>
        </tr>
    <?php } ?>
</table>
