<tr>
    <th><?php echo $row["id"] ?></th>
    <th><?php echo $row["email"] ?></th>
    <th><?php echo $row["twitter"] ?></th>
    <th><?php echo $row["discord"] ?></th>
    <th><?php echo $row["wallet"] ?></th>
    <th>
        <button class="btn btn-primary btn-sm" onclick="user_table_Update('<?php echo $row['id'] ?>','<?php echo $row['email'] ?>','<?php echo $row['twitter'] ?>','<?php echo $row['discord'] ?>','<?php echo $row['wallet'] ?>','Update_user_table')"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
        </button>
        <button class="btn btn-danger btn-sm" onclick="Gridview_bank_table_Delete('<?php echo $row['id'] ?>','Delete_bank_table')"><i class="fa fa-trash" aria-hidden="true"></i>
        </button>
    </th>
</tr>

<script>
    function user_table_Update(id, email, twitter, discord, wallet, IDModal) {
        document.getElementById('update_id').value = id;
        document.getElementById('update_emailtbx').value = email;
        document.getElementById('update_twittertbx').value = twitter;
        document.getElementById('update_discordtbx').value = discord;
        document.getElementById('update_wallettbx').value = wallet;
        showModal(IDModal);

    }

    function Gridview_bank_table_Delete(IDNum, IDModal) {
        document.getElementById('delete_IDNum').value = IDNum;
        showModal(IDModal);

    }
</script>