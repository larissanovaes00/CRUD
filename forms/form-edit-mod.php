

<form action="../database/modalidades/update.php" method="post" class="row">
    
    <div class="input-field col s12">
        <input type="hidden" name="id" value="<?php echo $values['id'];?>">
    </div>

    <div class="input-field col s12">
        <input type="text" name="modalidade" id="modalidade" value="<?php echo $values['modalidade'];?>" required>
        <label for="modalidade">Digite a Modalidade</label>
    </div>

    <div class="input-field col s12">
        <input type="text" name="mensalidade" id="mensalidade" value="<?php echo $values['mensalidade'];?>" required>
        <label for="mensalidade">Digite a Mensalidade</label>
    </div>

    <div class="input-field col s12">
        <input type="submit" value="alterar" class="btn">
        <input type="reset" value="limpar" class="btn red">
    </div>

</form>