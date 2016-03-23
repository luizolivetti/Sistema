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
    <script src="/webroot/dist/js/sb-admin-2.js"></script>
    
</head>

<body style="background-color: #DDD">

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                
                <!-- Vc pode por uma logo aqui
                <center>
                    <img src="" />
                </center>
                -->
                
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Acesso ao Sistema</h3>
                    </div>
                    <div class="panel-body">
                        
                        <?= $this->Flash->render() ?>
                        
                        <form role="form" id="form" action="/log/on" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Login" name="login" type="login" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Senha" name="senha" type="password" >
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <a onclick="$('#form').submit();" class="btn btn-lg btn-primary btn-block">Login</a>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
