<?php
    include('DBclass.php');

    if (!empty($_REQUEST['item_id'])) {
        $id = $_REQUEST['item_id'];
        $result = $db->DBtview('products', "id=$id");
        if ($result) {
            $arr = $result->fetch_assoc();
            echo "<tr style='font-size: 16px; text-align: center; background-color: #eee; height: 50px;' class='row'>
                    <td> ".$arr['id']."</td>
                    <td> ".$arr['description']."</td>
                    <td> ".$arr['stock']."</td>
                    <td class='item-unit-price'> ".$arr['price']."</td>
                    <td>
                        <input 
                            type='number' 
                            name='quantity' 
                            class='item-quantity-increase' 
                            value='1' 
                            min='1'
                            length='3'
                        />
                    </td>
                    <td> 1 </td>
                    <td> <b class='total-item-price'>".$arr['price']."</b></td>
                    <td> <button class='each-item-delete'>Remove</button></td>
                </tr>
                <script>
                    const inputQnt = document.querySelector('.item-quantity-increase');

                    inputQnt.addEventListener('change', (e) => {
                        document.querySelector('.total-item-price').innerHTML
                        = e.target.value * document.querySelector('.item-unit-price').innerText
                    });                
                </script>
                ";
        } else {
            exit('Query failed!');
        }
    } else {
        exit('Client id not found.');
    }
?>
