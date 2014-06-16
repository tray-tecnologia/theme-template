<div class="menu-interativo">
    <ul>
        <?php 
            $totalList = count( $lista );
            $countList = 1;
            foreach( $lista as $itens ):
                $classe_li = ( $countList == $totalList ) ? ' class="ultima"' : '';
        ?>
        <li<?php echo $classe_li; ?>>
            <a class="link-nivel1" href="<?php echo $itens['link']; ?>">
                <?php echo $itens['descricao'] ?>
            </a>
            
            <?php 
                if( count( $itens['lista'] ) ): 
                    $totalSub = count( $itens['lista'] );
                    $countSub = 1; 
            ?>
            
            <div class="sub-interativo">
                <ul>
                    <?php 
                        foreach ( $itens['lista'] as $sub ):
                            $classe_li_sub = ( $countSub == $totalSub ) ? ' class="ultima"' : '';
                    ?>
                    <li<?php echo $classe_li_sub; ?>>
                        <a class="link-nivel2" href="<?php echo $sub->link(); ?>">
                            <?php echo $sub->getNome(); ?>
                        </a>
                    </li><!-- item sub interativo -->
                    
                    <?php 
                            $countSub++;
                        endforeach; 
                    ?>
                
                </ul><!-- lista sub interativo -->
            </div><!-- .sub-interativo -->
            
            <?php 
                endif; 
            ?>
            
        </li><!-- item menu interativo -->
        
        <?php 
            $countList++;
            endforeach; 
        ?> 
    
    </ul><!-- lista menu interativo -->
</div><!-- #menu-interativo -->