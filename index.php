<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/sweet_condo_logo.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Sweet Condominio</title>

    <!-- Header Templete -->
    <?php
    require_once ('header.php');
    ?>
    <!-- End of Header Templete -->
    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Página Inicial</a>
                </div>
                <div class="collapse navbar-collapse">

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="condos.php">
                                <p>Condomínios</p>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="services" class="dropdown-toggle" data-toggle="dropdown">
                                <p>
                                    Serviços
                                    <b class="caret"></b>
                                </p>

                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Limpeza</a></li>
                                <li><a href="#">Jardinagem</a></li>
                                <li><a href="#">Luz</a></li>
                                <li><a href="#">Água</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="login.php">
                                <p>Terminar sessão</p>
                            </a>
                        </li>
                        <li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">

                            <div class="header">
                                <h4 class="title">Avaliação</h4>
                                <p class="category">Ultimas avaliações</p>
                            </div>
                            <div class="content">
                                <div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div>

                                <div class="footer">                                       
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-clock-o"></i> Actualizado á 2 dias
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Envolução dos serviços</h4>
                                <p class="category">24 min de actuação</p>
                            </div>
                            <div class="content">
                                <div id="chartHours" class="ct-chart"></div>
                                <div class="footer">                                    
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-history"></i> Actualizado á 3 minutos
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
        <!-- Footer Templete -->
        <?php
        require_once ('footer.php');
        ?>
        <!-- End of Footer Templete -->