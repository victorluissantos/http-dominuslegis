<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta name="viewport" content="width=device-width">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style.css'); ?>" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <span id="iconv" class="glyphicon glyphicon-book pull-left" aria-hidden="true"></span><a class="navbar-brand" href="<?php echo base_url('sistema/index'); ?>">
                <?php echo isset($_SESSION['usuario']->nome)?$_SESSION['usuario']->nome:'Dominus Legis'; ?>
                </a>
            </div>
            <?php if( !isset($_SESSION['usuario']) || empty($_SESSION['usuario']) ) { ?>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <!--li class="page-scroll">
                        <a href="#mexplica">Como Funciona</a>
                    </li>-->
                    <li class="page-scroll">
                        <a href="#Sobre">Sobre</a>
                    </li>
                    <!--
                    <li class="page-scroll">
                        <a href="#contact">False Conosco</a>
                    </li-->
                    <li class="page-scroll">
                        <a data-toggle="modal" href="#myModal" data-toggle="modal" data-target=".bs-example-modal-lg">Entrar</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
            <?php } else { ?>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <li class="page-scroll">
                            <a href="<?php echo base_url('usuario/index'); ?>">PERFIL</a>
                        </li>
                        <li class="page-scroll">
                            <a href="<?php echo base_url('prova/filtro'); ?>">PROVAS</a>
                        </li>
                        <?php if( $_SESSION['usuario']->perfil == 'colaborador') { ?>
                        <li class="page-scroll">
                             <a href="<?php echo base_url('questao/index'); ?>"><b style="color:#FFD700;">SUGERIR QUESTÃO</b></a>
                        </li>
                        <?php } ?>
                        <li class="page-scroll">
                            <a href="<?php echo base_url('usuario/logout'); ?>">SAIR</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            <?php } ?>
        </div>
        <!-- /.container-fluid -->
    </nav>