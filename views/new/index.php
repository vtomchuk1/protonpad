<?php

/* @var $data app\models\Card */

?>

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Starter Page</h4>
                    </div>
                </div>
                <div class="col-12">
                    <div class="button-items">

                        <!--
                        <button type="button" class="btn btn-primary waves-effect waves-light">Primary</button>
                        -->
                        <a href="/site/index" class="btn btn-primary waves-effect waves-light" role="button">Link Button</a>
                    </div>
                </div>
                <!--
                <div class="col-12">

                </div>-->
            </div>
            <br>
            <div class="row">

                    <?php

                    foreach ($data as $val){
echo <<<END
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-header">
                            {$val['category']}
                        </div>
                        <div class="card-body">
                            <blockquote class="card-blockquote mb-0">
                                {$val['content']}
                                <a href="/new/card?id={$val['id']}" class="btn btn-primary">Go somewhere</a>
                            </blockquote>
                        </div>
                    </div>
                </div>
END;

                    }

                    ?>

            </div>
            <br>
            <div class="row">
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-header">
                            Test card
                        </div>
                        <div class="card-body">
                            <blockquote class="card-blockquote mb-0">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                    erat a ante.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                    erat a ante.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                    erat a ante.</p>

                                <!--
                                <footer class="blockquote-footer mt-3 font-size-12">
                                    Someone famous in <cite title="Source Title">Source Title</cite>
                                </footer>
                                -->
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->


        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>document.write(new Date().getFullYear())</script> © Upzet.
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end d-none d-sm-block">
                        Crafted with <i class="mdi mdi-heart text-danger"></i> by Ivan
                    </div>
                </div>
            </div>
        </div>
    </footer>

</div>
<!-- end main content-->
