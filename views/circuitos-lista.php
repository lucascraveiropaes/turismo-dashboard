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
                            <a class="btn btn-primary right" href="/lugares/novo/">Novo<div class="ripple-container"></div></a>
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

                                    $body = array(
                                        1 => 'Circuito Ecológico',
                                        2 => 5,
                                        3 => '/public/img/bg/visgueiro.jpg'
                                    );

                                    $tabela = array(
                                        'icone' => 'navigation',
                                        'titulo' => 'Circuitos',
                                        'head' => $head,
                                        'body' => $body,

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

</html>