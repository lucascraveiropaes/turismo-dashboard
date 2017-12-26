<?php include 'functions.php' ?>

    <!-- Calling Header -->
    <?php getHeader("Simbolos - Turismo Quissamã"); ?>

    <body>
        <div class="wrapper">

            <!-- Calling SideBar -->
            <?php getSidebar(7) ?>

            <!-- Main Content -->
            <div class="main-panel">

                <!-- Calling TopBar -->
                <?php getTopbar() ?>

                <div class="content">
                    <div class="container-fluid">
                        <div class="section-title">
                            <h3>Lista Completa de Simbolos Adicionados</h3>
                            <a class="btn btn-primary right" href="/simbolos/novo/">Novo<div class="ripple-container"></div></a>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <?php

                                    $head = array(
                                        'ID',
                                        'Nome',
                                        'Espaço',
                                        'Ícone'
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
                url: "http://localhost:9000/simbolos"
            }).done(function( data ) {

                data = jQuery.parseJSON(data);

                for (var i = 0; i < data.length; i++) {                    
                    var html = "";
                    var id = data[i].id;
                    var nome = data[i].nome;
                    var descricao = data[i].descricao;
                    var imagem = "/public/img/image_placeholder.jpg";

                    if (data[i].url != "" && data[i].url) {
                        var imagem = data[i].url;
                    }

                    html += '<tr>';
                        html += '<td>'+id+'</td>';
                        html += '<td>'+nome+'</td>';
                        html += '<td>'+descricao.substr(0, 35)+'</td>';
                        html += '<td class="thumbnail"><img src="'+imagem+'"></td>';
                    html += '</tr>';

                    $('tbody').append(html);
                }

                
            });
        });
    //]]>
    </script>

    <style>
        tbody tr td.thumbnail img {
            width: 90px;
        }
    </style>

</html>