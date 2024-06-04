<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/sweet_condo_logo.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Contas</title>

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
                    <a class="navbar-brand" href="#">Contas</a>
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
                                <h4 class="title">Todas as contas</h4>
                                <hr />
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th>
                                        <th>Valor</th>
                                        <th>Tipo</th>
                                        <th>Prazo</th>
                                        <th>Credor</th>
                                        <th>Estado</th>
                                        <th>Pagamento</th>
                                        <th>Acção</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>10.450 Kz</td>
                                            <td>Imposto</td>
                                            <td>30/06/2024</td>
                                            <td>Jeremias Dinzinga</td>
                                            <td>Pago</td>
                                            <td>01/06/2024</td>
                                            <td><a href="#" class="btn btn-success btn-fill">Validar <i class="pe-7s-angle-down-circle"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>11.450 Kz</td>
                                            <td>Limpeza</td>
                                            <td>29/06/2024</td>
                                            <td>Jemima Dinzinga</td>
                                            <td>Não Pago</td>
                                            <td>01/06/2024</td>
                                            <td><a href="#" class="btn btn-success btn-fill">Validar <i class="pe-7s-angle-down-circle"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>10.450 Kz</td>
                                            <td>Imposto</td>
                                            <td>30/06/2024</td>
                                            <td>Jeremias Dinzinga</td>
                                            <td>Pago</td>
                                            <td>01/06/2024</td>
                                            <td><a href="#" class="btn btn-success btn-fill">Validar <i class="pe-7s-angle-down-circle"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>11.450 Kz</td>
                                            <td>Limpeza</td>
                                            <td>29/06/2024</td>
                                            <td>Jemima Dinzinga</td>
                                            <td>Pago</td>
                                            <td>01/06/2024</td>
                                            <td><a href="#" class="btn btn-success btn-fill">Validar <i class="pe-7s-angle-down-circle"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>13.450 Kz</td>
                                            <td>Imposto</td>
                                            <td>20/06/2024</td>
                                            <td>Jeremias Dinzinga</td>
                                            <td>Não Pago</td>
                                            <td>01/06/2024</td>
                                            <td><a href="#" class="btn btn-success btn-fill">Validar <i class="pe-7s-angle-down-circle"></i></a></td>
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