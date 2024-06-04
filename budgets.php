<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/sweet_condo_logo.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Orçamentos</title>

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
                    <a class="navbar-brand" href="#">Orçamentos</a>
                </div>
                <div class="collapse navbar-collapse">

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="condos.php">
                                <p>Condomínios</p>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="services.php" class="dropdown-toggle" data-toggle="dropdown">
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
                <!--The body content-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <a href="#" class="btn btn-info btn-fill pull-right">Realizar Orçamento
                                    <i class="pe-7s-plus"></i></a>
                                <h4 class="title">Todos Orçamentos</h4>
                                <hr />
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th>
                                        <th>Renda</th>
                                        <th>Ano</th>
                                        <th>Balança</th>
                                        <th>Despesas</th>
                                        <th>Condomínio</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>90.538 Kz</td>
                                            <td>2024</td>
                                            <td>30.000Kz</td>
                                            <td>60.000Kz</td>
                                            <td>Gira sol</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>60.538 Kz</td>
                                            <td>2023</td>
                                            <td>30.000Kz</td>
                                            <td>60.000Kz</td>
                                            <td>Gira sol</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>40.538 Kz</td>
                                            <td>2024</td>
                                            <td>30.000Kz</td>
                                            <td>60.000Kz</td>
                                            <td>Gira sol</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>120.538 Kz</td>
                                            <td>2023</td>
                                            <td>30.000Kz</td>
                                            <td>60.000Kz</td>
                                            <td>Gira sol</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>100.538 Kz</td>
                                            <td>2024</td>
                                            <td>30.000Kz</td>
                                            <td>60.000Kz</td>
                                            <td>Gira sol</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>60.538 Kz</td>
                                            <td>2023</td>
                                            <td>30.000Kz</td>
                                            <td>60.000Kz</td>
                                            <td>Gira sol</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
                <!--End of the body content-->
            </div>
        </div>
        <!-- Footer Templete -->
        <?php
        require_once ('footer.php');
        ?>
        <!-- End of Footer Templete -->