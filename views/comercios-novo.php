<?php include 'functions.php' ?>

    <!-- Calling Header -->
    <?php getHeader("Novo Comércio - Turismo Quissamã"); ?>

    <body>
        <div class="wrapper">

            <!-- Calling SideBar -->
            <?php getSidebar(3) ?>

            <!-- Main Content -->
            <div class="main-panel">

                <!-- Calling TopBar -->
                <?php getTopbar() ?>

                <div class="content">

                    <div class="container-fluid">
                        <div class="section-title">
                            <h3>Adicionar Novo Comércio</h3>
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
                                        <form method="#" action="#">
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
                                                    <div class="form-group label-floating is-focused">
                                                        <label class="control-label">Latitude</label>
                                                        <input type="text" class="form-control" name="latitude" id="latitude" value="0"></input>
                                                        <span class="material-input"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group label-floating is-focused">
                                                        <label class="control-label">Longitude</label>
                                                        <input type="text" class="form-control" name="longitude" id="longitude" value="0"></input>
                                                        <span class="material-input"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div id="map"></div>
                                                </div>
                                            </div>
                                            <br>
                                            <button type="submit" class="btn btn-primary">Adicionar</button>
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
    <?php getScripts(); ?>

</html>