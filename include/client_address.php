<?php
    include('DBclass.php');

    if (isset($_REQUEST['client_id'])) {
        $id = $_REQUEST['client_id'];
        $result = $db->DBtview('clients', $id ? "id=$id":1);
        if ($result) {
            while ($arr = $result->fetch_assoc()) {
                $addr = $arr['address'];
                $name = $arr['fname'];
                $mobile = $arr['mobile'];
                $due = $arr['due'];
            }
            echo "<table border='0' width='100%'>
                <tr>
                    <th>Name</th>
                    <td> ".$name."</td>
                </tr>
                <tr>
                    <th>Mobile</th>
                    <td> ".$mobile."</td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td> ".$addr."</td>
                </tr>
                <tr>
                    <th>Due</th>
                    <td> ".$due."</td>
                </tr>
            </table>";
        } else {
            exit('Query failed!');
        }
    } else {
        exit('Client id not found.');
    }
?>
