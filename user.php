<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/sweet_condo_logo.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Meu Perfil</title>

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
                    <a class="navbar-brand" href="#">Meu Perfil</a>
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
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Editar Perfil</h4>
                            </div>
                            <div class="content">
                                <form>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nome</label>
                                                <input type="text" class="form-control" placeholder="Nome"
                                                    value="Jeremias Dinzinga">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">E-mail</label>
                                                <input type="email" class="form-control" placeholder="E-mail">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Função</label>
                                                <input type="text" class="form-control" placeholder="Função"
                                                    value="Admin">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nova Senha</label>
                                                <input type="text" class="form-control" placeholder="Nova senha">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Endereço</label>
                                                <input type="text" class="form-control" placeholder="Home Address"
                                                    value="Rua do zaire, sapú, K.Kiaxe, Luanda">
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-info btn-fill pull-right">Actualizar</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-user">
                            <div class="image">
                                <img src="assets/img/condominio-sweet.jpg" alt="..." />
                            </div>
                            <div class="content">
                                <div class="author">
                                    <a href="#">
                                        <img class="avatar border-gray" src="assets/img/faces/user_profile.jpg"
                                            alt="..." />

                                        <h4 class="title">Jeremias Dinzinga<br />
                                            <small>Administrador</small>
                                        </h4>
                                    </a>
                                </div>
                                <p class="description text-center"> "Administrar <br>
                                    todos os condomínios <br>
                                    num único sistema"
                                </p>
                            </div>
                            <hr>
                            <div class="text-center">
                                <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                                <button href="#" class="btn btn-simple"><i
                                        class="fa fa-google-plus-square"></i></button>

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