<!DOCTYPE html>
<html lang="zxx">

<head>


    <title>Upload Category</title>

    <?php include_once('includes/head.php') ?>
</head>

<body class="crm_body_bg">
    <?php include_once('includes/sidebar.php') ?>

    <section class="main_content dashboard_part large_header_bg">

        <?php include_once('includes/header.php') ?>

        <div class="main_content_iner ">
            <div class="container-fluid p-0">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="white_card card_height_100 mb_30">
                            <div class="white_card_header">
                                <div class="box_header m-0">
                                    <div class="main-title">
                                        <h3 class="m-0">Uppload Excel Cateogy Form</h3>
                                    </div>

                                </div>
                            </div>
                            <div class="white_card_body">

                                <form id="categoryImport" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label class="form-label" for="uploadExcel">Upload Excel</label>
                                        <input type="file" name="uploadExcel" class="form-control" id="uploadExcel" aria-describedby="uploadExcel"  required accept=".xls, .xlsx" placeholder="Upload Excel">
                                        <div id="nameError" class="text-danger"></div>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Upload</button>
                                </form>
                            </div>
                        </div>
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
    <script>
        $(document).ready(function() {
            $('#categoryImport').on('submit', function(event) {
                event.preventDefault();
                $.ajax({
                    url: baseUrl + "VAjax/importCategory",
                    method: "POST",
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    dataType: 'json',
                    success: function(data) {
                        console.log(data)

                    },
                    failure: function() {
                        alert('fff');
                    }
                })
            });
        });
    </script>
</body>

</html>