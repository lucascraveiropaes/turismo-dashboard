<?php

	/*
	**	@access Public
	** 	@author Lucas Craveiro Paes
	** 	@param 	Array com os valores para imagem, titulo, descrição e lugar
	**/
	function input($input = null) {

		if ($input) { 
			if($input['value'] != '') {
				echo '<div class="form-group label-floating is-focused">';
			}
			else {
				echo '<div class="form-group label-floating is-empty">';
			} ?>
	            <label class="control-label"> <?= $input['titulo'] ?> </label>
	            <input type="<?= $input['type'] ?>" name="<?= $input['name'] ?>" id="<?= $input['name'] ?>" value="<?= $input['value'] ?>" class="form-control">
	            <span class="material-input"></span>
	        </div><?php
	    }
	}

	function inputFile($nome = null) {
		if ($nome) { ?>
			<div class="fileinput fileinput-new text-center" data-provides="fileinput">
	            <div class="fileinput-new thumbnail">
	                <img src="/public/img/image_placeholder.jpg">
	            </div>
	            <div class="fileinput-preview fileinput-exists thumbnail"></div>
	            <div>
	                <span class="btn btn-rose btn-round btn-file">
	                    <span class="fileinput-new">Selecionar Imagem</span>
	                    <span class="fileinput-exists">Trocar</span>
	                    <input type="file" name="<?= $nome ?>" id="<?= $nome ?>" multiple>
	                </span>
	                <a href="#" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remover</a>
	            </div>
	        </div><?php
	    }
	}

	function textarea($textarea = null) {
		if ($textarea) { ?>
            <div class="form-group label-floating is-empty">
                <label class="control-label"><?= $textarea['titulo'] ?></label>
                <textarea class="form-control" name="<?= $textarea['name'] ?>" rows="<?= $textarea['rows'] ?>"></textarea>
                <span class="material-input"></span>
            </div><?php
	    }
	}

	function select($select = null) {
 		$options = $select['options'];
 		$i = 1; ?>
 		
        <div class="btn-group bootstrap-select">
            <select class="selectpicker" data-style="btn btn-primary btn-round" title="<?= $select['titulo'] ?>" name="<?= $select['name'] ?>"> <?php

            		// Listando options
	    	 		foreach ($options as $option) {
	    	 			echo "<option value='$i'>$option</td>";
	    	 			$i++;
	    	 		} ?>

            </select>
        </div><?php
	}
?>