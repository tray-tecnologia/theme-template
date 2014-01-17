<div class="tabs">
    <ul>
        <?php 
            $count = 0;
            foreach( $abas as $aba ):
        ?>
        <li>
            <a href="#<?php echo $tabNome; ?>-tabs-<?php echo ++$count;?>" class="<?php echo $tabNome; ?>-tabs-<?php echo $count;?>">
                <?php echo $aba; ?>
            </a>
        </li>
	<?php 
            endforeach;
        ?>
    </ul>
    <?php 
        $countTabs = 0;
        foreach ($lista as $produto):
            $categoria = $categorias[$countTabs];
            #se tiver categoria definida, chama os produtos por categoria
            $produtos 	 = ( $categoria ) ? $produto->listarProdutoCategoria( $categoria, $produto->limite ) : $produto->listarTodos( $produto->limite );
            $count       = 0;
            $countBanner = 0;
            $countTotal	 = count( $produtos );
            # Modifique aqui a quantidade de produtos listado por linha
            if( !isset( $countList ) ) $countList = 4;

            # Verifica se existe produtos para serem listados
            if( $countTotal ):
    ?>

    <div id="<?php echo $tabNome; ?>-tabs-<?php echo ++$countTabs; ?>" class="vitrine-geral">
        <ul class="vitrine-primeira-linha">
            <?php
                foreach( $produtos as $produto ):
                    # incremeta o contador para contagem da listagem
                    $count++;
            ?>
            <li<?php echo ( ( ( $count-1 ) % $countList ) == 0 ) ? ' class="vitrine-primeira-coluna"' : ''; ?>>
            
                <div class="vitrine-borda-produto">
                    <!-- imagem do produto -->
                    <a href="<?php echo $produto->link(); ?>" class="vitrine-imagem" ><?php echo $produto->imagemHtml(180); ?></a>
		
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
        
                    <!-- nome do produto -->
                    <a href="<?php echo $produto->link(); ?>" class="vitrine-nome"><?php echo $produto->getNome(); ?></a>
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
                    <span class="vitrine-preco">
                        <?php	
                            # exibe preco do produto
                            $preco = $produto->preco();
                            # se o preco for uma array ele nao esta sobconsulta
                            if( is_array( $preco ) ):
				foreach( $preco as $tag ):
                                    # testa se o produto é uma promocao.
                                    if( isset( $tag['de'] ) ):
                                        echo '<span class="de-preco">'.$tag['de']['lang'] . '<span class="v-preco"> ' . $tag['de']['cifrao'] .'<span>'. $tag['de']['valor'] .'</span></span></span>';
                                    else:
                                        echo '<span class="por-preco">'.$tag['preco']['lang'] .  '<span class="v-preco"> ' . $tag['preco']['cifrao'] .'<span>'. $tag['preco']['valor'] .'</span></span></span>';
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
		</div><!-- .vitrine-borda-produto -->
            </li>	
            <?php
                    # Coloca um quebra na listagem
                    if( ( ( $count % $countList ) == 0 ) && ( $count < $countTotal ) ):
                        echo '</ul><ul>';
                    endif;
		endforeach;
            ?>
        </ul><!-- .vitrine-primeira-linha -->
    </div><!-- .vitrine-geral -->
    <?php
            else:
    ?>
    <div id="<?php echo $tabNome; ?>-tabs-<?php echo ++$countTabs; ?>" class="vitrine-geral">
        Nenhum produto encontrado.
    </div><!-- .vitrine-geral -->
    <?php
            endif;
        endforeach;
    ?>
</div><!-- .tabs -->