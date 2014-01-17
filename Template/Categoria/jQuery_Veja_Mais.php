<ul>
    <?php
        #o veja mais deve carregar sempre no nivel 2
        $countLinha = 0; 
        $total_veja_mais = count( $Categorias );
    
        foreach( $Categorias as $rows ):
            
            $classe_li_vejamais  = 'categoria-' . $rows->id . '';
            $classe_li_vejamais .= ( $countLinha++ == 0 ) ? ' primeira' : '';
            $classe_li_vejamais .= ( $countLinha == $total_veja_mais ) ? ' ultima' : '';
            $classe_li_vejamais .= ( $countLinha % 2 == 0 ) ? ' par' : ' impar'; #par ou impar
            $classe_li_vejamais .= ( count( $rows->filha( $rows->id, 0, null ) ) ) ? ' tem-sub' : '';
   ?>
    
    <li class="<?php echo $classe_li_vejamais; ?>">
        <a href="<?php echo $rows->link(); ?>" title="<?php echo $rows->nome; ?>">
            <?php echo $rows->nome;  ?>
        </a>
        
        <?php
            #verifica se é pra carregar o nivel 2
            if( $this->nivel > 1 ):
                
                $categoria = new Ag_Model_Categoria();
                $filhas = $categoria->filha( $rows->id, 0, $this->notList );
                $countFilhas = count($filhas);
        
                if( $countFilhas ):
            ?>
        <div class="nivel-2">
            <ul>
                <?php
                    $subCount = 1;
                    foreach( $filhas as $filha ):
                        
                        $classe_li_vejamais_filha  = 'categoria-' . $filha->id . '';
                        $classe_li_vejamais_filha .= ( $subCount == 1 ) ? ' primeira' : '';
                        $classe_li_vejamais_filha .= ( $subCount == $countFilhas ) ? ' ultima' : '';
                        $classe_li_vejamais_filha .= ( $subCount % 2 == 0 ) ? ' par' : ' impar'; #par ou impar
                        $classe_li_vejamais_filha .= ( count( $filha->filha( $filha->id, 0, null ) ) ) ? ' tem-sub' : '';
                ?>
                <li class="<?php echo $classe_li_vejamais_filha; ?>">
                    <a href="<?php echo $filha->link(); ?>" title="<?php echo $filha->nome; ?>">
                        <?php echo $filha->nome;  ?>
                    </a>
                    
                    <?php
                        if( $this->nivel > 2 ):
                            
                            $netas = $categoria->filha( $filha->id, $this->limite, $this->notList );
                            $countNetas = count( $netas );
                            if (count( $netas )): 
                    ?>
                    <div class="nivel-3">
                        <ul>
                            <?php 
                                $netaCount = 1;
                                foreach ( $netas as $neta ): 
                                    
                                    $classe_li_vejamais_neta  = ( $netaCount == 1 ) ? ' primeira' : '';
                                    $classe_li_vejamais_neta .= ( $netaCount == $countNetas ) ? ' ultima' : '';
                                    $classe_li_vejamais_neta .= ( $netaCount % 2 == 0 ) ? ' par' : ' impar'; #par ou impar
                                    $classe_li_vejamais_neta .= ( count( $neta->filha( $neta->id, 0, null ) ) ) ? ' tem-sub' : '';
                            ?>          
                            <li class="<?php echo $classe_li_vejamais_neta; ?>">
                                <a href="<?php echo $neta->link(); ?>" title="<?php echo $neta->nome; ?>">
                                    <?php echo $neta->nome;  ?>
                                </a>
                            </li><!-- item nivel-3 -->
                            <?php $netaCount++; endforeach; ?>                  
                        </ul><!-- lista nivel-3 -->
                    </div><!-- .nivel-3 -->

                    <?php 
                            endif;
                        endif;
                    ?>
                
                </li><!-- itens nivel-2 -->
        
                <?php
                    if( ( $subCount == (int)$this->limite ) && ( $subCount < $countFilhas ) ):
                ?>
                <li class="veja-mais">
                    <a href="<?php echo $rows->link(); ?>" title="Veja Mais">+ Veja Mais</a>
                </li>
            </ul><!-- lista nivel-2 -->
            
            <ul class="ocultar">
                <?php
                    endif;
                    $subCount++;
                    endforeach;
                    
                    if( ( $countFilhas > (int)$this->limite ) ):
                ?>
        
                <li class="recolher">
                    <a href="<?php echo $rows->link(); ?>" title="Recolher">- Recolher Menu</a>
                </li>
        
                <?php
                    endif;
                ?>
            </ul><!-- .ocultar -->
            
        </div><!-- .nivel-2 -->
    
        <?php
                endif;
            endif;
        ?>
    </li><!-- itens primeiro nivel -->
    <?php endforeach; ?>
</ul><!-- lista -->