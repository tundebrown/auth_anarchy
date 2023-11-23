<?php
include "./MyFrameworks/header.php";
include "./MyFrameworks/sidebar.php";

if (isset($_POST["addurl"])) {
    include_once 'MyFrameworks/DBQuery.php';
    DBQuery::IUD("update redirect set url = '".$_POST['url']."' where id=1");
}
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
                <h2>NEW REDIRECT URL ENTRY</h2>

                <div>
                <form method="POST">

                        <div class="row">
                            <div class="col-9">
                                <input name="url" type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter URL (e.g: sitename.com)" required>
                            </div>

                            <div class="col-3">
                                <button type="submit" name="addurl" class="btn btn-outline-dark w-100">Submit</button>
                            </div>

                        </div>


                </form>

                    <h2 class="mt-5">VIEW URL</h2>
                    <table class="table" style="font-size: 0.9em;">
                        <thead>
                            <td>ID.</td>
                            <td>URL</td>
                        </thead>
                        <tbody>
                            <?php
                            include_once './MyFrameworks/DBConnection.php';
                           $command = mysqli_query(DBConnection::getdbconnection(), 'select * from redirect');
                           if ($command->num_rows > 0) // Counting Row kapag may laman
                           {
                               while ($row = $command->fetch_assoc()) {
                                echo '<tr>
                                <th>'. $row["id"] .'</th>
                                <th>'. $row["url"] .'</th>
                                </tr>';
                               }
                           }
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