<div class="carrinho">
    <a href="<?php echo $ag->link('carrinho');?>" class="carrinho-itens"><?php $ag->funcoes()->carrinho('quantidade');?> itens</a>
    <a href="<?php echo $ag->link('carrinho');?>" class="carrinho-valor">R$ <?php $ag->funcoes()->carrinho('valor');?></a>
</div>