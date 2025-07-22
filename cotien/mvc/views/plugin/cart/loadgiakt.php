
<?php 
if(count($ob)>0){
  if (($ob[0]->discount)==0) {
    echo '<div class="py-2 text-danger">'.(number_format($ob[0]->price)).'đ'.'</div>';
  } else {
    echo '<div class="py-2 text-danger fs-4 "><span class="text-decoration-line-through">'.(number_format($ob[0]->price)).'đ'.'</span>';
    echo ' - ';
    echo (number_format($ob[0]->discount)).'đ'.'</div>';
  }
}
?>



<?php 
    // hướng dẫn sử dụng
    // require "mvc/views/plugin/popup/loading.php" ngay trong ô load ajax về giá
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
      $('.laydoday').click(function(){
        $('.laydoday').removeClass('danhdaua');
        $(this).addClass('danhdaua');
        // $('.loading').stop().fadeIn(300,function(){
        //   $('.loading').fadeOut();
        // });
        var doday=$('.danhdaua').data('id');
        var sp=$('.danhdaua').data('sp');
        var kichthuoc=$('.danhdaub').data('id');
        $.post(
              'cart/loadgiakt', // URL 
              {'doday':doday, 'kichthuoc':kichthuoc, 'sp':sp},  // Data
              function(loadgiakt){ // Success
                  $('.loadgiakt').html(loadgiakt);
              }, 
              'text' // dataTyppe
        );
       
      });

      $('.laykichthuoc').click(function(){
        $('.laykichthuoc').removeClass('danhdaub');
        $(this).addClass('danhdaub');
        // $('.loading').stop().fadeIn(300,function(){
        //   $('.loading').fadeOut();
        // });
        var kichthuoc=$('.danhdaub').data('id');
        var sp=$('.danhdaub').data('sp');
        var doday=$('.danhdaua').data('id');
        $.post(
              'cart/loadgiakt', // URL 
              {'doday':doday, 'kichthuoc':kichthuoc, 'sp':sp},  // Data
              function(loadgiakta){ // Success
                  $('.loadgiakt').html(loadgiakta);
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
