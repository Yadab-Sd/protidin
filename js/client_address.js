$(function(){
   $('tr.client_address').hide();
   $('select.invoice_client_name').change(function(){
      var client_id_dfkjdf=$('select.invoice_client_name').val();
      $('td.client_address_load').load('include/client_address.php?client_id='+client_id_dfkjdf+'');
      $('tr.client_address').show();
   }); 
   
    $('input.user_checkout').keyup(function(){
      var user_checkout=$('input.user_checkout').val();
      $('.user_name_js').load('include/user_fullname.php?username='+user_checkout+'');
   }); 
   
   $('input.user_checkout').click(function(){
      var user_checkout=$('input.user_checkout').val();
      $('.user_name_js').load('include/user_fullname.php?username='+user_checkout+'');
   }); 
   
});