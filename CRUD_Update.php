<?php

?>
<div class="modal-backdrop modal animate-fading" style="background-color: rgba(0,0,0,.7)" id="background"></div>
<div class="modal " id="Update_user_table">
    <div class="modal-dialog carousel-fade animate-top modal-dialog-scrollable ">
        <div class=" modal-content">
            <form method="POST">
                <div class="modal-header"> <a class="navbar-brand"><b>Update Entry</b></a></div>
                <div class="modal-body">
                    <input id="update_id" name="update_id" style="display:none">
                    <div>Email</div>
                    <div><input class="form-control" id="update_emailtbx" name="update_emailtbx" required></div>
                    <div>Twitter</div>
                    <div><input class="form-control" id="update_twittertbx" name="update_twittertbx" required></div>
                    <div>Discord</div>
                    <div><input class="form-control" id="update_discordtbx" name="update_discordtbx" required></div>
                    <div>Wallet</div>
                    <div><input class="form-control" id="update_wallettbx" name="update_wallettbx" required></div>
                </div>
                <div class="modal-footer">
                    <button onclick="hideModal('Update_user_table')" class="btn btn-danger w-25">Cancel</button>
                    <button name="updatebtn" class="btn btn-success w-25">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>

</script>
<?php
if (isset($_POST["updatebtn"])) {
    DBQuery::IUD("Update user SET email = '" . $_POST["update_emailtbx"] . "',  twitter ='" . $_POST["update_twittertbx"] . "', discord ='" . $_POST["update_discordtbx"] ."' , wallet ='" . $_POST["update_wallettbx"] . "'   WHERE id ='" . $_POST["update_id"] . "'");
    echo '<script>window.location.href="";</script>';
}
?>