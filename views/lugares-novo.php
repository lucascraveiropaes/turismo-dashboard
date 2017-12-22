<?php include 'functions.php' ?>

    <!-- Calling Header -->
    <?php getHeader("Novo Lugar - Turismo Quissamã"); ?>

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
                            <h3>Adicionar Novo Lugar</h3>
                            <a class="btn btn-primary right" href="/lugares/">Lista Completa<div class="ripple-container"></div></a>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header card-header-icon" data-background-color="green">
                                        <i class="material-icons">place</i>
                                    </div>
                                    <div class="card-content">
                                        <h4 class="card-title">Insira as Informações Corretamente</h4>
                                        <form method="post" action="http://localhost:9000/lugares/novo" id="novo-lugar" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <?php
                                                        input(array(
                                                            'titulo' => 'Nome',
                                                            'type' => 'text',
                                                            'name' => 'nome',
                                                            'value' => null
                                                        ));
                                                    ?>
                                                </div>

                                                <div class="col-md-4">
                                                    <?php
                                                        input(array(
                                                            'titulo' => 'Espaço (m²)',
                                                            'type' => 'number',
                                                            'name' => 'espaco',
                                                            'value' => null
                                                        ));
                                                    ?>
                                                </div>

                                                <div class="col-md-4">
                                                    <?php
                                                        $options = array(
                                                            'Circuito Histórico',
                                                            'Circuito Ético',
                                                            'Circuito Ecológico'
                                                        );
                                                        select(array(
                                                            'titulo' => 'Circuitos',
                                                            'name' => 'circuito',
                                                            'options' => $options
                                                        ));
                                                    ?>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <?php
                                                        $options = array(
                                                            '1',
                                                            '2',
                                                            '2'
                                                        );

                                                        select(array(
                                                            'titulo' => 'Símbolos Turísticos',
                                                            'name' => 'simbolos_turisticos',
                                                            'options' => $options
                                                        ));
                                                    ?>
                                                </div>

                                                <div class="col-md-4">
                                                    <?php
                                                        input(array(
                                                            'titulo' => 'Horário de Funcionamento (Início)',
                                                            'type' => 'time',
                                                            'name' => 'funcionamento_inicio',
                                                            'value' => null
                                                        ));
                                                    ?>
                                                </div>

                                                <div class="col-md-4">
                                                    <?php
                                                        input(array(
                                                            'titulo' => 'Horário de Funcionamento (Fim)',
                                                            'type' => 'time',
                                                            'name' => 'funcionamento_fim',
                                                            'value' => null
                                                        ));
                                                    ?>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <?php
                                                        textarea(array(
                                                            'titulo' => 'Descrição',
                                                            'name' => 'descricao',
                                                            'rows' => 10
                                                        ));
                                                    ?>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <?php
                                                        input(array(
                                                            'titulo' => 'Endereço',
                                                            'type' => 'text',
                                                            'name' => 'endereco',
                                                            'value' => 'Prefeitura de Quissamã'
                                                        ));
                                                    ?>
                                                    <a class="btn btn-white btn-round btn-just-icon" id="btn-search-maps">
                                                        <i class="material-icons">search</i>
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </div>
                                                <div class="col-md-3">
                                                    <?php
                                                        input(array(
                                                            'titulo' => 'Latitude',
                                                            'type' => 'text',
                                                            'name' => 'latitude',
                                                            'value' => '0'
                                                        ));
                                                    ?>
                                                </div>
                                                <div class="col-md-3">
                                                    <?php
                                                        input(array(
                                                            'titulo' => 'Longitude',
                                                            'type' => 'text',
                                                            'name' => 'longitude',
                                                            'value' => '0'
                                                        ));
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div id="map"></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12" style="text-align: center;">
                                                    <div class="file-upload">
                                                        <input id="files" type="file" name="imagens[]" multiple>

                                                        <a class="btn btn-primary" id="upload-trigger">Adicionar Imagens</a>

                                                        <a class="btn btn-danger" id="clear" style="padding: 13.5px 47px">
                                                            Limpar
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <output id="file-preview"></output>
                                                </div>
                                            </div>
                                            <br>
                                            <button type="submit" id="submit" class="btn btn-primary">Adicionar Lugar</button>
                                        </form>
                                    </div>
                                </div>
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
    <?php getScripts("maps"); ?>

    <!--script type="text/javascript">
    //<![CDATA[
        $("#novo-lugar").submit(function (event) {
            event.preventDefault();

            var dados = jQuery(this).serialize();

            $.ajax({
                method: "POST",
                url: "http://localhost:9000/lugares/novo",
                data: dados,
                success: function() {
                    alert("Lugar Salvo Com Sucesso!");
                    window.setTimeout("location.href='/lugares/'", 100);
                },
                error: function() {
                    alert("Não Foi Possível Atender Sua Solicitação no Momento.");
                }
            });
        });
    //]]>
    </script-->

</html>