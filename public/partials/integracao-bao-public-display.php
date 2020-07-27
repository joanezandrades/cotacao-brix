<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       unitycode.tech
 * @since      1.0.0
 *
 * @package    Integracao_Bao
 * @subpackage Integracao_Bao/public/partials
 */
?>

<p id="teste">CEP TESTE: 90030140 - 31340350</p>
<form method="post" action="<?php echo $page_cart; ?>" style="margin-bottom: 150px;">
    <div class="form-group">
        <label for="cotacao-cepremetente">CEP Origem</label>
        <input type="text" class="form-control" name="cotacao-cepremetente" id="cotacao-cepremetente" required>
    </div>
    <div class="form-group">
        <label for="cotacao-cepdestinatario">CEP Destino</label>
        <input type="text" class="form-control" name="cotacao-cepdestinatario" id="cotacao-cepdestinatario" required>
    </div>
    <div class="form-group">
        <label for="cotacao-volumes">Número de volumes</label>
        <input type="number" class="form-control" name="cotacao-volumes" id="cotacao-volumes" required>
    </div>
    
    <div class="form-group">
        <label for="cotacao-peso">Peso</label>
        <input type="number" class="form-control" name="cotacao-peso" id="cotacao-peso" required>
    </div>
    
    <div class="form-group">
        <label for="cotacao-valor">Valor</label>
        <input type="number" class="form-control" name="cotacao-valor" id="cotacao-valor" required>
    </div>

    <div class="form-group">
        <button type="button" id="buttonCotacao">Buscar cotação</button>
    </div>

    
	<div id="bao-cotacao-result" style="display: none;">
		<dl>
		  <dt>Valor do Frete: </dt>
		  <dd id="price"></dd>
		  <dt>Prazo de entrega: </dt>
		  <dd id="deliveryTime"></dd>
          <input type="hidden" name="delivery_price" id="delivery_price" value="">
          <input type="hidden" name="delivery_time" id="delivery_time" value="">
          <input type="hidden" name="zip_code" id="zip_code" value="">
        </dl>

        <?php if ( is_user_logged_in() ) : ?>
            <button id="buttonPedido">Finalizar frete</button>
        <?php else : ?>
            <button>Cadastre-se para continuar</button>
        <?php endif; ?>
    </div>
</form>