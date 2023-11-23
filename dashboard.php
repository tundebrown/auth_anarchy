<?php
include "./MyFrameworks/header.php";
include "./MyFrameworks/sidebar.php";
?>

<!-- Page Content -->
<div id="page-content-wrapper">
    <button type="button" class="hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
        <span class="hamb-top"></span>
        <span class="hamb-middle"></span>
        <span class="hamb-bottom"></span>
    </button>
    <div class="container">
        <div class="container bootstrap snippet">
            <div class="row gx-5 py-5">
                <div class="col">
                    <div class="p-3 border bg-light">
                        <h1>DASHBOARD</h1>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-sm-6">
                    <div class="circle-tile ">
                        <a href="#">
                            <div class="circle-tile-heading dark-blue"><i class="fa fa-users fa-fw fa-3x"></i></div>
                        </a>
                        <div class="circle-tile-content dark-blue">
                            <div class="circle-tile-description text-faded">Total Registered Users for Free Mints and Mystery Drops</div>

                            <div class="circle-tile-number text-faded ">
                                <?php
                                include_once 'MyFrameworks/DBQuery.php';
                                echo (DBQuery::TotalUsers());
                                ?>
                            </div>
                            <a class="circle-tile-footer" href="registered_users.php">More Info<i class="fa fa-chevron-circle-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- <div class="col-lg-6 col-sm-6">
                    <div class="circle-tile ">
                        <a href="#">
                            <div class="circle-tile-heading red"><i class="fa fa-users fa-fw fa-3x"></i></div>
                        </a>
                        <div class="circle-tile-content red">
                            <div class="circle-tile-description text-faded"> Admin </div>
                            <div class="circle-tile-number text-faded ">
                                <?php
                                include_once 'MyFrameworks/DBQuery.php';
                                echo (DBQuery::TotalAdmin());
                                ?>
                            </div>
                            <a class="circle-tile-footer" href="CRUD.php">More Info<i class="fa fa-chevron-circle-right"></i></a>
                        </div>
                    </div>
                </div> -->

                <div class="col-lg-6 col-sm-6">
                    <div class="circle-tile ">
                        <a href="#">
                            <div class="circle-tile-heading red"><i class="fa fa-message fa-fw fa-3x"></i></div>
                        </a>
                        <div class="circle-tile-content red">
                            <div class="circle-tile-description text-faded"> Contact Form Messages </div>
                            <div class="circle-tile-number text-faded ">
                                <?php
                                include_once 'MyFrameworks/DBQuery.php';
                                echo (DBQuery::TotalCareer());
                                ?>
                            </div>
                            <a class="circle-tile-footer" href="contact_list.php">More Info<i class="fa fa-chevron-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /#page-content-wrapper -->

<?php
include "./MyFrameworks/footer.php";
?>