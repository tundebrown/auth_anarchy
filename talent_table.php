<tr>
    <th><?php echo $row["id"] ?></th>
    <th><?php echo $row["cname"] ?></th>
    <th><?php echo $row["cexp"] ?></th>
    <th><?php echo $row["cemail"] ?></th>
    <th><?php echo $row["mobile_code"] ?></th>
    <th><?php echo $row["cskill"] ?></th>
    <th><?php echo $row["ctimestamp"] ?></th>
    <th>
        <button class="btn btn-danger btn-sm" onclick="Gridview_talent_table_Delete('<?php echo $row['id'] ?>','Delete_talent_table')"><i class="fa fa-trash" aria-hidden="true"></i>
        </button>
    </th>
</tr>

<script>
    function Gridview_talent_table_Delete(IDNum, IDModal) {
        document.getElementById('delete_talent_IDNum').value = IDNum;
        showModal(IDModal);

    }
</script>