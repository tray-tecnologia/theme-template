<?php 
    $produtos    = $produto->listarTodos( $produto->limite );
    $count       = 0;
    $countAux    = 0;
    $countBanner = 0;
    $countTotal  = count( $produtos );
    
    # Modifique aqui a quantidade de produtos listado por linha
    if( !isset( $countList ) ) $countList = 4;
    
        $countLinha = 0;
        # Verifica se existe produtos para serem listados
        if( $countTotal ):
?>
<div class="vitrine-geral">
    <ul class="vitrine-primeira-linha inline-block">
        <?php
            foreach($produtos as $produto):
                # incremeta o contador para contagem da listagem
                $count++;
                $countAux++;
                $class_li  = '';
                $class_li .= ( $countLinha++ == 0 ) ? ' vitrine-primeira-coluna' : '';
                $class_li .= ( $countLinha % 2 == 0 ) ? ' cor-sim' : '';
                $class_li .= ' coluna-' . $countAux;                
                if ( $countAux == $countList || $countTotal == $count ){
                    $countAux = 0;
                    $class_li .= ' vitrine-ultima-coluna';
                }
                $class_li = 'class="' . $class_li . '"';
        ?>
        <li <?php echo $class_li;  ?>>
            
            <div class="vitrine-borda-produto">
                
                <!-- imagem do produto -->
                <a href="<?php echo $produto->link(); ?>" class="vitrine-imagem transition" ><?php echo $produto->imagemHtml(180); ?></a>
        
                <div class="botoes-extras">
                    <?php 
                        echo $produto->btFreteGratis();
                        echo $produto->btDestaque();
                        echo $produto->btLancamento();
                        echo $produto->btAdicional();
                    ?>
                </div><!-- .botoes-extras -->
                    
                <!-- nome do produto -->
                <a href="<?php echo $produto->link(); ?>" class="vitrine-nome transition"><?php echo $produto->getNome(); ?></a>
        
                <?php
                    # Verifica se existe descricao do produto
                    $descricao = $produto->getDescricao_produto_pequena();
                    if( !empty( $descricao ) ): 
                ?>
                    
                <span class="vitrine-descricao">
                    <?php 
                        # descricao do produto
                        echo $descricao;
                    ?>
                </span><!-- .vitrine-descricao -->
                    
                <?php
                    endif;
                ?>
                <div class="vitrine-preco">
                    <?php   
                        # exibe preco do produto
                        $preco = $produto->preco();
                        # se o preco for uma array ele nao esta sobconsulta
                        if( is_array( $preco ) ):
                            foreach($preco as $tag):
                                # testa se o produto é uma promocao.
                                if( isset( $tag['de'] ) ):
                                    echo '<span class="de-preco">'.$tag['de']['lang'] . ': <span class="v-preco"> ' . $tag['de']['cifrao'] .' <span>'. $tag['de']['valor'] .'</span></span></span>';
                                    #echo '<span class="de-preco"><span class="v-preco"> ' . $tag['de']['cifrao'] .' <span>'. $tag['de']['valor'] .'</span></span></span>';
                                else:
                                    #echo '<span class="por-preco">'.$tag['preco']['lang'] .  ': <span class="v-preco"> ' . $tag['preco']['cifrao'] .' <span>'. $tag['preco']['valor'] .'</span></span></span>';
                                    echo '<span class="por-preco"><span class="v-preco"> ' . $tag['preco']['cifrao'] .' <span>'. $tag['preco']['valor'] .'</span></span></span>';
                                endif;
                            endforeach;
                        else:
                            echo $preco;
                        endif;
                    ?>
                </div><!-- .vitrine-preco -->
                
                <div class="vitrine-parcela">
                <?php
                    # exibe parcela dos produtos
                    echo $produto->parcela();
                ?>
                </div><!-- .vitrine-parcela -->
                
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
                <?php 
                    endif; 
                ?>
                <a href="<?php echo $produto->link(); ?>" class="vitrine-mais-detalhes transition">+ detalhes</a>
            </div><!-- .vitrine-borda-produto -->
        </li>   
        <?php
                # Coloca um quebra na listagem
                if( ( ( $count % $countList ) == 0 ) && ( $count < $countTotal ) ):
                    $countLinha = 0; 
                    echo '</ul><ul class="inline-block">';
                endif;
            endforeach;
        ?>
    </ul><!-- .vitrine-primeira-linha -->
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