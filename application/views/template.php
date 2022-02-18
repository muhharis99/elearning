<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Sales Admin | CORK - Multipurpose Bootstrap Dashboard Template </title>
    <link rel="icon" type="image/x-icon" href="<?php echo base_url() ?>assets/assets/img/favicon.ico">
    <link href="<?php echo base_url() ?>assets/assets/css/loader.css" rel="stylesheet" type="text/css">
    <script src="<?php echo base_url() ?>assets/assets/js/loader.js"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="../../../css.css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ?>assets/assets/css/plugins.css" rel="stylesheet" type="text/css">
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="<?php echo base_url() ?>assets/plugins/apex/apexcharts.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ?>assets/assets/css/dashboard/dash_1.css" rel="stylesheet" type="text/css">
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

</head>
<body>
    <!-- BEGIN LOADER -->
    <?php $this->load->view('loader') ?>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    <?php $this->load->view('headerone') ?>
    <!--  END NAVBAR  -->

    <!--  BEGIN NAVBAR  -->
    <?php $this->load->view('headertwo') ?>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        <?php $this->load->view('menu') ?>
        <!--  END SIDEBAR  -->
        
        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <?php $this->load->view('content') ?>
            <!--  -->
            <?php $this->load->view('footer') ?>
        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="<?php echo base_url() ?>assets/assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="<?php echo base_url() ?>assets/bootstrap/js/popper.min.js"></script>
    <script src="<?php echo base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?php echo base_url() ?>assets/assets/js/app.js"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="<?php echo base_url() ?>assets/plugins/apex/apexcharts.min.js"></script>
    <script src="<?php echo base_url() ?>assets/assets/js/dashboard/dash_1.js"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

</body>
</html>