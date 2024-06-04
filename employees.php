<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/sweet_condo_logo.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Funcionários</title>

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
                    <a class="navbar-brand" href="#">Funcionários</a>
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
                            <a href="add_employee.php" class="btn btn-info btn-fill pull-right">Add Funcionário <i class="pe-7s-plus"></i></a>
                                <h4 class="title">Todos Funcionários</h4>                                
                                <hr/>
                            </div>                                                        
                            <div class="content table-responsive table-full-width">                            
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th>
                                        <th>Nome</th>
                                        <th>BI</th>
                                        <th>Endereço</th>
                                        <th>Telefone</th>
                                        <th>Nascimento</th>
                                        <th>Salário</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Dakota Rice</td>
                                            <td>00343536666LA043</td>
                                            <td>Luanda/K.Kiaxi</td>
                                            <td>+244 999 999 999</td>
                                            <td>12/12/2012</td>
                                            <td>100.738 Kz</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Minerva Hooper</td>
                                            <td>00343536666LA043</td>
                                            <td>Luanda/K.Kiaxi</td>
                                            <td>+244 999 999 999</td>
                                            <td>12/12/2012</td>
                                            <td>100.738 Kz</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Sage Rodriguez</td>
                                            <td>00343536666LA043</td>
                                            <td>Luanda/K.Kiaxi</td>
                                            <td>+244 999 999 999</td>
                                            <td>12/12/2012</td>
                                            <td>100.738 Kz</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Philip Chaney</td>
                                            <td>00343536666LA043</td>
                                            <td>Luanda/K.Kiaxi</td>
                                            <td>+244 999 999 999</td>
                                            <td>12/12/2012</td>
                                            <td>100.738 Kz</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Doris Greene</td>
                                            <td>00343536666LA043</td>
                                            <td>Luanda/K.Kiaxi</td>
                                            <td>+244 999 999 999</td>
                                            <td>12/12/2012</td>
                                            <td>100.738 Kz</td>
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