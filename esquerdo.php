<div class="menu-esquerdo">
    <?php $ag->Menu(2); ?>
</div><!-- .menu-esquerdo -->

<div class="newsletter">
    <?php $ag->element('newsletter'); ?>
</div><!-- .newsletter -->

<!-- .banner-esquerdo, .banner-extra2 -->
<?php
    $ag->banner('esquerdo')->banner('extra', 2);
?>