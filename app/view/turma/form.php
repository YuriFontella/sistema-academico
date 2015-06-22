<form method="post">
    <label>DATA INICIO</label>
    <input type="date" name="data_ini">
    <br />
    <label>DATA FIM</label>
    <input type="date" name="data_fim">
    <br />
    <label>CURSO:</label>
    <select name="curso" > 
        <?php foreach($controller->cursos as $curso){ ?>
                <option value="<?= $curso['id'] ?>"><?= $curso['nome']?></option> 
        <?php } ?>
    </select>
    <br />
    <button type="submit">Enviar</button>
</form>