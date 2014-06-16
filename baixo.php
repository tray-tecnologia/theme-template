<!-- .banner-baixo -->
<?php $ag->banner('baixo'); ?>

<div class="rodape"></div><!-- .rodape -->

<!-- .banner-rodape -->
<?php
	$ag->banner('rodape');
	echo $ag->funcoes()->atendimento();
	
	include_once("logotray/logotray.php");

	// plugins
	echo $ag->loadJs(array('jquery.formComplete'));
	echo $ag->loadJs(array('init'), $ag->getLoja());
?>

<!-- scripts de conversão -->
<?php
	# remarketing em todas as paginas
	echo Translation::t('ag_remarketing');

	# codigo de conversão na pagina de finalização de compra
	if( $ag->funcoes()->isPage('finalizar_finalizar') ){
		echo Translation::t('ag_conversao');
	}
?>