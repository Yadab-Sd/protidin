<?php
include('DBclass.php');

if (isset($_REQUEST['fname']) && isset($_REQUEST['mobile'])) {
    $keys = "`fname`, `mobile`";
    $values = "'".$_REQUEST['fname']."', '".$_REQUEST['mobile']."'";
    $result = $db->DBtrinsert('clients', $keys, $values);
    if ($result) {
        $records = $db->DBtview('clients');
        if ($records) {
            while ($arr = $records->fetch_assoc()) {
                echo "<option style='color: black; font-size: 16px;' value=". $arr['id']." ". $arr['id'] == count($arr) ? 'selected':'' .">
                    ".$arr['fname']." (".$arr['mobile'].")"."
                </option>";
            }
        } else {
            exit('No data found');
        }
    } else {
        exit('Insertion fail!');
    }
} else {
    exit('Name and Phone must be filled');
}
