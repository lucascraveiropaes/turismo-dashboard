<?php include 'functions.php' ?>

    <!-- Calling Header -->
    <?php getHeader("Eventos - Turismo Quissamã"); ?>

    <body>
        <div class="wrapper">

            <!-- Calling SideBar -->
            <?php getSidebar(6) ?>

            <!-- Main Content -->
            <div class="main-panel">

                <!-- Calling TopBar -->
                <?php getTopbar() ?>

                <div class="content">
                    <div class="container-fluid">
                        <div class="section-title">
                            <h3>Lista Completa de Eventos Adicionados</h3>
                            <a class="btn btn-primary right" href="/lugares/novo/">Novo<div class="ripple-container"></div></a>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <?php

                                    $head = array(
                                        1 => 'Nome',
                                        2 => 'Espaço',
                                        3 => 'Descrição',
                                        4 => 'Horário de Funcionamento'
                                    );

                                    $body = array(
                                        1 => 'Restinga de Jurubatiba',
                                        2 => '380km²',
                                        3 => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...',
                                        4 => '8h até 18h'
                                    );

                                    $tabela = array(
                                        'icone' => 'place',
                                        'titulo' => 'Teste',
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