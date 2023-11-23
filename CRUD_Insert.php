<form method="POST">
    <form>
        <div class="row">
            <div class="col">
                <input name="emailtbx" type="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email" required>
            </div>
            <div class="col">
                <input name="twittertbx" type="text" class="form-control" placeholder="Enter Twitter ID" required>
            </div>
            <div class="col">
                <input name="discordtbx" type="text" class="form-control" placeholder="Enter Discord ID" required>
            </div>
            <div class="col">
                <input name="wallettbx" type="text" class="form-control" placeholder="Enter Wallet ID" required>
            </div>
            <div class="col">
                <button type="submit" name="addbtn" class="btn btn-outline-dark w-100">Submit</button>
            </div>

        </div>
    </form>

</form>
<?php
if (isset($_POST["addbtn"])) {
    include_once 'MyFrameworks/DBQuery.php';
    DBQuery::IUD("Insert INTO user (email,twitter,discord,wallet) VALUES ('" . $_POST["emailtbx"] . "','" . $_POST["twittertbx"] . "','" . $_POST["discordtbx"] . "','" . $_POST["wallettbx"] . "') ");
}
?>