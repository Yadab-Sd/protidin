$('#search_text').keyup(function(){  
   var txt = $(this).val();  
   if(txt != '')  
   {  
        $.ajax({  
             url:"fetch.php",  
             method:"post",  
             data:{search:txt},  
             dataType:"text",  
             success:function(data)  
             {  
                  $('#result').html(data);  
             }  
        });  
   }  
   else  
   {  
        $('#result').html('');                 
   }  
});  
 
$('tr.client_address').hide();
    $('select.invoice_client_name').on('change',function(){
    var client_id_dfkjdf=$('select.invoice_client_name').val();
      
      $.post('include/client_address.php',{client_id:client_id_dfkjdf}).always(function(data){
        $('td.client_address_load').html(data);
        $('tr.client_address').show();
        $.post('include/client_due.php',{client_id:client_id_dfkjdf}).always(function(data){ 
            $('.previus_due_total').html(data); 
            $.get('include/client_max_due.php',{id:client_id_dfkjdf}).always(function(max_due){
                 $('.max_due_allowed').val(max_due);
            });
            });
      });
      
   });
   
   
                
invoice_form_each_func(); 
$('select.item_name_dropdownone').on('change',function(){ item_change_func_new_invoice(); });
   
   
   
$('.submitNewInvoice').on('click',function(){
    var fname = encodeURIComponent( $('.client_fname').val() );
    var mobile = encodeURIComponent( $('.client_mobile').val() );
    $('.new_client_load_here').load('include/add_new_client_invoice_ajax.php?fname='+fname+'&mobile='+mobile,function(){
            $('.modal_close').click();
            $('.client_name_dropdown').load('include/client_name_dropdown.php?fname='+fname+'&mobile='+mobile,function(){
            
            var client_id_dfkjdf=$('select.invoice_client_name').val();
              $('td.client_address_load').load('include/client_address.php?client_id='+client_id_dfkjdf+'',function(){
                $('tr.client_address').show();
              });
              
            $('select.invoice_client_name').on('change',function(){
            var client_id_dfkjdf=$('select.invoice_client_name').val();
              $('td.client_address_load').load('include/client_address.php?client_id='+client_id_dfkjdf+'',function(){
                $('tr.client_address').show();
              });
           });
       });
  });
});
function invoice_calculate_func(price_index,invoice_form){
                    
    var item_line_one_price = parseFloat( $('.item_line_one_price').eq(price_index).val() );
    if(isNaN(item_line_one_price)){ item_line_one_price = 0; }
    var item_line_one_quantity = parseFloat( $('.item_line_one_quantity').eq(price_index).val() );
    if(isNaN(item_line_one_quantity)){ item_line_one_quantity = 0; }
    var line_total = item_line_one_price*item_line_one_quantity;
    $('.lineTotalPrice').eq(price_index).text(line_total);
    var grand_line_total = 0;
    invoice_form.find('.lineTotalPrice').each(function(line_each){
        var lineTotalPrice = parseFloat( $(this).text() );
        if(isNaN(lineTotalPrice)){ lineTotalPrice=0;  }
        grand_line_total = grand_line_total + lineTotalPrice;
    });
    invoice_form.find('.grand_line_total').text(grand_line_total);
    
    
    
    //transport 
                    
    var invoice_transport = parseFloat( invoice_form.find('.invoice_transport').val() );
    if(isNaN( invoice_transport )){
        invoice_transport = 0;
    }
    if(grand_line_total>=invoice_transport){
        var grand_line_total = grand_line_total+invoice_transport;
        invoice_form.find('.invoice_transport_s').html(invoice_transport);
    }
    
                    
    var invoiceDiscount = parseFloat( invoice_form.find('.invoice_discount').val() );
    if(isNaN( invoiceDiscount )){
        invoiceDiscount = 0;
    }
    if(grand_line_total>=invoiceDiscount){
        var grand_line_total = grand_line_total-invoiceDiscount;
        invoice_form.find('.invoice_discount_s').html(invoiceDiscount);
        
    }
    invoice_form.find('.invoice_bill').text(grand_line_total);
    
    var previus_due_total = parseFloat( invoice_form.find('.previus_due_total').text() );
    if(isNaN(previus_due_total)){ previus_due_total=0; }
    grand_line_total = grand_line_total+previus_due_total;
    
    invoice_form.find('.invoice_subtotal').text(grand_line_total);
    invoice_form.find('.invoice_grandtotal').val(grand_line_total);
    invoice_form.find('.invoice_due_total').html(grand_line_total);
    
    var invoice_payment = parseFloat( invoice_form.find('.invoice_payment').val() );
    if(isNaN( invoice_payment )){
        invoice_payment = 0;
    }
    var invoice_due_total = grand_line_total-invoice_payment;
    
    invoice_form.find('.invoice_payment_total').html(invoice_payment);
    invoice_form.find('.invoice_due_total').html(invoice_due_total);
    invoice_form.find('.invoice_due_total_input').val(invoice_due_total);
    
    
}

function invoice_form_each_func(){
    $('.lineRemove').each(function(i){
        $(this).click(function(){
           $(this).parent().remove(); 
           if(i==0){
            $('.invoice_subtotal').text('0'); 
           }
        });
    }); //end remove line .. 
    $('#new_invoice_form_f').each(function(){
       var invoice_form = $(this);
       invoice_form.find('.item_line_one_price').each(function(price_index){
            var this_item_line_one_price = $(this);
            this_item_line_one_price.on('keyup change',function(){
                invoice_calculate_func(price_index,invoice_form);
            });
            invoice_calculate_func(price_index,invoice_form); // call invoice total calculation without user action .. 
       });
       invoice_form.find('.item_line_one_quantity').each(function(price_index){
            var this_item_line_one_price = $(this);
            this_item_line_one_price.on('keyup change',function(){
                invoice_calculate_func(price_index,invoice_form);
            });
       });
       invoice_form.find('.invoice_discount').each(function(price_index){
            var this_item_line_one_price = $(this);
            this_item_line_one_price.on('keyup change',function(){
                invoice_calculate_func(price_index,invoice_form);
            });
       });
       invoice_form.find('.invoice_transport').each(function(price_index){
            var this_item_line_one_price = $(this);
            this_item_line_one_price.on('keyup change',function(){
                invoice_calculate_func(price_index,invoice_form);
            });
       });
       invoice_form.find('.invoice_payment').each(function(price_index){
            var this_item_line_one_price = $(this);
            this_item_line_one_price.on('keyup change',function(){
                invoice_calculate_func(price_index,invoice_form);
            });
       });
    });
}

function item_change_func_new_invoice(){
    var item_name_dropdownone_val=$('select.item_name_dropdownone').val();
    var content;
    
    var product_exists = false;
        var jei_product_index_er_quantity_update_hobe;
        //before append we need to find out is there same product already exists ... 
        $('#new_invoice_form_f').find('.product_id_invoice_row').each(function(product_id_index){
            var product_id =  parseInt( $(this).val() );
            if(product_id==item_name_dropdownone_val){
                product_exists = true;   
                jei_product_index_er_quantity_update_hobe = product_id_index;
                return false;
            }else{
                product_exists = false; 
            }
        });
        if(product_exists){
            var product_current_quantity = parseInt(  $('.item_line_one_more_fields').find('.item_line_one_quantity').eq(jei_product_index_er_quantity_update_hobe).val() );
            product_current_quantity++;
            $('.item_line_one_more_fields').find('.item_line_one_quantity').eq(jei_product_index_er_quantity_update_hobe).val(product_current_quantity);
            var invoice_form = $('#new_invoice_form_f');
            invoice_calculate_func(jei_product_index_er_quantity_update_hobe,invoice_form);
        }else{
            $.get('include/item_description.php?class_id=one&item_id='+item_name_dropdownone_val+'', function(data){
                content= data;
                $('.item_line_one_more_fields').append(content);
                invoice_form_each_func();
            });
        }      
}