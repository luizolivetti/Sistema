<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $this->fetch('title') ?></title>
    <?= $this->Html->meta('icon') ?>
    
    <!-- Bootstrap Core CSS -->
    <link href="/webroot/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="/webroot/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="/webroot/dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/webroot/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="/webroot/bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/webroot/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

        <!-- jQuery -->
    <script src="/webroot/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/webroot/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="/webroot/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script type='text/javascript' src="/webroot/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script type='text/javascript' src="/webroot/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
    <script type='text/javascript' src="/webroot/bower_components/datatables-responsive/js/dataTables.responsive.js"></script>
    <script type='text/javascript' src="/webroot/js/cakephp.dataTables.js"></script>
    
    <!-- DataTables Responsive CSS -->
    <link href="/webroot/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet" type="text/css">
    <link href="/webroot/bower_components/datatables-responsive/css/dataTables.responsive.scss" rel="stylesheet" type="text/css">
        
    <!-- Custom Theme JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>    
    <script src="/webroot/js/bootstrap-datetimepicker.js"></script>
    <link href="/webroot/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css">
    
    <!-- Custom Theme JavaScript -->
    <script src="/webroot/dist/js/sb-admin-2.js"></script>  

    <!-- Moment: para controle de formatos de datas -->
    <script src="/webroot/js/moment.js"></script>  

    <!-- Get: para busca de dados em controles -->
    <script src="/webroot/js/get.js"></script>  
    
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                    <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                <a class="navbar-brand" href="/">
                    <i class="fa fa-bar-chart-o"></i>&nbsp;Sistema
                </a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i> &nbsp; Olá, <?php echo $_SESSION['nome'] ?> 
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> Perfil</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Configura&ccedil;&atilde;o</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="/Log/out"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Procurar...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>

                        <!--- menus dinamicos -->
                        <?php
                        foreach ($_SESSION['permissao'] as $key => $value) 
                        {
                           ?>
                                <li>
                                    <a href="/<?=$value[3]?><?=(!empty($value[4]))?'/'.$value[4]:''?>"><i class="fa <?=$value[5]?> fa-fw"></i><?=$value[1]?></a>

                                    <?php if(array_key_exists(6, $value)){ ?>
                                        <ul class="nav nav-second-level">
                                        <?php foreach($value[6] as $parentkey => $parentvalue){ ?>
                                            <li>
                                                <a href="/<?=$parentvalue[3]?><?=(!empty($parentvalue[4]))?'/'.$parentvalue[4]:''?>"><?=$parentvalue[1]?></a>
                                            </li>
                                        <?php } ?>
                                        </ul>
                                    <?php } ?>

                                </li>
                           <?php 
                        } 
                        ?>

                        <!--- menus fixos -->
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> Configura&ccedil;&otilde;es</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        
        <?= $this->Flash->render() ?>
        
        <div id="page-wrapper">
               <?= $this->fetch('content') ?>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    
</body>

</html>
