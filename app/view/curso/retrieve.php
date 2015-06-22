<table class="table">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>CH</th>
    </tr>
    <?php foreach ($controller->models as $curso) { ?>
        <tr>
            <td><?= $curso['id'] ?></td>
            <td><?= $curso['nome'] ?></td>
            <td><?= $curso['carga_horaria'] ?></td>
        </tr>
    <?php } ?>
</table>
