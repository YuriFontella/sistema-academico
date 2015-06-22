<table class="table">
    <tr>
        <th>TURMA</th>
        <th>CURSO</th>
        <th>DATA INICIO</th>
        <th>DATA FINAL</th>
    </tr>
    <?php 
    //var_dump($controller->turmas);
    foreach ($controller->turmas as  $turma) { ?>
        <tr>
            <td><?= $turma['id'] ?></td>
            <td><?= $turma['nome'] ?></td>
            <td><?= $turma['data_inicio'] ?></td>
            <td><?= $turma['data_final'] ?></td>
        </tr>
    <?php } ?> 
</table>
