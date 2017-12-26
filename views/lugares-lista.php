<?php include 'functions.php' ?>

    <!-- Calling Header -->
    <?php getHeader("Lugares - Turismo Quissamã"); ?>

    <body>
        <div class="wrapper">

            <!-- Calling SideBar -->
            <?php getSidebar(2) ?>

            <!-- Main Content -->
            <div class="main-panel">

                <!-- Calling TopBar -->
                <?php getTopbar() ?>

                <div class="content">
                    <div class="container-fluid">
                        <div class="section-title">
                            <h3>Lista Completa de Lugares Adicionados</h3>
                            <a class="btn btn-primary right" href="/lugares/novo/">Novo<div class="ripple-container"></div></a>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <?php

                                    $head = array(
                                        'Nome',
                                        'Descrição',
                                        'Informações',
                                        'Horário de Funcionamento',
                                        'Imagem (Thumbnail)'
                                    );

                                    $tabela = array(
                                        'icone' => 'place',
                                        'titulo' => 'Teste',
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
                url: "http://localhost:9000/lugares/"
            }).done(function( data ) {
                data = jQuery.parseJSON(data);

                for (var i = 0; i <= data.length; i++) {                    
                    var html = "";
                    var nome = data[i].nome;
                    var informacoes = data[i].informacoes;
                    var descricao = data[i].descricao;
                    var fInicio = data[i].funcionamento_inicio;
                    var fFim = data[i].funcionamento_fim;

                    if (data[i].imagem_existe) {
                        var imagem = data[i].imagens[0].url;
                    }
                    else {
                        var imagem = "/public/img/image_placeholder.jpg";
                    }

                    html += '<tr>';
                    html += '<td>'+nome+'</td>';
                    html += '<td>'+descricao.substr(0, 55)+'...'+'</td>';
                    html += '<td>'+informacoes.substr(0, 45)+'</td>';
                    html += '<td>'+fInicio + " - " + fFim + '</td>';
                    html += '<td class="thumbnail"><img src="'+imagem+'"></td>';
                    html += '</tr>';

                    $('tbody').append(html);
                }

                
            });
        });
    //]]>
    </script>

</html>