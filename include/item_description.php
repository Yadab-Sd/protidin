<?php
    include('DBclass.php');

    if (!empty($_REQUEST['item_id'])) {
        $id = $_REQUEST['item_id'];
        $result = $db->DBtview('products', "id=$id");
        if ($result) {
            $arr = $result->fetch_assoc();
            echo "<tr 
            style='font-size: 16px; text-align: center; background-color: #eee; height: 50px;'
             class='row product_id_invoice_row' id='".$arr['id']."'>
                    <input type='hidden' class='item_line_id' value='".$arr['id']."' />
                    <td> ".$arr['name']."</td>
                    <td> ".$arr['description']."</td>
                    <td class='item_line_one_stock'> ".$arr['stock']."</td>
                    <td> ".$arr['unit']." </td>
                    <td>
                        <input 
                            type='number' 
                            name='quantity' 
                            class='item_line_one_quantity'
                            value='1'
                            min='1'
                            max='".$arr['stock']."'
                            style='width: 80px'
                        />
                    </td>
                    <td class='item_line_one_price'> ".$arr['price']."</td>
                    <td> <b class='lineTotalPrice'>".$arr['price']."</b></td>
                    <td> <b style='cursor: pointer;' class='each-item-delete lineRemove'>Remove</a></b>
                </tr>
                <script>
                    // function totalCal(e) {
                    //     console.log('===', e.value, $('.item-unit-price'+ e.id).text);
                    //     $('.total-item-price'+e.id).text
                    //     = e.value * ($('.item-unit-price'+ e.id).text*1);
                    // }              
                    // function deleteItemRow(e) {
                    //     var node = document.querySelector('#'+e.title);
                    //     node.parentNode.removeChild(node);
                    //     return false;
                    // }
                    
                </script>
                ";
        } else {
            exit('Query failed!');
        }
    } else {
        exit('Client id not found.');
    }
?>
