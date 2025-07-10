<style>

    .owl-carousel .owl-nav button.owl-next, .owl-carousel .owl-nav button.owl-prev, .owl-carousel button.owl-dot {
        color: #19BAB5;
    }

    .moi .owl-nav [class*=owl-]:hover {
        color: #00A86E;
        background-color: #F5F5F5;
    }
    .moi>.owl-nav>.owl-next{
        top: 50%;
        position: absolute;
        left: 0vw;
    }

    .moi>.owl-nav>.owl-prev{
        top: 50%;
        position: absolute;
        right: 0vw;
    }

 
    .card-text {
        min-height: 20px;
    }
    .card_img{
        height: 20vw;
    }
    .active{
        text-decoration: none !important;
    }
    .hinhspbc{
        height: auto !important;
    }
    @media (min-width: 768px){
        
        
        .active{
            text-decoration: none !important;
        }
      
    }
     @media (min-width: 1400px){
       
        .active{
            text-decoration: none !important;
        }
       
    }
</style>





    <div class="moi owl-carousel owl-theme">
        
        <?php
            for ($i=1;$i<=5;$i++) {
        ?>
            <div class="">
                <img src="public/demo/sld-0<?php echo $i.'.jpg'; ?>" alt="">
            </div>
        <?php
            }
        ?>
        
    </div>   





<script src="owlcarousel/owl.carousel.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){

        $('.moi').owlCarousel({
            center: false,
            loop:true,
            margin:0,
            nav:true,
            dots:false,
            autoplay:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                }
            }
        });
        $( ".owl-next").html('<i class="bi bi-caret-left "></i>');
        $( ".owl-prev").html('<i class="bi bi-caret-right "></i>');


    });
</script>