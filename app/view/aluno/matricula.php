<form method="post" action="<?= BASE_URL . 'index.php?c=AlunoController&m=matricula'?>">
	<label>Nome</label>
	<input type="text" name="nome">
	<label>CPF</label>
	<input type="text" name="cpf">
	<label>FONE</label>
	<input type="text" name="fone">
        <label>EMAIL</label>
	<input type="text" name="email">
	<label>DATA NASCIMENTO</label>
	<input type="text" name="data_nascimento">
	<button type="submit">Enviar</button>
</form>