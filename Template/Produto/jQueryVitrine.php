<div class="jquery-vitrine">
    <?php 
        $produtos   = $produto->listarTodos( $produto->limite );
        $count      = 0;
        $countTotal = count( $produtos );

        # Verifica se existe produtos para serem listados
        if( $countTotal ):
    ?>
    <ul class="vitrine-geral">
        <?php
            foreach( $produtos as $produto ):
                # incremeta o contador para contagem da listagem
                $class_vitrine  = '';
                $class_vitrine .= ( ( $count++ == 0 )           ? 'vitrine-primeira-coluna' : '' );
                $class_vitrine .= ( ( $count == $countTotal )   ? ' vitrine-ultima-coluna'  : '' );
                $class_vitrine .= ( ( $count % 2 == 0 )         ? ' par'                    : ' impar' );
        ?>
        <li class="<?php echo $class_vitrine; ?>">
            
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
            </span><!-- .vitrine-borda-produto -->
        </li>   
        <?php
            endforeach;
        ?>
    </ul><!-- .vitrine-geral -->
    <?php
        else:
    ?>
        <div class="vitrine-geral">
            <ul>
                <li>Nenhum produto encontrado.</li>
            </ul>
        </div>
    <?php
            endif;
    ?>
</div><!-- .jquery-vitrine -->