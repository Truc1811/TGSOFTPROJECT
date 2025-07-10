 <!-- them data-id vao icon add cart sử dụng cho sanpham va sanphamlist- nhớ require -->


<script type="text/javascript">
    $(document).ready(function(){
      $('.addcart').click(function(){
          var so=1;
          var id=$(this).data('id');
            $.post(
              'cart/addcart', // URL 
              {'so':so, 'id':id},  // Data
              function(addcard){ // Success
                 $('#cart').html(addcard);
                   $.post(
                      'cart/cngiohangtreo', // URL 
                      {'so':so, 'id':id},  // Data
                      function(giohangtreo){ // Success
                         $('.giohang_treo').html(giohangtreo);
                      }, 
                      'text' // dataTyppe
                    );
              }, 
              'text' // dataTyppe
              );
      });
      
    });

</script>


