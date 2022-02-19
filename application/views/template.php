<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('head') ?>
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
            <?php $this->load->view($isi) ?>
            <!--  -->
            <?php $this->load->view('footer') ?>
        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <?php $this->load->view('js') ?>
</body>
</html>