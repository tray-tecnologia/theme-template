<?php 
    # definindo a pasta de imagens
    $ag->setPathImage('images/');
    
    # css por pagina
    $sheets = array('loja');
    # css em todas as paginas
    $loadSheets = array('default', 'animations');
    
    if(in_array($ag->funcoes()->page(), $sheets)){
        $loadSheets[] = $ag->funcoes()->page();
    }
    
    echo $ag->loadCSS($loadSheets);
?>

<div class="cabecalho">
    
    <div class="logotipo">
        <?php $ag->element('logo'); ?>
    </div><!-- #logotipo -->

    <div class="box-overflow">
        <div class="saudacao-cliente">
            <?php
                echo $ag->funcoes()->
                        cliente(
                        'visitante', #nome que aparecerá quando não estiver logado
                        '<span>{nome}</span>, <a href="'.$ag->link('login').'">acesse minha conta</a>', #não está logado
                        '<span>{nome}</span>, clique para <a href="'.$ag->link('logout').'">sair da minha conta</a>' #está logado
                    );
            ?>
        </div><!-- .saudacao-cliente -->

        <?php $ag->element('search'); ?>

        <?php $ag->element('cart'); ?>
    </div><!-- .box-overflow -->

</div><!-- .cabecalho -->

<?php
    if($ag->funcoes()->isPage('loja')){
        $ag->banner('home');
    }

    #banner regua em todas as paginas
    $ag->banner('extra', 1);
?>