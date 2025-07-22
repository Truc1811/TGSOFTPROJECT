<?php 
    $tintuc = json_decode($data['tintuc']);
?>
<style>
   
    .bg_img{
        background-repeat: no-repeat;
        background-size: contain;
        background-position: center;
    }
    .card_img{
        height: 20vw;
    }
 
    @media (min-width: 768px){
        .card_img{
            height: 7vw;
        }
       
    }
     @media (min-width: 1400px){
        .card_img{
            height: 7vw;
        }
      
         
      
       
    }
</style>




<div class="px-0">
    <div class="sdsp owl-carousel owl-theme">
        
            <?php
                    foreach ($hinhmota as $key => $vah) {
                    
            ?>
                <div class="bg_img card_img hinh_spmt" style="background-image: url('public/upload/<?php echo $vah; ?>');" data-spmt="public/upload/<?php echo $vah; ?>">
                        
                </div>
            <?php 
            } 
            ?>
        
    </div>   
</div>




<script src="owlcarousel/owl.carousel.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){

        $('.sdsp').owlCarousel({
            center: false,
            loop:true,
            margin:10,
            nav:false,
            dots:false,
            autoplay:false,
            responsive:{
                0:{
                    items:5
                },
                600:{
                    items:4
                }
            }
        });
        $( ".sdsp .owl-next").html('<i class="bi bi-caret-left fa-2x"></i>');
         $( ".sdsp .owl-prev").html('<i class="bi bi-caret-right fa-2x"></i>');


    });
</script>


<script>
    $(document).ready(function(){
        $('.hinh_spmt').click(function(){
            var hinh_spmt=$(this).data('spmt');
            $('#myimage').attr('src',hinh_spmt);
            imageZoom("myimage", "myresult");
        });
    });
</script>