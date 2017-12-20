<div class="sidebar" data-active-color="green" data-background-color="black" data-image="/public/img/bg/jurubatiba.jpg">

    <div class="sidebar-wrapper" style="margin-top: 20px">
        <div class="user">
            <div class="photo">
                <img src="/public/img/profile.jpg">
            </div>
            <div class="info">
                <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                    <span>
                        Administrador
                    </span>
                </a>
            </div>
        </div>
        <ul class="nav">
            <li <?php if($i == 1) {echo "class='active'";} ?> >
                <a href="/">
                    <i class="material-icons">dashboard</i>
                    <p>Início</p>
                </a>
            </li>
            <li <?php if($i == 2) {echo "class='active'";} ?> >
                <a data-toggle="collapse" href="#lugares">
                    <i class="material-icons">place</i>
                    <p>Lugares
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="lugares">
                    <ul class="nav">
                        <li>
                            <a href="/lugares/">
                                <span class="sidebar-mini">
                                    <i class="material-icons">list</i>
                                </span>
                                <span class="sidebar-normal">Lista</span>
                            </a>
                        </li>
                        <li>
                            <a href="/lugares/novo/">
                                <span class="sidebar-mini">
                                    <i class="material-icons">add</i>
                                </span>
                                <span class="sidebar-normal">Novo</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li <?php if($i == 3) {echo "class='active'";} ?> >
                <a data-toggle="collapse" href="#comercios">
                    <i class="material-icons">store</i>
                    <p>Comércios
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="comercios">
                    <ul class="nav">
                        <li>
                            <a href="/comercios/">
                                <span class="sidebar-mini">
                                    <i class="material-icons">list</i>
                                </span>
                                <span class="sidebar-normal">Lista</span>
                            </a>
                        </li>
                        <li>
                            <a href="/comercios/novo/">
                                <span class="sidebar-mini">
                                    <i class="material-icons">add</i>
                                </span>
                                <span class="sidebar-normal">Novo</span>
                            </a>
                        </li>
                        <li>
                            <a href="/comercios/categorias/">
                                <span class="sidebar-mini">
                                    <i class="material-icons">folder</i>
                                </span>
                                <span class="sidebar-normal">Categorias</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li <?php if($i == 4) {echo "class='active'";} ?> >
                <a data-toggle="collapse" href="#circuitos">
                    <i class="material-icons">navigation</i>
                    <p>Circuitos
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="circuitos">
                    <ul class="nav">
                        <li>
                            <a href="/circuitos/">
                                <span class="sidebar-mini">
                                    <i class="material-icons">list</i>
                                </span>
                                <span class="sidebar-normal">Lista</span>
                            </a>
                        </li>
                        <li>
                            <a href="/circuitos/novo/">
                                <span class="sidebar-mini">
                                    <i class="material-icons">add</i>
                                </span>
                                <span class="sidebar-normal">Novo</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li <?php if($i == 5) {echo "class='active'";} ?> >
                <a data-toggle="collapse" href="#atividades">
                    <i class="material-icons">directions_bike</i>
                    <p>Atividades
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="atividades">
                    <ul class="nav">
                        <li>
                            <a href="/atividades/">
                                <span class="sidebar-mini">
                                    <i class="material-icons">list</i>
                                </span>
                                <span class="sidebar-normal">Lista</span>
                            </a>
                        </li>
                        <li>
                            <a href="/atividades/novo/">
                                <span class="sidebar-mini">
                                    <i class="material-icons">add</i>
                                </span>
                                <span class="sidebar-normal">Novo</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li <?php if($i == 6) {echo "class='active'";} ?> >
                <a data-toggle="collapse" href="#eventos">
                    <i class="material-icons">local_bar</i>
                    <p>Eventos
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="eventos">
                    <ul class="nav">
                        <li>
                            <a href="/eventos/">
                                <span class="sidebar-mini">
                                    <i class="material-icons">list</i>
                                </span>
                                <span class="sidebar-normal">Lista</span>
                            </a>
                        </li>
                        <li>
                            <a href="/eventos/novo/">
                                <span class="sidebar-mini">
                                    <i class="material-icons">add</i>
                                </span>
                                <span class="sidebar-normal">Novo</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li <?php if($i == 7) {echo "class='active'";} ?> >
                <a data-toggle="collapse" href="#simbolos_turisticos">
                    <i class="material-icons">loyalty</i>
                    <p>Símbolos Turísticos
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="simbolos_turisticos">
                    <ul class="nav">
                        <li>
                            <a href="/simbolos/">
                                <span class="sidebar-mini">
                                    <i class="material-icons">list</i>
                                </span>
                                <span class="sidebar-normal">Lista</span>
                            </a>
                        </li>
                        <li>
                            <a href="/simbolos/novo/">
                                <span class="sidebar-mini">
                                    <i class="material-icons">add</i>
                                </span>
                                <span class="sidebar-normal">Novo</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>