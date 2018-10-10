
<form action="../database/modalidades/create.php" method="post" class="row">
   <div class="input-field col s12">
        <input type="text" name="modalidade" id="modalidade" maxlength="255" required autofocus>
        <label for="modalidade">Digite a Modalidade</label>
    </div>
    <div class="input-field col s12">
        <input type="number" name="mensalidade" id="mensalidade" step="0.01" min="0.01" required>
        <label for="mensalidade">Valor da Mensalidade</label>
    </div>
    <div class="input-field col s12">
        <input type="submit" value="cadastrar" class="btn">
        <input type="reset" value="limpar" class="btn red">
    </div>
</form>