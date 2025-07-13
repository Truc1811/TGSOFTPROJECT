<?php 
    $tintuc = json_decode($data['tintuc']);
?>
<style>
   
    .bg_img{
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
    }
    .img_qc{
        height: 125vw;
    }
    .qc{
        width: 70%;
        margin: 0 auto;
    }
    

    .owl-theme .owl-nav.disabled+.owl-dots {
        margin-top: -30px;
        z-index: 99 !important;
    }
    @media (min-width: 768px){
        .img_qc{
            height: 25vw;
        }
        .qc{
            width: 50%;
            margin: 0 auto;
        }
        .tt{
            font-size: 50px;
            font-weight: bold !important;
        }
         .tt_t{
            font-size: 24px;
            
        }   
    }
     @media (min-width: 1400px){
        .img_qc{
            height: 25vw !important;
        }
        .qc{
            width: 50%;
            margin: 0 auto;
        }
        .tt{
            font-size: 60px;
            font-weight: bold !important;
        }
        .tt_t{
            font-size: 24px;
            
        }
       
    }
        }
</style>




<div class="px-0">
    <div class="sdsp owl-carousel owl-theme">   
        <div class="bg_img img_qc w-100 d-flex align-items-center" style="background-image: url('public/upload/<?php echo $cauhinh[0]->background_header; ?>');">

        </div>
        <div class="bg_img img_qc w-100 d-flex align-items-center" style="background-image: url('public/upload/<?php echo $cauhinh[0]->background_content; ?>');">
            
        </div>
       <!--  <div class="bg_img img_qc w-100 d-flex align-items-center" style="background-image: url('public/upload/<?php echo $value->image; ?>');">
            <div class="qc">
                <div class="pb-2 tt">
                    CAMERA 4G DRCAM
                </div>
                <div class="tt_t">Nâng tầm trải nghiệm, Thiết bị quan sát thông minh<br /> góc xoay đa chiều</div>
            </div>    
        </div> -->
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
            dots:true,
            autoplay:true,
            autoplayTimeout:2500,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                }
            }
        });
        $( ".sdsp .owl-next").html('<i class="bi bi-caret-left fa-2x"></i>');
         $( ".sdsp .owl-prev").html('<i class="bi bi-caret-right fa-2x"></i>');


    });
</script>