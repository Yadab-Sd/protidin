<?php
    include('DBclass.php');

    if (isset($_REQUEST['client_id'])) {
        $id = $_REQUEST['client_id'];
        $result = $db->DBtview('clients', $id ? "id=$id":1);
        if ($result) {
            while ($arr = $result->fetch_assoc()) {
                $due = $arr['due'];
            }
            echo $due;
        } else {
            exit('Query failed!');
        }
    } else {
        exit('Client id not found.');
    }
?>
