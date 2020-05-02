<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Parcial Emergentes P2</title>
        <link rel="stylesheet" href="<?php echo base_url('content/css/_all-skins.css') ?>">

        <link rel="stylesheet" href="<?php echo base_url('content/css/bootstrap.css.map') ?>">
        <link rel="stylesheet" href="<?php echo base_url('content/css/bootstrap.min.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('content/css/AdminLTE.css') ?>">

        <script src="<?php echo base_url('content/js/jQuery-2.1.4.min.js') ?>"></script>
        <script src="<?php echo base_url('content/js/jquery.slimscroll.js') ?>"></script>
        <script src="<?php echo base_url('content/js/app.min.js') ?>"></script>
        <script src="<?php echo base_url('content/js/bootstrap.min.js') ?>"></script>
        <script src="<?php echo base_url('content/js/fastclick.min.js') ?>"></script>
        <script src="<?= base_url(); ?>js/funciones.js"></script>
       

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">


    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <header class="main-header"> 
                <?php $this->load->view($header); ?>   
            </header>
            <aside class="main-sidebar">
                <?php $this->load->view($sidebar); ?>   
            </aside>
            <div class="content-wrapper">
                <section class="content">
                    <?php $this->load->view($content); ?>
                </section>
            </div>
            <!-- Left side column. contains the logo and sidebar -->

        </div>
    </body>
</html>