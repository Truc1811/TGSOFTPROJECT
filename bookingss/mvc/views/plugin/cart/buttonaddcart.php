
<style type="text/css">
  .input-so{
    width: 3vw;
    box-shadow: unset;
  }
  .buttons_added {
    opacity:1;
    display:inline-block;
    display:-ms-inline-flexbox;
    display:inline-flex;
    white-space:nowrap;
    vertical-align:top;
}
  .is-form {
      overflow:hidden;
      position:relative;
      background-color:#f9f9f9;
      height:2.2rem;
      width:1.9rem;
      padding:0;
      text-shadow:1px 1px 1px #fff;
      border:1px solid #ddd;
  }
  .is-form:focus,.input-text:focus {
      outline:none;
  }
  .is-form.minus {
      border-radius:4px 0 0 4px;
  }
  .is-form.plus {
      border-radius:0 4px 4px 0;
  }
  .input-qty {
      background-color:#fff;
      height:2.2rem;
      text-align:center;
      font-size:1rem;
      display:inline-block;
      vertical-align:top;
      margin:0;
      border-top:1px solid #ddd;
      border-bottom:1px solid #ddd;
      border-left:0;
      border-right:0;
      padding:0;
  }
  .input-qty::-webkit-outer-spin-button,.input-qty::-webkit-inner-spin-button {
      -webkit-appearance:none;
      margin:0;
  }
  .btn-addcart{
    color: #E8F9FD;
    box-shadow: none;
    background-color: var(--maucam);
    padding: 0.6vw 2.3vw;
  }
  
  .btn-buy{
    color: var(--maucam);
    background-color: #FFF;
    box-shadow: none;
    border-radius: 0.3vw;
    border: 1px solid var(--maucam);
    padding: 0.6vw 2.3vw;
  }
  .danhdaua{
    background-color: rgb(39, 172, 179);
    color: white;
  }
  .danhdaub{
    background-color: rgb(39, 172, 179);
    color: white;
  }
  @media (min-width: 768px){
    .btn-addcart{
      color: #E8F9FD;
      box-shadow: none;
      background-color: var(--maucam);
      padding: 0.6vw 1vw;
    }
    
    .btn-buy{
      color: var(--maucam);
      background-color: #FFF;
      box-shadow: none;
      border-radius: 0.3vw;
      border: 1px solid var(--maucam);
      padding: 0.6vw 1vw;
    }
  }
  @media (min-width: 1400px){
    .btn-addcart{
      color: #E8F9FD;
      box-shadow: none;
      background-color: var(--maucam);
      padding: 0.6vw 1.5vw;
    }
    
    .btn-buy{
      color: var(--maucam);
      background-color: #FFF;
      box-shadow: none;
      border-radius: 0.3vw;
      border: 1px solid var(--maucam);
      padding: 0.6vw 1.5vw;
    }
  }

</style>

<script type="text/javascript">
  $(document).ready(function(){
      $('#addcart').click(function(){
          var so=$('#so').val();
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
      $('#buy').click(function(){
          var so=$('#so').val();
          var id=$(this).data('id');
            $.post(
              'cart/addcart', // URL 
              {'so':so, 'id':id},  // Data
              function(addcard){ // Success
                 $('#cart').html(addcard);
                 window.location.href='cart/viewcart';
              }, 
              'text' // dataTyppe
              );
      });


     $('input.input-qty').each(function() {
        var $this = $(this),
          qty = $this.parent().find('.is-form'),
          min = Number($this.attr('min')),
          max = Number($this.attr('max'))
        if (min == 0) {
          var d = 0
        } else d = min
        $(qty).on('click', function() {
          if ($(this).hasClass('minus')) {
            if (d > min) d += -1
          } else if ($(this).hasClass('plus')) {
            var x = Number($this.val()) + 1
            if (x <= max) d += 1
          }
          $this.attr('value', d).val(d)
        })
      })

      

      
  });

</script>


<div class="d-flex flex-wrap">

          <!-- do day nem -->
          <?php  
            if(@$data['doday']){
          ?>
                <div class="col-12 d-flex py-2">
                    <div class="py-1 fw-bold">
                        Độ dày : 
                    </div>
                    <?php 
                      $doday=json_decode($data['doday']);
                      foreach ($doday as $key => $value) {
                    ?>
                      <div class="px-2 py-1 ms-2 border rounded-3 laydoday" style="cursor:pointer;" 
                        data-id="<?php  echo $value[0]; ?>"
                        data-sp="<?php  echo $id_sp; ?>"
                      >
                          <?php echo $value[1]; ?>
                      </div>
                    <?php 
                      }
                    ?>
                </div>
            <?php  
              }
            ?>

            <!-- kich tuoc nem  -->
          <?php  
            if(@$data['kichthuoc']){
          ?>
                <div class="col-12 d-flex py-2">
                    <div class="py-1 fw-bold">
                        Kích thước :
                    </div>
                    <?php 
                      $kichthuoc=json_decode($data['kichthuoc']);
                      foreach ($kichthuoc as $key => $value) {
                    ?>
                      <div class="px-2 py-1 ms-2 border rounded-3 laykichthuoc" style="cursor:pointer;" 
                        data-id="<?php echo $value[0]; ?>"
                        data-sp="<?php  echo $id_sp; ?>"
                      >
                          <?php echo $value[1]; ?>
                      </div>
                    <?php 
                      }
                    ?>
                </div>
            <?php  
              }
            ?>
            <div class="col-12 col-md-4">
                <div class="buttons_added">
                  <input class="minus is-form" type="button" value="-">
                    <input aria-label="quantity" class="input-qty" max="10" min="1" name="" type="number" value="1" id="so">
                  <input class="plus is-form" type="button" value="+">
                </div>
            </div>
            <div class="col-12 my-3 d-flex justify-content-between">
              <div class="col-6 p-1">
                <div id="addcart" data-id="<?php echo $dataa[0]->id; ?>" class="btn-addcart text-center cursor btn-primary rounded-pill">
                  Add cart
                </div>
              </div>
              <div class="col-6 p-1">
                <div id="buy" data-id="<?php echo $dataa[0]->id; ?>" class="btn-buy text-center cursor btn-primary rounded-pill">
                  Buy now
                </div>
              </div>
              
              
              <!-- <button id="addcart" data-id="<?php echo $dataa[0]->id; ?>" class="btn btn-addcart me-3">Thêm giỏ hàng</button> -->
              <!-- <button id="buy" data-id="<?php echo $dataa[0]->id; ?>" class="btn btn-buy">Mua ngay</button> -->
            </div>
</div>