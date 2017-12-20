<?php

	/*
	**	@access Public
	** 	@author Lucas Craveiro Paes
	** 	@param 	Array com os valores para imagem, titulo, descrição e lugar
	**/
	function cardImage($card = null) {

		if ($card) { ?>
	        <div class="card card-product">
	            <div class="card-image card-image-dark" data-header-animation="true">
	                <a href="#pablo">
	                    <img class="img" src="<?= $card["img"] ?>">
	                </a>
	            </div>
	            <div class="card-content">
	                <div class="card-actions">
	                    <button type="button" class="btn btn-danger btn-simple fix-broken-card">
	                        <i class="material-icons">build</i> Corrigir Imagem!
	                    </button>
	                    <button type="button" class="btn btn-default btn-simple" rel="tooltip" data-placement="bottom" title="Visualizar">
	                        <i class="material-icons">remove_red_eye</i>
	                    </button>
	                    <button type="button" class="btn btn-success btn-simple" rel="tooltip" data-placement="bottom" title="Editar">
	                        <i class="material-icons">edit</i>
	                    </button>
	                    <button type="button" class="btn btn-danger btn-simple" rel="tooltip" data-placement="bottom" title="Remover">
	                        <i class="material-icons">close</i>
	                    </button>
	                </div>
	                <h4 class="card-title">
	                    <a href="#pablo"><?= $card["titulo"] ?></a>
	                </h4>
	                <div class="card-description"><?= $card["descricao"] ?></div>
	            </div>
	            <div class="card-footer">
	                <!--div class="price">
	                    <h4>$899/night</h4>
	                </div-->
	                <div class="stats pull-right">
	                    <p class="category"><i class="material-icons">place</i><?= $card["lugar"] ?></p>
	                </div>
	            </div>
	        </div> <?php
	 	}
	}
?>