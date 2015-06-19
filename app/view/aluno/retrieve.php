<table class="table">
	<?php foreach($controller->alunos as $aluno) { ?>
	<tr>
		<td><?=$aluno['nome']?></td>
		<td><?=$aluno['cpf']?></td>
		<td><?=$aluno['email']?></td>
	</tr>
	<?php } ?>
</table>