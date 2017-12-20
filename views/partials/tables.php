<?php

	/*
	**	@access Public
	** 	@author Lucas Craveiro Paes
	** 	@param 	Array com os valores para icone, titulo, conteúdo do head (array) e body (array) da tabela
	**/
	function table($table = null) {

		if ($table) { ?>
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="green">
                    <i class="material-icons"> <?= $table['icone'] ?> </i>
                </div>
                <div class="card-content">
                    <h4 class="card-title"> <?= $table['titulo'] ?> </h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="text-primary">
                                <tr>
	                        	 	<?php
	                        	 		$head = $table['head'];

	                        	 		foreach ($head as $item) {
	                        	 			echo "<th>$item</th>";
	                        	 		}
	                        	 	?>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
	                        	 	<?php
	                        	 		$body = $table['body'];

	                        	 		foreach ($body as $item) {
	                        	 			if (preg_match('/(\.jpg|\.png|\.bmp)$/', $item)) {
	                        	 				echo "<td><img src='$item' style='width: 120px; border-radius: 4px'></td>";
	                        	 			}
	                        	 			else {
												echo "<td>$item</td>";
	                        	 			}	
	                        	 		}
	                        	 	?>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <?php
	 	}
	}
?>