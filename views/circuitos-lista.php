<?php include 'functions.php' ?>

    <!-- Calling Header -->
    <?php getHeader("Circuitos - Turismo Quissamã"); ?>

    <body>
        <div class="wrapper">

            <!-- Calling SideBar -->
            <?php getSidebar(4) ?>

            <!-- Main Content -->
            <div class="main-panel">

                <!-- Calling TopBar -->
                <?php getTopbar() ?>

                <div class="content">
                    <div class="container-fluid">
                        <div class="section-title">
                            <h3>Lista Completa de Circuitos Cadastrados</h3>
                            <a class="btn btn-primary right" href="/circuitos/novo/">Novo<div class="ripple-container"></div></a>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <?php

                                    $head = array(
                                        1 => 'Nome',
                                        2 => 'Lugares (Quantidade)',
                                        3 => 'Thumbnail'
                                    );

                                    $tabela = array(
                                        'icone' => 'navigation',
                                        'titulo' => 'Circuitos',
                                        'head' => $head,
                                        'body' => null,

                                    );

                                    table($tabela);
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Calling Footer -->
                <?php getFooter(); ?>

            </div>
        </div>
    </body>

    <!-- Calling Scripts -->
    <?php getScripts(); ?>

    <script type="text/javascript">
    //<![CDATA[
        $(document).ready(function () {

            $.ajax({
                method: "GET",
                url: "http://localhost:9000/circuitos"
            }).done(function( data ) {
                data = jQuery.parseJSON(data);

                for (var i = 0; i <= data.length; i++) {                    
                    var html = "";
                    var nome = data[i].nome;
                    var lugares = data[i].lugares;

                    if (data[i].imagem) {
                        var imagem = data[i].imagem;
                    }
                    else {
                        var imagem = "/public/img/image_placeholder.jpg";
                    }

                    html += '<tr>';
                        html += '<td>'+nome+'</td>';
                        html += '<td>'+lugares+'</td>';
                        html += '<td class="thumbnail"><img src="'+imagem+'"></td>';
                    html += '</tr>';

                    $('tbody').append(html);
                }

                
            });
        });
    //]]>
    </script>

</html>