<!DOCTYPE html>
<html lang="zxx">

<head>

    <title>Vendor Login</title>

    <?php include_once('includes/head.php') ?>
</head>
<style>
    .main_content {
        padding-left: 0 !important;
        padding-bottom: 0 !important;
        min-height: 100%;
    }

    .main_content .main_content_iner {
        min-height: 100%;
        background-color: #fff;
    }
</style>

<body class="crm_body_bg">


    <section class="main_content dashboard_part large_header_bg">



        <div class="main_content_iner ">
            <div class="main_content_iner ">
                <div class="container-fluid p-0">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="dashboard_header mb_50">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="dashboard_header_title">
                                            <div class="logo">
                                                <img src="<?php echo base_url() ?>assets/main/images/logo.png" alt="" style="background-color: #0c6c68 ; padding:5px;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="dashboard_breadcam text-end">
                                            <p><a href="index.html">wwww.google.com </a> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="white_box mb_30">
                                <div class="row justify-content-center">
                                    <div class="col-lg-6">

                                        <div class="modal-content cs_modal">
                                            <div class="modal-header justify-content-center theme_bg_1">
                                                <h5 class="modal-title text_white">Vendor Log in</h5>
                                            </div>
                                            <?php
                                            if ($this->session->flashdata('error')) {
                                                echo $this->session->flashdata('error');
                                            }
                                            ?>

                                            <div class="modal-body">
                                                <?php echo form_open('VendorAuth/login_auth', 'class="form w-100" novalidate="novalidate" id="kt_sign_in_form"'); ?>

                                                <div class="">
                                                    <input type="text" class="form-control" placeholder="Enter your login id" name="username">
                                                    <?php echo form_error('username', '<div class="text-danger">', '</div'); ?>
                                                    <?php if (isset($validation_errors)) {
                                                        echo '<div class="text-danger">' . $validation_errors . '</div>';
                                                    } ?>
                                                </div>
                                                <div class="">
                                                    <input type="password" class="form-control" placeholder="Password" name="password">
                                                    <?php echo form_error('password', '<div class="text-danger">', '</div'); ?>
                                                </div>

                                                <button class="btn_1 full_width text-center">Log In</button>

                                                <?php echo form_close(); ?>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>



    <div id="back-top" style="display: none;">
        <a title="Go to Top" href="#">
            <i class="ti-angle-up"></i>
        </a>
    </div>



    <?php include_once('includes/foot.php') ?>

</body>


</html>