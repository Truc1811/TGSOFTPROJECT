<style>

    
    
    
    @media (min-width: 768px){
    
    
    @media (min-width: 1400px){
        .item:hover{
            
        }
    }
</style>
<div class="p-0">
    <div class="moi4 owl-carousel owl-theme">
    
        <div class="item cursor" onclick="window.location.href='san-pham/detail/<?php echo $sanpham[0]->khongdau; ?>'">
            <div>
                <img class="w-100" src="public/demo/AQM_Cv4_00411_DIGITAL.avif">
            </div>
            <div class="chu-dam text-center">
                AQUAMAN #4
            </div>
        </div>
        <div class="item cursor" onclick="window.location.href='san-pham/detail/<?php echo $sanpham[0]->khongdau; ?>'">
            <div>
                <img class="w-100" src="public/demo/DCvV_WWV_Cv8_00811_DIGITAL.avif" alt="">
            </div>
            <div class="chu-dam text-center">
                DV VS VAMPIRES: WORLD WAR V #8
            </div>
        </div>
        <div class="item cursor" onclick="window.location.href='san-pham/detail/<?php echo $sanpham[0]->khongdau; ?>'">
            <div>
                <img class="w-100" src="public/demo/FAIWHFO_Cv1_00111_DIGITAL.avif">
            </div>
            <div class="chu-dam text-center">
                FIRE & ICE: WHEN HELL FREEZES OVER #1
            </div>
        </div>
        <div class="item cursor" onclick="window.location.href='san-pham/detail/<?php echo $sanpham[0]->khongdau; ?>'">
            <div>
                <img class="w-100" src="public/demo/ABS_BM_Cv7_00711_DIGITAL.avif">
            </div>
            <div class="chu-dam text-center">
                ABSOLUTE BATMAN #7
            </div>
        </div>
        <div class="item cursor" onclick="window.location.href='san-pham/detail/<?php echo $sanpham[0]->khongdau; ?>'">
            <div>
                <img class="w-100" src="public/demo/GLCORPS_Cv3_00311_DIGITAL.avif">
            </div>
            <div class="chu-dam text-center">
                GREEN LANTERN  CORPS #3
            </div>
        </div>
         <div class="item cursor" onclick="window.location.href='san-pham/detail/<?php echo $sanpham[0]->khongdau; ?>'">
            <div>
                <img class="w-100" src="public/demo/FAIWHFO_Cv1_00111_DIGITAL.avif">
            </div>
            <div class="chu-dam text-center">
                FIRE & ICE: WHEN HELL FREEZES OVER #1
            </div>
        </div>
    </div>   
</div>

   


<script src="owlcarousel/owl.carousel.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){

        $('.moi4').owlCarousel({
            center: false,
            loop:false,
            margin:30,
            nav:false,
            dots:false,
            autoplay:false,
            responsive:{
                0:{
                    items:2
                },
                600:{
                    items:6
                }
            }
        });
        


    });
</script>