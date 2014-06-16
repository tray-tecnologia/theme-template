<form class="limpar caixa-busca" name="buscaForm" method="get" id="form-auto-complete" action="<?php echo $ag->link('buscar');?>">
    <input type="hidden" name="loja" value="<?php echo $ag->getLoja(); ?>" />
    <button type="submit" tabindex="1" class="busca-botao">Buscar</button>
    <label for="palavra_busca">
        <input name="palavra_busca" value="o que você está procurando?" tabindex="0" type="text" class="busca-palavra" id="busca-palavra" />
    </label>
</form>
<?php
    #Elastic Search
    echo $ag->autoComplete(array('input_id' => 'busca-palavra', 'form_id' => 'form-auto-complete'));
?>