<?php

    include('DBclass.php');

    $records = $db->DBtview('clients');
    if ($records) {

?>
    <select required="" style="margin-top: 4px;" data-placeholder="Please Type Customer Name" name="client_id" class="invoice_client_name form-control " tabindex="2">
<?php

        while ($arr = $records->fetch_assoc()) {
            $addition = $arr['id'] == count($arr) ? 'selected':'';
            echo "<option style='color: black; font-size: 16px;' value=" . $arr['id'] . " $addition>
                        " . $arr['fname'] . "(" . $arr['mobile'] . ")" . "
                    </option>";
        }
    } else {
        exit('No data found');
    }

?>
    </select>