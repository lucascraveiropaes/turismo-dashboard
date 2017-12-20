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
                                        <form method="#" action="#">
                                            <div class="row">
                                                <div class="col-md-8">
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
                                                    <?php inputFile('imagem'); ?>
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