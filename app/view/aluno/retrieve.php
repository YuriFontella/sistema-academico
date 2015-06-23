<table class="table">

  <?php if($controller->models): ?>

    <tr>
      <th>ID</th>
      <th>NOME</th>
      <th>CPF</th>
      <th>E-MAIL</th>
      <th>EDITAR</th>
      <th>DELETAR</th>
    </tr>

    <?php foreach ($controller->models as $aluno): ?>
      <tr>
        <td><a href="<?php BASE_URL ?>"> <?= $aluno['id'] ?></a></td>
        <td><?= $aluno['nome'] ?></td>
        <td><?= $aluno['cpf'] ?></td>
        <td><?= $aluno['email'] ?></td>
        <td>
          <a href="<?= BASE_URL . "aluno/editar/" . $aluno['id'] ?>">Editar</a>
        </td>
        <td>
          <a href="<?= BASE_URL . "aluno/delete/" . $aluno['id'] ?>" onclick="return confirm('Deseja realmente deletar isso?')">Deletar</a>
        </td>
      </tr>
    <?php endforeach ?>

    <?php else: ?>
      <tr>
        <td>Nenhum resultado!</td>
      </tr>
    <?php endif ?>

  </table>
