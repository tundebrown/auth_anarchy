<div class="modal-backdrop modal animate-fading" style="background-color: rgba(0,0,0,.7)" id="background"></div>
<div class="modal " id="Delete_talent_table">
    <div class="modal-dialog carousel-fade animate-top modal-dialog-scrollable ">
        <div class=" modal-content">
            <div class="modal-header"> <a class="navbar-brand"><b>Delete details</b></a></div>
            <div class="modal-body">
                <div class=" nav-link">Are you sure?</div>
            </div>
            <div class="modal-footer">
                <input id="delete_talent_IDNum" name="delete_talent_IDNum" style="display:none">
                <button onclick="hideModal('Delete_talent_table')" class="btn btn-danger w-25">Cancel</button>
                <button name="deletebtn" onclick="Delete_talent_table()" class="btn btn-success w-25">Yes</button>
            </div>
        </div>
    </div>
</div>
<script>
    function Delete_talent_table() {
        var delete_talent_IDNum = document.getElementById("delete_talent_IDNum").value;
        window.location.href = '?talent_IDNum=' + delete_talent_IDNum;
    }
</script>
<?php
if (isset($_GET["talent_IDNum"])) {
    include_once 'MyFrameworks/DBQuery.php';
    DBQuery::IUD("Delete from talent_network where id = '" . $_GET["talent_IDNum"] . "'");
    echo '<script>window.location.href="talent_network.php";</script>';
}
?>