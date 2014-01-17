<?php 
    $produtos   = $produto->listarTodos( $produto->limite );
    $count      = 0;
    $countTotal = $produto->limite;
    
    # Verifica se existe produtos para serem listados
    if( $countTotal ):
?>

<div class="vitrine-geral">
    <ul>
        <?php
            foreach( $produtos as $produto ):
            # incremeta o contador para contagem da listagem
                $classe_li_vitrine  = ( ( $count++ == 0 ) ? ' class="vitrine-primeira-coluna"': '' );
        ?>
        <li<?php echo $classe_li_vitrine; ?>>
        
            <div class="vitrine-borda-produto">
                <!-- imagem do produto -->
                <a href="<?php echo $produto->link(); ?>" class="vitrine-imagem"><?php echo $produto->imagemHtml(180); ?></a>
                <!-- nome do produto -->
                <a href="<?php echo $produto->link(); ?>" class="vitrine-nome"><?php echo $produto->getNome(); ?></a>
                <span class="vitrine-descricao">
                    <?php 
                        # descricao do produto
                        echo $produto->getDescricao_produto_pequena();
                    ?>
                </span><!-- .vitrine-descricao -->
                <span class="vitrine-preco">
                    <?php   
                        # exibe preco do produto
                        $preco = $produto->preco();
                        # se o preco for uma array ele nao esta sobconsulta
                        if( is_array( $preco ) ):
                            foreach( $preco as $tag ):
                                # testa se o produto é uma promocao.
                                if(isset( $tag['de'] ) ):
                                    echo '<span class="de-preco">'.$tag['de']['lang'] . ':<span class="v-preco"> ' . $tag['de']['cifrao'] .'<span>'. $tag['de']['valor'] .'</span></span></span>';
                                else:
                                    echo '<span class="por-preco">'.$tag['preco']['lang'] .  ':<span class="v-preco"> ' . $tag['preco']['cifrao'] .'<span>'. $tag['preco']['valor'] .'</span></span></span>';
                                endif;
                            endforeach;
                        else: 
                            echo $preco;
                        endif;
                    ?>
                </span><!-- .vitrine-preco -->
                <span class="vitrine-parcela">
                    <?php
                        # exibe parcela dos produtos
                        echo $produto->parcela();
                    ?>
                </span><!-- .vitrine-parcela -->
                <?php 
                    $botoes = $produto->botao();
                    if( !empty( $botoes ) ):    
                ?>
                <div class="vitrine-botoes">
                    <?php 
                        foreach( $botoes as $botao ): 
                            echo $botao;
                        endforeach; 
                    ?>
                </div><!-- .vitrine-botoes -->
                
                <?php endif; ?>
                
                <div class="botoes-extras">
                    <?php 
                        echo $produto->btFreteGratis();
                        #echo $produto->btDestaque();
                        #echo $produto->btAdicional();
                    ?>
                </div><!-- .botoes-extras -->
        
            </div><!-- .vitrine-borda-produto -->
    
        </li>   
        
        <?php
            endforeach;
        ?>

    </ul>
</div><!-- .vitrine-geral -->

<?php
    else:
?>
<div class="vitrine-geral">
    <ul>
        <li>Nenhum produto encontrado.</li>
    </ul>
</div><!-- .vitrine-geral -->

<?php
    endif;
?>
