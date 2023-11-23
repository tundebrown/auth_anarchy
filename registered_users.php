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
                <h2>NEW ENTRY</h2>

                <div>
                    <?php
                    include_once 'CRUD_Insert.php';
                    ?>

                    <h2 class="mt-5">REGISTERED USERS</h2>
                    <table class="table" style="font-size: 0.9em;">
                        <thead>
                            <td>No.</td>
                            <td>Email</td>
                            <td>Twitter</td>
                            <td>Discord</td>
                            <td>Wallet</td>
                            <td>Action</td>
                        </thead>
                        <tbody>
                            <?php
                            include_once 'MyFrameworks/DBQuery.php';
                            DBQuery::SetDiv("SELECT * FROM user order by id  desc", 'user_table_update.php');
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