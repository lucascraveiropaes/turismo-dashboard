<?php include 'functions.php' ?>

    <!-- Calling Header -->
    <?php getHeader("Novo Circuito - Turismo Quissamã"); ?>

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
                            <h3>Adicionar Novo Circuito</h3>
                            <a class="btn btn-primary right" href="/circuitos/">Lista Completa<div class="ripple-container"></div></a>
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
                                        <form method="post" action="http://localhost:9000/circuitos/novo" id="novo-circuito" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <?php
                                                        input(array(
                                                            'titulo' => 'Nome',
                                                            'type' => 'text',
                                                            'name' => 'nome',
                                                            'value' => null
                                                        ));
                                                    ?>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="file-upload" style="text-align: center;">
                                                        <input id="files" type="file" name="imagem">

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
    <?php
        $footer = array(
            'formulario' => true
        );
    ?>
    <?php getScripts($footer); ?>

    <script type="text/javascript">
    //<![CDATA[
        $("#novo-circuito").submit(function (event) {
            event.preventDefault();

            var dados = new FormData(this);

            //var dados = jQuery(this).serialize();

            $.ajax({
                method: "POST",
                url: "http://localhost:9000/circuitos/novo",
                data: dados,
                cache: false,
                contentType: false,
                processData: false,
                success: function(data) {
                    alert("Lugar Salvo Com Sucesso!");
                    window.setTimeout("location.href='/circuitos/'", 100);
                },
                error: function() {
                    alert("Não Foi Possível Atender Sua Solicitação no Momento.");
                }
            });
        });
    //]]>
    </script>

</html>