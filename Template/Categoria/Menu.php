<ul>
    <?php

        $modcategoria = new Ag_Model_Categoria(); #usada para carregar as subs
        $count = $filhacount = $netacount = 1;
        $total = count( $Categorias );
        
        foreach( $Categorias as $rows ):
                        
            #monta as classes nivel 1
            $classe_nivel1  = 'categoria-' . $rows->id . '';
            $classe_nivel1 .= ( $count % 2 == 0 ) ? ' par' : ' impar'; #par ou impar
            $classe_nivel1 .= ( count( $rows->filha( $rows->id, 0, null ) ) ) ? ' tem-sub' : ''; #verifica se tem subcategoria
            $classe_nivel1 .= ( $count == 1 ) ? ' primeira' : '' ; #primeira linha
            $classe_nivel1 .= ( $count == $total ) ? ' ultima' : ''; #ultima linha
            
    ?>
    <li class="<?php echo $classe_nivel1; ?>">
        <a class="link-nivel1" href="<?php echo $rows->link(); ?>" title="<?php echo $rows->nome; ?>">
            <?php echo $rows->nome; ?>
        </a>
    
        <?php 
            
            $subcategorias = $modcategoria->filha( $rows->id, 0, null );
            $totalsubs = count( $subcategorias );
            $filhacount = 1; //Inicia o valor para verificar primeiro e ultimo item...
            
            if( $totalsubs > 0 && $this->nivel > 1 ):
    
        ?>
        
        <div class="nivel-2">
            <ul>

                <?php 

                    foreach( $subcategorias as $subrows ): 
                        
                        #monta as classes nivel 2
                        $classe_nivel2  = 'categoria-' . $subrows->id . '';
                        $classe_nivel2 .= ( $filhacount % 2 == 0 ) ? ' par' : ' impar'; #par ou impar
                        $classe_nivel2 .= ( count( $subrows->filha( $subrows->id, 0, null ) ) ) ? ' tem-sub' : ''; #verifica se tem subcategoria
                        $classe_nivel2 .= ( $filhacount == 1 ) ? ' primeira' : '' ; #primeira linha
                        $classe_nivel2 .= ( $filhacount == $totalsubs ) ? ' ultima' : ''; #ultima linha
                ?>
                <li class="<?php echo $classe_nivel2; ?>">
                    <a class="link-nivel2" href="<?php echo $subrows->link(); ?>" title="<?php echo $subrows->nome; ?>">
                        <?php echo $subrows->nome;  ?>
                    </a>
                    
                    <?php
                                
                        $netas = $modcategoria->filha( $subrows->id, 0, null );
                        $totalnetas = count( $netas );
                        $netacount = 1; //Inicia o valor para verificar primeiro e ultimo item...
                        
                        if( $totalnetas > 0 && $this->nivel > 2 ):
                    
                    ?>
                    <div class="nivel-3">
                    
                        <ul>
                                
                            <?php 

                                foreach( $netas as $netarows ):

                                    #monta as classes nivel 3
                                    $classe_nivel3  = 'categoria-' . $netarows->id . '';
                                    $classe_nivel3 .= ( $netacount % 2 == 0 ) ? ' par' : ' impar'; #par ou impar
                                    $classe_nivel3 .= ( count( $netarows->filha( $netarows->id, 0, null ) ) ) ? ' tem-sub' : ''; #verifica se tem subcategoria
                                    $classe_nivel3 .= ( $netacount == 1 ) ? ' primeira' : '' ; #primeira linha
                                    $classe_nivel3 .= ( $netacount == $totalnetas ) ? ' ultima' : ''; #ultima linha

                            ?>
                            <li class="<?php echo $classe_nivel3; ?>">
                                <a class="link-nivel3" href="<?php echo $netarows->link();?>" title="<?php echo $netarows->nome; ?>">
                                    <?php echo $netarows->nome; ?>
                                </a>
                            </li>
                        
                            <?php $netacount++; endforeach; ?>
                        
                        </ul><!-- Lista Nivel 3 -->
                    
                    </div><!-- .nivel-3 -->
                            
                        <?php endif; ?>
                
                </li><!-- Itens Nivel 2 -->
                        
                <?php $filhacount++; endforeach; ?>
            
            </ul><!-- Lista Nivel 2 -->
        
        </div><!-- .nivel-2 -->
        
        <?php endif; ?>
    
    </li><!-- Itens Nivel 1 -->
    
    <?php $count++; endforeach; ?>
        
</ul><!-- Lista Nivel 1 -->