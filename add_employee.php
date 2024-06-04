<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/sweet_condo_logo.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Registrar Funcionário</title>

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
                    <a class="navbar-brand" href="#">Funcionários / Registrar</a>
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
                                <h4 class="title">Adicionar Funcionário</h4>
                            </div>
                            <div class="content">
                                <form>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Nome completo</label>
                                                <input type="text" name="name" id="name" class="form-control"
                                                    placeholder="Inserir nome completo" />
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Nº de Bilhete de identidade</label>
                                                <input type="text" name="bi" id="bi" class="form-control"
                                                    placeholder="Inserir nº de bi" />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Telefone</label>
                                                <input type="text" name="telephone" id="telephone" class="form-control"
                                                    placeholder="ex: +244 999 999 999" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Data de nascimento</label>
                                                <input type="date" name="date_of_birth" id="date_of_birth"
                                                    class="form-control" />
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Função</label>
                                                <input type="text" name="role" id="role" class="form-control"
                                                    placeholder="Inserir a função" />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Salário</label>
                                                <input type="text" name="salary" id="salary" class="form-control"
                                                    placeholder="ex: 100.000 Kz" />
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Endereço</label>
                                                <input type="text" name="address" id="address" class="form-control"
                                                    placeholder="ex: Rua-Bairro-Cidade-País" />
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-info btn-fill pull-right">Registrar</button>
                                    <div class="clearfix"></div>
                                </form>
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