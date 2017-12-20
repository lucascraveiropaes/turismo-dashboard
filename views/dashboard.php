<?php include 'functions.php' ?>

    <!-- Calling Header -->
    <?php getHeader("Dashboard - Turismo Quissamã"); ?>

    <body>
        <div class="wrapper">

            <!-- Calling SideBar -->
            <?php getSidebar(1) ?>

            <!-- Main Content -->
            <div class="main-panel">

                <!-- Calling TopBar -->
                <?php getTopbar() ?>

                <div class="content">
                    <div class="container-fluid">
                        <div class="section-title">
                            <h3>Lugares Recentemente Adicionados</h3>
                            <a class="btn btn-primary right" href="/lugares/novo/">Novo<div class="ripple-container"></div></a>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <?php
                                    $card = array(
                                        'img' => '/public/img/bg/casa-mato-de-pipa.jpg', 
                                        'titulo' => 'Fazenda Casa Mato de Pipa',
                                        'descricao' => 'Lorem Ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.',
                                        'lugar' => 'Quissamã, Brasil'
                                    );

                                    cardImage($card);
                                ?>
                            </div>
                            <div class="col-md-4">
                                <?php
                                    $card = array(
                                        'img' => '/public/img/bg/visgueiro.jpg', 
                                        'titulo' => 'Praia do Visgueiro',
                                        'descricao' => 'Lorem Ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.',
                                        'lugar' => 'Quissamã, Brasil'
                                    );

                                    cardImage($card);
                                ?>
                            </div>
                            <div class="col-md-4">
                                <?php
                                    $card = array(
                                        'img' => '/public/img/bg/canal-campos-macae.jpg', 
                                        'titulo' => 'Canal Campos/Macaé',
                                        'descricao' => 'Lorem Ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.',
                                        'lugar' => 'Quissamã, Brasil'
                                    );

                                    cardImage($card);
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