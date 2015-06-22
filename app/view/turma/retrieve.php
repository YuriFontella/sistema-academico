<table class="table">
    <tr>
        <th>TURMA</th>
        <th>CURSO</th>
        <th>DATA INICIO</th>
        <th>DATA FINAL</th>
    </tr>
    <?php
    foreach ($controller->models as  $turma) { ?>
          
        <tr>
            <td><?= $turma['id'] ?></td>
            <td><?= $turma['curso_id'] ?></td>
            <td><?= $turma['data_inicio'] ?></td>
            <td><?= $turma['data_final'] ?></td>
        </tr>
<?php } ?> 
</table>
