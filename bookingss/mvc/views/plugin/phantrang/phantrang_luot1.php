<?php 
class tc
{
    
    function __construct($name,$meta_description,$image){
        $this->name=$name;
        $this->meta_description=$meta_description;
        $this->image=$image;
    }
}
$datatc = array(
    array('','','slider1.jpg'),
    array('','','slider2.jpg'),
    array('','','slider3.jpg'),
    array('','','slider4.png'),
);


$tc = array();
foreach($datatc as $key => $value){
    array_push($tc,new tc($value[0],$value[1],$value[2]));
}
?>
<style>

    .phantrang_load1>.owl-nav>.owl-next{
        top: 26%;
        position: absolute;
        left: 0vw;
    }
    .phantrang_load1>.owl-nav>.owl-prev{
        top: 26%;
        position: absolute;
        right: 0vw;
    }
    .card_img{
        height:40vw;
    }
    .phantrang_load1 .owl-dots button.owl-dot span{
      background: #8A5FCA;
    }
    .phantrang_load1 .owl-dots button.owl-dot.active span{
      background-color:#5E2E86;
    }
    .owl-theme .owl-dots .owl-dot:hover span {
        background: #5E2E86;
    }
    .owl-dots button.owl-dot:focus {
      outline: none;
    }
    @media (min-width: 768px){
        .card_img{
            height: 30vw;
        }
        .bg{
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        .phantrang_load1 .owl-dots button.owl-dot span{
          background: #8A5FCA;
        }
        .phantrang_load1 .owl-dots button.owl-dot.active span{
          background-color:#5E2E86;
        }
        .owl-theme .owl-dots .owl-dot:hover span {
            background: #5E2E86;
        }
        .owl-dots button.owl-dot:focus {
          outline: none;
        }
        .owl-theme .owl-dots .owl-dot span {
            width: 15px;
            height: 15px;
        }
    }
</style>
<div class="phantrang_load1 owl-carousel owl-theme">
    <?php 
    $manghot=json_decode($data['manghot']);
        $sotrang_hot=json_decode($data['sotrang_hot']);
        for ($i=1; $i <=$sotrang_hot ; $i++) { 
    ?>
    <div class="d-flex flex-wrap">
        <?php
        
            $tdhot=json_decode($thuvien->phantrangarray($i,8,$manghot));
            foreach ($tdhot as $key => $value) {
                $congviec=explode('|',$value->congviec);
        ?>
        <div class="col-md-6 col-12 px-md-3 px-3 my-3 cursor" onclick="window.location.href='tuyen-dung/detail/<?php echo $value->khongdau; ?>/<?php echo $value->id; ?>'">
            <div class="border_dm border_ra position-relative h-100">
                <div class="d-flex flex-wrap p-3 pe-md-5 ">
                    <div class="col-lg-3 col-md-3 col-12 text-lg-start text-center">
                        <img width="100" height="100" class="d-md-block d-none" src="public/upload/<?php if($value->image=='no image'){ echo 'tuyen_dung.jpg';} else { echo $value->image;} ?>" alt="">
                         <img  class="w-100 d-md-none d-block" src="public/upload/<?php if($value->image=='no image'){ echo 'tuyen_dung.jpg';} else { echo $value->image;} ?>" alt="">
                    </div>
                    <div class="col-lg-9 col-md-9 col-12 ps-3">
                        <div class="my-md-0 my-3">
                            <h6 class="mb-1 click_tieude "><?php echo $value->name; ?></h6>
                        </div>
                        
                        <div>
                            <!-- <h6 class="text-secondary mochu mb-0 fw-bold"><?php if($user->name==''){ echo 'Đang cập nhật';} else { echo $user->name;} ?></h6> -->
                            <p class="text-secondary mochu mb-0">Cập nhật: Hôm nay - Bạn còn 
                                <b><?php echo ceil(($value->hannop - time())/86400) ; ?></b> 
                            ngày để ứng tuyển</p>
                        </div>
                        
                       <div class="d-flex align-items-center">
                            <div>
                                <i class="bi bi-building text-secondary"></i>
                            </div>
                            <div class="fs-14 ps-2 text-secondary">
                                <?php echo $congviec[3]; ?>
                            </div>  
                        </div>
                       <div class="d-md-flex d-none align-items-center flex-wrap">
                            <div>
                                <span class="pe-lg-3 px-md-0  text-secondary"><i class="bi bi-geo-alt text-secondary"></i> <?php echo $congviec[5]; ?></span>
                            </div>
                            <div class="fs-14 ps-lg-2 ps-md-0 ps-2 text-secondary">
                                <span class="px-lg-3 px-md-0 text-secondary"><i class="bi bi-coin "></i> <?php echo $congviec[0]; ?> </span>
                            </div>

                        </div>
                        <div class="d-md-none d-flex align-items-center flex-wrap">
                            <div class="col-12">
                                <span class="pe-lg-3 px-md-0  text-secondary"><i class="bi bi-geo-alt text-secondary"></i> <?php echo $congviec[5]; ?></span>
                            </div>
                            <div class="fs-14 ps-lg-2 ps-md-0  text-secondary col-12">
                                <span class="px-lg-3 px-md-0 text-secondary"><i class="bi bi-coin "></i> <?php echo $congviec[0]; ?> </span>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="position-absolute ribbon hot">
                    <span class="badge badge-danger align-top ml-3">Hot</span>
                </div>
            </div>

        </div>
        <?php 
        }  
        ?>
    </div>
    <?php } ?>
</div>   


<script src="owlcarousel/owl.carousel.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){

        $('.phantrang_load1').owlCarousel({
            center: false,
            loop:false,
            margin:0,
            nav:false,
            dots:true,
            autoplay:false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                }
            }
        });
        $( ".owl-next").html('<i class="bi bi-arrow-left-short fs-1"></i>');
        $( ".owl-prev").html('<i class="bi bi-arrow-right-short fs-1"></i>');


    });
</script>