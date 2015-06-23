<form method="post">
    <label>NOME</label>
    <input type="text" name="nome" value="<?php echo $controller ? $controller->aluno[0]['nome'] : '' ?>">
    <label>CPF</label>
    <input type="text" name="cpf" value="<?php echo $controller ? $controller->aluno[0]['cpf'] : '' ?>">
    <label>DATA NASCIMENTO</label>
    <input type="text" name="datanasc" value="<?php echo $controller ? $controller->aluno[0]['datanasc'] : '' ?>">
    <br />
    <label>FONE</label>
    <input type="text" name="fone" value="<?php echo $controller ? $controller->aluno[0]['fone'] : '' ?>">
    <label>EMAIL</label>
    <input type="text" name="email" value="<?php echo $controller ? $controller->aluno[0]['email'] : '' ?>">
    <br />
    <button type="submit">Enviar</button>
</form>
