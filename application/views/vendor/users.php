<!DOCTYPE html>
<html lang="zxx">

<head>

   
    <title>Total Users</title>

    <?php include_once('includes/head.php') ?>
</head>

<body class="crm_body_bg">
<?php include_once('includes/sidebar.php') ?>

    <section class="main_content dashboard_part large_header_bg">

    <?php include_once('includes/header.php') ?>

        <div class="main_content_iner ">
            <div class="container-fluid p-0">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="white_card card_height_100 mb_30">
 
                            <div class="white_card_body">
                                <div class="QA_section">
                                    <div class="white_box_tittle list_header">
                                        <h4>Total Customer</h4>
                                      
                                    </div>
                                    <div class="QA_table mb_30">

                                        <table class="table lms_table_active ">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Sr</th>
                                                    <th scope="col">UserID</th>
                                                    <th scope="col">Fullname</th>
                                                    <th scope="col">Email ID</th>
                                                    <th scope="col">Mobile Number</th>
                                                    <!-- <th scope="col">Total Orders</th>
                                                    <th scope="col">Last Order</th> -->
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                $sr = 0;
                                                    foreach ($users as $key => $value) {
                                                        $sr++;
                                                        // print_r( $value);
                                                ?>
                                                <tr  >
                                                    <th scope="row" tabindex="0" class="sorting_1"> <a href="#" class="question_content"> <?= $sr ?></a></th>
                                                    <td><?= $value['UserID'] ?></td>
                                                    <td><?= $value['UserFirstName'] . ' ' . $value['UserLastName'] ?></td>
                                                    <td><?= $value['UserEmail'] ?></td>
                                                    <td><?= $value['UserMobile'] ?></td>
 
                                                </tr>

                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                    </div>
                </div>
            </div>
        </div>
        <?php include_once('includes/footer.php') ?>
        
    </section>

 

    <div id="back-top" style="display: none;">
        <a title="Go to Top" href="#">
            <i class="ti-angle-up"></i>
        </a>
    </div>



    <?php include_once('includes/foot.php') ?>
</body>

</html>