<?php
include "./MyFrameworks/header.php";
include "./MyFrameworks/sidebar.php";
?>

<!-- Page Content -->
<div id="page-content-wrapper" style="width: 100%;">
    <button type="button" class="hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
        <span class="hamb-top"></span>
        <span class="hamb-middle"></span>
        <span class="hamb-bottom"></span>
    </button>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div>

                    <h2 class="mt-5">CONTACT DETAILS</h2>
                    <table class="table" style="font-size: 0.9em;">
                        <thead>
                            <td>No.</td>
                            <td>First Name</td>
                            <td>Last Name</td>
                            <td>Email</td>
                            <td>Mobile Number</td>
                            <td>Message</td>
                            <td>DateTime</td>
                            <td>Action</td>
                        </thead>
                        <tbody>
                            <?php
                            include_once 'MyFrameworks/DBQuery.php';
                            DBQuery::SetDiv("SELECT * FROM talent_network order by id  desc", 'talent_table.php');
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /#page-content-wrapper -->

<?php
include "./MyFrameworks/footer.php";
?>