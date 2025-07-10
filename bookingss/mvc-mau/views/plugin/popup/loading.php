<?php 
    // hướng dẫn sử dụng
    // require "mvc/views/plugin/popup/loading.php"
    // chèn ajax xử lý trả về true để hiện load. Loading sẽ tự mất trong 3000ms
    // $.post(
    //           'cart/laygia', // URL 
    //           {'id':id},  // Data
    //           function(xettang){ // Success
    //              if(xettang.search('true') != -1){
    //                 $('.loading').fadeIn();
    //                 setTimeout(function(){
    //                     $('.loading').fadeOut();
    //                 }, 3000);
    //              }
    //           }, 
    //           'text' // dataTyppe
    // );
?>
<script>
$(document).ready(function(){
      var kichthuoc;
      var doday;
      $('.laydoday').click(function(){
        $('.laydoday').removeClass('danhdau');
        $(this).addClass('danhdau');
        var id=$(this).data('id');
        doday=id;
        // $('.loading').stop().fadeIn(500,function(){
        //       $('.loading').fadeOut();
        // });
        var sp="<?php echo $id_sp; ?>";
        $.post(
              'cart/laygia', // URL 
              {'laydoday':id},  // Data
              function(xettang){ // Success
                
                if(xettang.search('true') != -1){
                    
                    
                    $.post(
                          'cart/loadgiakt', // URL 
                          {'doday':doday, 'kichthuoc':kichthuoc, 'sp':sp},  // Data
                          function(loadgiakt){ // Success
                              $('.loadgiakt').html(loadgiakt);
                          }, 
                          'text' // dataTyppe
                    );
                }
              }, 
              'text' // dataTyppe
        );
      });

      $('.laykichthuoc').click(function(){
        $('.laykichthuoc').removeClass('danhdau');
        $(this).addClass('danhdau');
        var id=$(this).data('id');
        kichthuoc=id;
        // $('.loading').stop().fadeIn(500,function(){
        //     $('.loading').fadeOut();
        // });
        var sp="<?php echo $id_sp; ?>";
        $.post(
              'cart/laygia', // URL 
              {'laykichthuoc':id},  // Data
              function(xettanga){ // Success
                if(xettanga.search('true') != -1){
                   
                    
                    $.post(
                          'cart/loadgiakt', // URL 
                          {'doday':doday, 'kichthuoc':kichthuoc, 'sp':sp},  // Data
                          function(loadgiakt){ // Success
                              $('.loadgiakt').html(kichthuoc);
                          }, 
                          'text' // dataTyppe
                    );
                }
              }, 
              'text' // dataTyppe
        );
      });

});
</script>
<style type="text/css">
  .loading{
    position: fixed;
    top: 0px;
    left: 0px;
    width: 100%;
    height: 100vh;
    background-color: rgba(0, 0, 0, 0.9);
    z-index: 999;
    display: none;
  }

</style>


<div class="loading container-fluid">
  <div class="row d-flex flex-wrap align-content-center justify-content-center h-100">
    <div class="col-12 d-flex justify-content-center align-items-center text-white">
        <i class="fa-solid fa-spinner fa-spin-pulse fs-1"></i>
    </div>
  </div>  
</div>



