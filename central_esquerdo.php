<div class="menu-esquerdo">
    <ul>
        <li>
            <a class="link-nivel1" href="<?php echo $ag->link('pedidos'); ?>">Pedidos</a>
            <div class="nivel-2">
                <ul>
                    <li><a class="link-nivel2" href="<?php echo $ag->link('pedidos'); ?>">Pedidos Anteriores</a></li>
                    <li><a class="link-nivel2" href="central_confirmar_pagamento.php?loja=<?php echo $ag->getLoja()?>">Confirmar Pagamento</a></li>
                    <li><a class="link-nivel2" href="central_rastrear.php?loja=<?php echo $ag->getLoja()?>">Rastrear Encomenda</a></li>
                    <li><a class="link-nivel2" href="central_troca.php?loja=<?php echo $ag->getLoja()?>">Trocas e Devoluções</a></li>
                </ul>
            </div>
        </li>
        <li>
            <a class="link-nivel1" href="central_dados.php?loja=<?php echo $ag->getLoja()?>&centralDados=1">Seu Cadastro</a>
            <div class="nivel-2">
                <ul>
                    <li><a class="link-nivel2" href="central_dados.php?loja=<?php echo $ag->getLoja()?>&centralDados=1">Alterar Cadastro</a></li>
                    <li><a class="link-nivel2" href="central_senha.php?loja=<?php echo $ag->getLoja()?>">Alterar Senha</a></li>
                    <li><a class="link-nivel2" href="central_comentarios.php?loja=<?php echo $ag->getLoja()?>">Comentários</a></li>
                    <li><a class="link-nivel2" href="central_lista_espera.php?loja=<?php echo $ag->getLoja()?>">Lista de Espera</a></li>
                    <li><a class="link-nivel2" href="navegacao_visitados-<?php echo $ag->getLoja()?>">Navegação</a></li>
                </ul>
            </div>
        </li>
        <li>
            <a class="link-nivel1" href="<?php echo $ag->link('contato'); ?>">Contato</a>
            <div class="nivel-2">
                <ul>
                    <li><a class="link-nivel2" href="<?php echo $ag->link('contato'); ?>">Caso tenha alguma dúvida, entre em contato conosco</a></li>
                </ul>
            </div>
        </li>
        <li><a class="link-nivel1" href="<?php echo $ag->link('logout'); ?>">Sair da Central</a></li>
    </ul>
</div> <!-- #menu-esquerdo -->