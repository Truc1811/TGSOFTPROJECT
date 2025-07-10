<?php
$dataa=json_decode($data['dataa']);
$trang=json_decode($data['trang']);
$model=json_decode($data['model']);
?>
<script>
    $(document).ready(function(){
        // up ảnh
        $('.get_h').on('change', function() {
              var tmppath = URL.createObjectURL(event.target.files[0]);
              console.log(tmppath);
              // var fileName = file.name;
              // var fileSize = file.size;
              var hinh='<img class="pe-2 pb-2 phongto cursor" style="height:8vh; max-width: 100%; " src="' + tmppath + '" />';
              $(this).next().html(hinh);
        });

        $('.get_hm').on('change', function() {
            $('.hienthim').html('');
            for (var i = 0; i <15; i++) {
              var tmp = URL.createObjectURL(event.target.files[i]);
              if(tmp.length>6){
                  chuoi='<img class="pe-2 pb-2 phongto cursor" style="height:8vh" src="' + tmp + '" />';
                  $('.hienthim').append(chuoi);

              }
            }
        });
            

    });
</script>
<form class="" method="post" enctype="multipart/form-data" action="admin/update/<?php echo str_replace('model','',$model); ?>">
    <div class="p-6 d-flex justify-content-between align-items-center shadow" style="height: 6vh ; ">
        <div class="fs-5 fw-bold px-2">
        Cập nhật trang chủ
        </div>
        <div class="d-flex px-2">
            
            <input class="btn btn-primary" type="submit" value="Save" name="bn"  />
            <!-- <input class="btn btn-danger" type="button" value="Back" 
            onclick="window.location.href='admin/listr/<?php echo str_replace('model','',$model); ?>'"  
            /> -->
            
        </div>
    </div>
    <div class="p-6 col-12 d-flex flex-wrap overflow-auto align-items-start scrollbar bg-light"  style="height:86vh">
            <!---- khung trai-->
            <div class="col-12 col-md-9 d-flex flex-wrap">
               
                        <input type="hidden" value="<?php echo $dataa[0]->id; ?>" name="id" />
                        <input type="hidden" value="<?php echo $trang; ?>" name="trang" />
                        <input type="hidden" value="<?php echo $model; ?>" name="model" />
               

                <!-- form nhap -->
                <div class="col-12 d-flex flex-wrap p-2">
                    <div class="col-12 bg-white rounded-3 d-flex flex-wrap">
                        <div class="col-12 p-3 fs-5">
                            Cấu hình trang chủ
                        </div>
                        <div class="col-12 col-md-6 px-3 pb-3">
                            <label for="name" class="form-label" >Name(*)</label>
                            <input type="text" name="name" required="required" class="form-control form-control-sm" id="name"
                                value="<?php if(@$_POST['name']){ echo $_POST['name'];} else { echo $dataa[0]->name;} ?>"
                            >
                        </div>
                        <div class="col-12 col-md-6 px-3 pb-3">
                            <label for="google_verify" class="form-label">Google site verification</label>
                            <input type="text" name="google_verify" class="form-control form-control-sm" id="google_verify"
                                value="<?php if(@$_POST['google_verify']){ echo $_POST['google_verify'];} else { echo $dataa[0]->google_verify;} ?>"
                            >
                        </div>
                        <div class="col-12 col-md-6 px-3 pb-3">
                            <label for="meta_description" class="form-label">Meta description</label>
                            <input type="text" name="meta_description" class="form-control form-control-sm" id="meta_description"
                                value="<?php if(@$_POST['meta_description']){ echo $_POST['meta_description'];} else { echo $dataa[0]->meta_description;} ?>"
                            >
                        </div>
                        <div class="col-12 col-md-6 px-3 pb-3">
                            <label for="meta_keywords" class="form-label">Meta keywords</label>
                            <input type="text" name="meta_keywords" class="form-control form-control-sm" id="meta_keywords"
                                value="<?php if(@$_POST['meta_keywords']){ echo $_POST['meta_keywords'];} else { echo $dataa[0]->meta_keywords;} ?>"
                            >
                        </div>
                        <div class="col-12 col-md-6 px-3 pb-3">
                            <label for="bando" class="form-label">Google map</label>
                            <input type="text" name="bando" class="form-control form-control-sm" id="bando"
                                value="<?php if(@$_POST['bando']){ echo $_POST['bando'];} else { echo $dataa[0]->bando;} ?>"
                            >
                        </div>

                    </div>
                </div>

                <!-- slider 1 -->
                <div class="col-12 d-flex flex-wrap p-2">
                    <div class="col-12 bg-white rounded-3 d-flex flex-wrap">
                        <div class="col-12 p-3 fs-5">
                            Slider 1
                        </div>
                        <div class="col-12 col-md-6 px-3 pb-3">
                            <label for="image_sla" class="form-label">Hình 1 laptop (*) (1536 x 512)</label>
                            <input type="file" name="image_sla"  class="form-control form-control-sm get_h" required="required" id="image_sla">
                            <div class="d-flex flex-wrap">
                                <?php if(strlen($dataa[0]->image_sla)>2){?>
                                <img class="pe-2 pb-2 phongto cursor" style="height:6vh" src="public/upload/<?php echo $dataa[0]->image_sla; ?>"/>
                                <?php } ?>
                            </div>
                            <input type="hidden" name="image_sla1" value="<?php echo $dataa[0]->image_sla; ?>"  />
                        </div>
                        <div class="col-12 col-md-6 px-3 pb-3">
                            <label for="image_slda" class="form-label">Hình 1 di động (*) (780 x 438)</label>
                            <input type="file" name="image_slda"  class="form-control form-control-sm get_h" required="required" id="image_slda">
                            <div class="d-flex flex-wrap">
                                <?php if(strlen($dataa[0]->image_slda)>2){?>
                                <img class="pe-2 pb-2 phongto cursor" style="height:6vh" src="public/upload/<?php echo $dataa[0]->image_slda; ?>"/>
                                <?php } ?>
                            </div>
                            <input type="hidden" name="image_slda1" value="<?php echo $dataa[0]->image_slda; ?>"  />
                        </div>
                        <div class="col-12 col-md-12 px-3 pb-3">
                            <input type="text" name="text_ta" class="form-control form-control-sm" 
                                value="<?php if(@$_POST['text_ta']){ echo $_POST['text_ta'];} else { echo $dataa[0]->text_ta; } ?>"
                            >
                        </div>
                        <div class="col-12 col-md-12 px-3 pb-3">
                            <input type="text" name="text_ca" class="form-control form-control-sm" 
                                value="<?php if(@$_POST['text_ca']){ echo $_POST['text_ca'];} else { echo $dataa[0]->text_ca; } ?>"
                            >
                        </div>
                        <div class="col-12 col-md-12 px-3 pb-3">
                            <input type="text" name="text_ia" class="form-control form-control-sm" 
                                value="<?php if(@$_POST['text_ia']){ echo $_POST['text_ia'];} else { echo $dataa[0]->text_ia; } ?>"
                            >
                        </div>
                        
                    </div>
                </div>

                <!-- slider 2 -->
                <div class="col-12 d-flex flex-wrap p-2">
                    <div class="col-12 bg-white rounded-3 d-flex flex-wrap">
                        <div class="col-12 p-3 fs-5">
                            Slider 2
                        </div>
                        <div class="col-12 col-md-6 px-3 pb-3">
                            <label for="image_slb" class="form-label">Hình 2 laptop (*) (1536 x 512)</label>
                            <input type="file" name="image_slb"  class="form-control form-control-sm get_h" required="required" id="image_slb">
                            <div class="d-flex flex-wrap">
                                <?php if(strlen($dataa[0]->image_slb)>2){?>
                                <img class="pe-2 pb-2 phongto cursor" style="height:6vh" src="public/upload/<?php echo $dataa[0]->image_slb; ?>"/>
                                <?php } ?>
                            </div>
                            <input type="hidden" name="image_slb1" value="<?php echo $dataa[0]->image_slb; ?>"  />
                        </div>
                        <div class="col-12 col-md-6 px-3 pb-3">
                            <label for="image_sldb" class="form-label">Hình 2 di động (*) (780 x 438)</label>
                            <input type="file" name="image_sldb"  class="form-control form-control-sm get_h" required="required" id="image_sldb">
                            <div class="d-flex flex-wrap">
                                <?php if(strlen($dataa[0]->image_sldb)>2){?>
                                <img class="pe-2 pb-2 phongto cursor" style="height:6vh" src="public/upload/<?php echo $dataa[0]->image_sldb; ?>"/>
                                <?php } ?>
                            </div>
                            <input type="hidden" name="image_sldb1" value="<?php echo $dataa[0]->image_sldb; ?>"  />
                        </div>
                        <div class="col-12 col-md-12 px-3 pb-3">
                            <input type="text" name="text_tb" class="form-control form-control-sm" 
                                value="<?php if(@$_POST['text_tb']){ echo $_POST['text_tb'];} else { echo $dataa[0]->text_tb; } ?>"
                            >
                        </div>
                        <div class="col-12 col-md-12 px-3 pb-3">
                            <input type="text" name="text_cb" class="form-control form-control-sm" 
                                value="<?php if(@$_POST['text_cb']){ echo $_POST['text_cb'];} else { echo $dataa[0]->text_cb; } ?>"
                            >
                        </div>
                        <div class="col-12 col-md-12 px-3 pb-3">
                            <input type="text" name="text_ib" class="form-control form-control-sm" 
                                value="<?php if(@$_POST['text_ib']){ echo $_POST['text_ib'];} else { echo $dataa[0]->text_ib; } ?>"
                            >
                        </div>
                        
                    </div>
                </div>

                <!-- slider 3 -->
                <div class="col-12 d-flex flex-wrap p-2">
                    <div class="col-12 bg-white rounded-3 d-flex flex-wrap">
                        <div class="col-12 p-3 fs-5">
                            Slider 3
                        </div>
                        <div class="col-12 col-md-6 px-3 pb-3">
                            <label for="image_slc" class="form-label">Hình 3 laptop (*) (1536 x 512)</label>
                            <input type="file" name="image_slc"  class="form-control form-control-sm get_h" required="required" id="image_slc">
                            <div class="d-flex flex-wrap">
                                <?php if(strlen($dataa[0]->image_slc)>2){?>
                                <img class="pe-2 pb-2 phongto cursor" style="height:6vh" src="public/upload/<?php echo $dataa[0]->image_slc; ?>"/>
                                <?php } ?>
                            </div>
                            <input type="hidden" name="image_slc1" value="<?php echo $dataa[0]->image_slc; ?>"  />
                        </div>
                        <div class="col-12 col-md-6 px-3 pb-3">
                            <label for="image_sldc" class="form-label">Hình 3 di động (*) (780 x 438)</label>
                            <input type="file" name="image_sldc"  class="form-control form-control-sm get_h" required="required" id="image_sldc">
                            <div class="d-flex flex-wrap">
                                <?php if(strlen($dataa[0]->image_sldc)>2){?>
                                <img class="pe-2 pb-2 phongto cursor" style="height:6vh" src="public/upload/<?php echo $dataa[0]->image_sldc; ?>"/>
                                <?php } ?>
                            </div>
                            <input type="hidden" name="image_sldc1" value="<?php echo $dataa[0]->image_sldc; ?>"  />
                        </div>
                        <div class="col-12 col-md-12 px-3 pb-3">
                            <input type="text" name="text_tc" class="form-control form-control-sm" 
                                value="<?php if(@$_POST['text_tc']){ echo $_POST['text_tc'];} else { echo $dataa[0]->text_tc; } ?>"
                            >
                        </div>
                        <div class="col-12 col-md-12 px-3 pb-3">
                            <input type="text" name="text_cc" class="form-control form-control-sm" 
                                value="<?php if(@$_POST['text_cc']){ echo $_POST['text_cc'];} else { echo $dataa[0]->text_cc; } ?>"
                            >
                        </div>
                        <div class="col-12 col-md-12 px-3 pb-3">
                            <input type="text" name="text_ic" class="form-control form-control-sm" 
                                value="<?php if(@$_POST['text_ic']){ echo $_POST['text_ic'];} else { echo $dataa[0]->text_ic; } ?>"
                            >
                        </div>
                        
                        
                    </div>
                </div>

                <!-- slider 4 -->
                <div class="col-12 d-flex flex-wrap p-2">
                    <div class="col-12 bg-white rounded-3 d-flex flex-wrap">
                        <div class="col-12 p-3 fs-5">
                            Slider 4
                        </div>
                        <div class="col-12 col-md-6 px-3 pb-3">
                            <label for="image_sld" class="form-label">Hình 4 laptop (*) (1536 x 512)</label>
                            <input type="file" name="image_sld"  class="form-control form-control-sm get_h" required="required" id="image_sld">
                            <div class="d-flex flex-wrap">
                                <?php if(strlen($dataa[0]->image_sld)>2){?>
                                <img class="pe-2 pb-2 phongto cursor" style="height:6vh" src="public/upload/<?php echo $dataa[0]->image_sld; ?>"/>
                                <?php } ?>
                            </div>
                            <input type="hidden" name="image_sld1" value="<?php echo $dataa[0]->image_sld; ?>"  />
                        </div>
                        <div class="col-12 col-md-6 px-3 pb-3">
                            <label for="image_sldd" class="form-label">Hình 4 di động (*) (780 x 438)</label>
                            <input type="file" name="image_sldd"  class="form-control form-control-sm get_h" required="required" id="image_sldd">
                            <div class="d-flex flex-wrap">
                                <?php if(strlen($dataa[0]->image_sldd)>2){?>
                                <img class="pe-2 pb-2 phongto cursor" style="height:6vh" src="public/upload/<?php echo $dataa[0]->image_sldd; ?>"/>
                                <?php } ?>
                            </div>
                            <input type="hidden" name="image_sldd1" value="<?php echo $dataa[0]->image_sldd; ?>"  />
                        </div>
                        <div class="col-12 col-md-12 px-3 pb-3">
                            <input type="text" name="text_td" class="form-control form-control-sm" 
                                value="<?php if(@$_POST['text_td']){ echo $_POST['text_td'];} else { echo $dataa[0]->text_td; } ?>"
                            >
                        </div>
                        <div class="col-12 col-md-12 px-3 pb-3">
                            <input type="text" name="text_cd" class="form-control form-control-sm" 
                                value="<?php if(@$_POST['text_cd']){ echo $_POST['text_cd'];} else { echo $dataa[0]->text_cd; } ?>"
                            >
                        </div>
                        <div class="col-12 col-md-12 px-3 pb-3">
                            <input type="text" name="text_id" class="form-control form-control-sm" 
                                value="<?php if(@$_POST['text_id']){ echo $_POST['text_id'];} else { echo $dataa[0]->text_id; } ?>"
                            >
                        </div>
                        
                        
                    </div>
                </div>

                <!-- slider 5 -->
                <div class="col-12 d-flex flex-wrap p-2">
                    <div class="col-12 bg-white rounded-3 d-flex flex-wrap">
                        <div class="col-12 p-3 fs-5">
                            Slider 5
                        </div>
                        <div class="col-12 col-md-6 px-3 pb-3">
                            <label for="image_sle" class="form-label">Hình 5 laptop (*) (1536 x 512)</label>
                            <input type="file" name="image_sle"  class="form-control form-control-sm get_h" required="required" id="image_sle">
                            <div class="d-flex flex-wrap">
                                <?php if(strlen($dataa[0]->image_sle)>2){?>
                                <img class="pe-2 pb-2 phongto cursor" style="height:6vh" src="public/upload/<?php echo $dataa[0]->image_sle; ?>"/>
                                <?php } ?>
                            </div>
                            <input type="hidden" name="image_sle1" value="<?php echo $dataa[0]->image_sle; ?>"  />
                        </div>
                        <div class="col-12 col-md-6 px-3 pb-3">
                            <label for="image_slde" class="form-label">Hình 5 di động (*) (780 x 438)</label>
                            <input type="file" name="image_slde"  class="form-control form-control-sm get_h" required="required" id="image_slde">
                            <div class="d-flex flex-wrap">
                                <?php if(strlen($dataa[0]->image_slde)>2){?>
                                <img class="pe-2 pb-2 phongto cursor" style="height:6vh" src="public/upload/<?php echo $dataa[0]->image_slde; ?>"/>
                                <?php } ?>
                            </div>
                            <input type="hidden" name="image_slde1" value="<?php echo $dataa[0]->image_slde; ?>"  />
                        </div>
                        <div class="col-12 col-md-12 px-3 pb-3">
                            <input type="text" name="text_te" class="form-control form-control-sm" 
                                value="<?php if(@$_POST['text_te']){ echo $_POST['text_te'];} else { echo $dataa[0]->text_te; } ?>"
                            >
                        </div>
                        <div class="col-12 col-md-12 px-3 pb-3">
                            <input type="text" name="text_ce" class="form-control form-control-sm" 
                                value="<?php if(@$_POST['text_ce']){ echo $_POST['text_ce'];} else { echo $dataa[0]->text_ce; } ?>"
                            >
                        </div>
                        <div class="col-12 col-md-12 px-3 pb-3">
                            <input type="text" name="text_ie" class="form-control form-control-sm" 
                                value="<?php if(@$_POST['text_ie']){ echo $_POST['text_ie'];} else { echo $dataa[0]->text_ie; } ?>"
                            >
                        </div>
                    </div>
                </div>

                <!-- trang chu 1 -->
                <div class="col-12 col-md-6 d-flex flex-wrap p-2">
                    <div class="col-12 bg-white rounded-3 d-flex flex-wrap">
                        <div class="col-12 p-3 fs-5">
                            ******
                        </div>
                        <div class="col-12 col-md-12 px-3 pb-3">
                            <label for="image_tca" class="form-label">Hình nền a (*) (1124 x 560)</label>
                            <input type="file" name="image_tca"  class="form-control form-control-sm get_h" required="required" id="image_tca">
                            <div class="d-flex flex-wrap">
                                <?php if(strlen($dataa[0]->image_tca)>2){?>
                                <img class="pe-2 pb-2 phongto cursor" style="height:6vh" src="public/upload/<?php echo $dataa[0]->image_tca; ?>"/>
                                <?php } ?>
                            </div>
                            <input type="hidden" name="image_tca1" value="<?php echo $dataa[0]->image_tca; ?>"  />
                        </div>
                       
                        <div class="col-12 col-md-12 px-3 pb-3">
                            <input type="text" name="text_tcat" class="form-control form-control-sm" 
                                value="<?php if(@$_POST['text_tcat']){ echo $_POST['text_tcat'];} else { echo $dataa[0]->text_tcat; } ?>"
                            >
                        </div>
                        <div class="col-12 col-md-12 px-3 pb-3">
                            <input type="text" name="text_tcata" class="form-control form-control-sm" 
                                value="<?php if(@$_POST['text_tcata']){ echo $_POST['text_tcata'];} else { echo $dataa[0]->text_tcata; } ?>"
                            >
                        </div>
                        <div class="col-12 col-md-12 px-3 pb-3">
                            <input type="text" name="text_tcac" class="form-control form-control-sm" 
                                value="<?php if(@$_POST['text_tcac']){ echo $_POST['text_tcac'];} else { echo $dataa[0]->text_tcac; } ?>"
                            >
                        </div>
                        <div class="col-12 col-md-12 px-3 pb-3">
                            <input type="text" name="text_tcad" class="form-control form-control-sm" 
                                value="<?php if(@$_POST['text_tcad']){ echo $_POST['text_tcad'];} else { echo $dataa[0]->text_tcad; } ?>"
                            >
                        </div>
                    </div>
                </div>

                <!-- trang chu 2 -->
                <div class="col-12 col-md-6 d-flex flex-wrap p-2">
                    <div class="col-12 bg-white rounded-3 d-flex flex-wrap">
                        <div class="col-12 p-3 fs-5">
                            ******
                        </div>
                        <div class="col-12 col-md-12 px-3 pb-3">
                            <label for="image_tcb" class="form-label">Hình nền b (*) (1124 x 560)</label>
                            <input type="file" name="image_tcb"  class="form-control form-control-sm get_h" required="required" id="image_tcb">
                            <div class="d-flex flex-wrap">
                                <?php if(strlen($dataa[0]->image_tcb)>2){?>
                                <img class="pe-2 pb-2 phongto cursor" style="height:6vh" src="public/upload/<?php echo $dataa[0]->image_tcb; ?>"/>
                                <?php } ?>
                            </div>
                            <input type="hidden" name="image_tcb1" value="<?php echo $dataa[0]->image_tcb; ?>"  />
                        </div>
                       
                        <div class="col-12 col-md-12 px-3 pb-3">
                            <input type="text" name="text_tcbt" class="form-control form-control-sm" 
                                value="<?php if(@$_POST['text_tcbt']){ echo $_POST['text_tcbt'];} else { echo $dataa[0]->text_tcbt; } ?>"
                            >
                        </div>
                        <div class="col-12 col-md-12 px-3 pb-3">
                            <input type="text" name="text_tcbta" class="form-control form-control-sm" 
                                value="<?php if(@$_POST['text_tcbta']){ echo $_POST['text_tcbta'];} else { echo $dataa[0]->text_tcbta; } ?>"
                            >
                        </div>
                        <div class="col-12 col-md-12 px-3 pb-3">
                            <input type="text" name="text_tcbc" class="form-control form-control-sm" 
                                value="<?php if(@$_POST['text_tcbc']){ echo $_POST['text_tcbc'];} else { echo $dataa[0]->text_tcbc; } ?>"
                            >
                        </div>
                        <div class="col-12 col-md-12 px-3 pb-3">
                            <input type="text" name="text_tcbd" class="form-control form-control-sm" 
                                value="<?php if(@$_POST['text_tcbd']){ echo $_POST['text_tcbd'];} else { echo $dataa[0]->text_tcbd; } ?>"
                            >
                        </div>
                    </div>
                </div>
                                
            </div> 
            <!-- end khung trai  -->

            <!-- khung phai   -->
            <div class="col-12 col-md-3 d-flex flex-wrap">
                <!-- mang xa hoi -->
                <div class="col-12 d-flex flex-wrap p-2">
                    <div class="col-12 bg-white rounded-3 d-flex flex-wrap">
                         <div class="col-12 p-3 fs-5">
                            Mạng xã hội
                        </div>
                        <div class="col-12 col-md-12 px-3 pb-3">
                            <label for="hotline" class="form-label">Hotline</label>
                            <input type="text" name="hotline" class="form-control form-control-sm" id="hotline"
                                value="<?php if(@$_POST['hotline']){ echo $_POST['hotline'];} else { echo $dataa[0]->hotline;} ?>"
                            >
                        </div>
                        <div class="col-12 col-md-12 px-3 pb-3">
                            <label for="momo" class="form-label">Wallet address (Momo)</label>
                            <input type="text" name="momo" class="form-control form-control-sm" id="momo"
                                value="<?php if(@$_POST['momo']){ echo $_POST['momo'];} else { echo $dataa[0]->momo;} ?>"
                            >
                        </div>
                       
                        <div class="col-12 col-md-12 px-3 pb-3">
                            <label for="facebook" class="form-label">Facebook</label>
                            <input type="text" name="facebook" class="form-control form-control-sm" id="facebook"
                                value="<?php if(@$_POST['facebook']){ echo $_POST['facebook'];} else { echo $dataa[0]->facebook;} ?>"
                            >
                        </div>
                        <div class="col-12 col-md-12 px-3 pb-3">
                            <label for="instagram" class="form-label">Instagram</label>
                            <input type="text" name="instagram" class="form-control form-control-sm" id="instagram"
                                value="<?php if(@$_POST['instagram']){ echo $_POST['instagram'];} else { echo $dataa[0]->instagram;} ?>"
                            >
                        </div>
                        <div class="col-12 col-md-12 px-3 pb-3">
                            <label for="youtube" class="form-label">Youtube</label>
                            <input type="text" name="youtube" class="form-control form-control-sm" id="youtube"
                                value="<?php if(@$_POST['youtube']){ echo $_POST['youtube'];} else { echo $dataa[0]->youtube;} ?>"
                            >
                        </div>
                        <div class="col-12 col-md-12 px-3 pb-3">
                            <label for="tiktok" class="form-label">Tiktok</label>
                            <input type="text" name="tiktok" class="form-control form-control-sm" id="tiktok"
                                value="<?php if(@$_POST['tiktok']){ echo $_POST['tiktok'];} else { echo $dataa[0]->tiktok;} ?>"
                            >
                        </div>
                        <div class="col-12 col-md-12 px-3 pb-3">
                            <label for="twitter" class="form-label">Twitter</label>
                            <input type="text" name="twitter" class="form-control form-control-sm" id="twitter"
                                value="<?php if(@$_POST['twitter']){ echo $_POST['twitter'];} else { echo $dataa[0]->twitter;} ?>"
                            >
                        </div>
                        <div class="col-12 col-md-12 px-3 pb-3">
                            <label for="zalo" class="form-label">Zalo</label>
                            <input type="text" name="zalo" class="form-control form-control-sm" id="zalo"
                                value="<?php if(@$_POST['zalo']){ echo $_POST['zalo'];} else { echo $dataa[0]->zalo;} ?>"
                            >
                        </div>
                    </div>
                </div>
                <!-- hinh logo -->
                <div class="col-12 d-flex flex-wrap p-2">
                    <div class="col-12 bg-white rounded-3 d-flex flex-wrap">
                         <div class="col-12 p-3 fs-5">
                            Hình logo
                        </div>
                        <div class="col-12 col-md-12 p-3">
                            <label for="image_lheader" class="form-label">Logo header</label>
                            <input type="file" name="image_lheader"  class="form-control form-control-sm get_h" id="image_lheader">
                            <div class="d-flex flex-wrap">
                                <?php if(strlen($dataa[0]->image_lheader)>2){?>
                                <img class="pe-2 pb-2 phongto cursor" style="height:6vh" src="public/upload/<?php echo $dataa[0]->image_lheader; ?>"/>
                                <?php } ?>
                            </div>
                            <input type="hidden" name="image_lheader1" value="<?php echo $dataa[0]->image_lheader; ?>"  />
                        </div>
                        <div class="col-12 col-md-12 p-3">
                            <label for="image_lfooter" class="form-label">Logo footer</label>
                            <input type="file" name="image_lfooter"  class="form-control form-control-sm get_h" id="image_lfooter">
                            <div class="d-flex flex-wrap">
                                <?php if(strlen($dataa[0]->image_lfooter)>2){?>
                                <img class="pe-2 pb-2 phongto cursor" style="height:6vh" src="public/upload/<?php echo $dataa[0]->image_lfooter; ?>"/>
                                <?php } ?>
                            </div>
                            <input type="hidden" name="image_lfooter1" value="<?php echo $dataa[0]->image_lfooter; ?>"  />
                        </div>
                        <div class="col-12 col-md-12 p-3">
                            <label for="image_favicon" class="form-label">Hình Favicon</label>
                            <input type="file" name="image_favicon"  class="form-control form-control-sm get_h" id="image_favicon">
                            <div class="d-flex flex-wrap">
                                <?php if(strlen($dataa[0]->image_favicon)>2){?>
                                <img class="pe-2 pb-2 phongto cursor" style="height:6vh" src="public/upload/<?php echo $dataa[0]->image_favicon; ?>"/>
                                <?php } ?>
                            </div>
                            <input type="hidden" name="image_favicon1" value="<?php echo $dataa[0]->image_favicon; ?>"  />
                        </div>
                    </div>
                </div>

                <!-- thuong hieu -->
                <div class="col-12 d-flex flex-wrap p-2">
                    <div class="col-12 bg-white rounded-3 d-flex flex-wrap">
                         <div class="col-12 p-3 fs-5">
                            Hình logo phụ
                        </div>
                        <div class="col-12 col-md-12 p-3">
                            <label for="image_th" class="form-label">Logo phụ</label>
                            <input type="file" name="image_th"  class="form-control form-control-sm get_h" id="image_th">
                            <div class="d-flex flex-wrap">
                                <?php if(strlen($dataa[0]->image_th)>2){?>
                                <img class="pe-2 pb-2 phongto cursor" style="height:6vh" src="public/upload/<?php echo $dataa[0]->image_th; ?>"/>
                                <?php } ?>
                            </div>
                            <input type="hidden" name="image_th1" value="<?php echo $dataa[0]->image_th; ?>"  />
                        </div>
                         <div class="col-12 col-md-12 px-3 pb-3">
                            <input type="text" name="text_tht" class="form-control form-control-sm" id="text_tht"
                                value="<?php if(@$_POST['text_tht']){ echo $_POST['text_tht'];} else { echo $dataa[0]->text_tht;} ?>"
                            >
                        </div>
                         <div class="col-12 col-md-12 px-3 pb-3">
                            <input type="text" name="text_thc" class="form-control form-control-sm" id="text_thc"
                                value="<?php if(@$_POST['text_thc']){ echo $_POST['text_thc'];} else { echo $dataa[0]->text_thc;} ?>"
                            >
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- end khung phai -->
            
    </div>
    
</form>

