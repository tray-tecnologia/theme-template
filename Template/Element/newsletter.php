<form action="<?php echo $ag->link('news'); ?>" method="post" class="limpar newsletter-form" name="form1">
    <label for="newsletter-nome">
        <input name="nome" type="text" id="newsletter-nome" value="Nome" class="newsletter-nome" />
    </label>
    <label for="newsletter-email">
        <input name="email" type="text" id="newsletter-email" value="E-mail" class="newsletter-email" />
    </label>
    <button class="newsletter-botao" type="submit">Cadastrar</button>
</form>