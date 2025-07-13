<?php
unset($_SESSION['diem']);
unset($_SESSION['idt']);
$datab=json_decode($data['answertest']);
$dataa=json_decode($data['testonline']);
$dm=json_decode($data['dm']);
$idt=$dataa[0]->id;
$_SESSION['idt']=$idt;
if(@!$_SESSION['tg']){
   $_SESSION['tg']=$dataa[0]->testtime-1; 
}
?>

<script type="text/javascript">
var s="<?php echo $_SESSION['tg']; ?>";
$(document).ready(function () {

    $('.tinhdiem').click(function(){
        var id=$(this).data('id');
        var diem=$(this).val();
        var idt="<?php echo $idt; ?>";
        $.post(
                'testonline/tinhdiem', // URL 
                {'id' : id,'diem':diem,'idt':idt},  // Data
                function(kqt){ // Success
                    //$('.ketquatrung').html(kqt);            
                }, 
                'text' // dataTyppe
        );
    });
    var d=60
    setInterval(function(){
        if(d>=0){
            $('.giay').html(d);
            d--;
        } else {
            if(s>0){
                var a=s-1;
                
                $.post(
                        'testonline/cp', // URL 
                        {'a' : a},  // Data
                        function(kqt){ // Success
                            //$('.ketquatrung').html(kqt);
                            $('.phut').html(a);
                            s--;
                        }, 
                        'text' // dataTyppe
                );
                
            } else {
                var url="<?php echo $dm.'testonline/ketqua'; ?>";
                window.location.href=url;
            }
            d=60; 
        }
        

    },1000);

    // setInterval(function(){
    //     if(s>=0){
    //         var a=s;
    //         $.post(
    //                 'testonline/cp', // URL 
    //                 {'a' : a},  // Data
    //                 function(kqt){ // Success
    //                     //$('.ketquatrung').html(kqt);
    //                     $('.giay').html(a);
    //                     s--;
    //                 }, 
    //                 'text' // dataTyppe
    //         );
            
    //     } else {
    //         var url="<?php echo $dm.'testonline/ketqua'; ?>";
    //         window.location.href=url;
    //     }  

    // },60000);

    

});


</script>
<style type="text/css">
.khungtest{
}

.khungtest ol {
    padding: 1vw 1vw 1vw 1vw;
}

.khung-input_submit{
    width: 10vw;
}

/*---------------------------------------display hiển thị nội dung-----------------------------------------*/
.display_flex_w {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-content: flex-start;
}

.display_flex_w>div {
    margin-bottom: 1vw;
}

.display_flex_ws {
    display: flex;
    flex-wrap: wrap;
    justify-content: flex-start;
    align-content: flex-start;
}

.display_flex_column {
    display: flex;
    flex-direction: column;
}

.display_flex_column_m {
    display: flex;
    flex-direction: column;
}

.display_flex_column_m>div {
    margin-bottom: 0.5vw;
}

.display_flex_column_m_1 {
    display: flex;
    flex-direction: column;
}

.display_flex_column_m_1>div {
    margin-bottom: 1vw;
}

.display_flex_row_justify {
    display: flex;
    justify-content: space-between;
}

.display_flex_cc {
    display: flex;
    justify-content: center;
    align-items: center;
}

.display_flex_cs {
    display: flex;
    justify-content: center;
    align-items: flex-start;
}

.display_flex_ce {
    display: flex;
    justify-content: center;
    align-items: flex-end;
}

.display_flex_sc {
    display: flex;
    justify-content: flex-start;
    align-items: center;
}

.display_flex_ec {
    display: flex;
    justify-content: flex-end;
    align-items: center;
}


  .color_den {
    color: rgba(0, 0, 0, 1);
  }

  .margin_top {
    margin: 1vw 0 0 0;
  }

  .margin_bottom_2 {
    margin: 0 0 1vw 0;
  }

  .border_bottom {
    border-bottom: 0.1vw solid rgba(51, 51, 51, 0.5);
  }

  .padding_4 {
    padding: 1vw 0 1vw 0;
  }

  .color_do {
    color: rgba(255, 0, 0, 1);
  }

  .padding_quanly {
        padding: 0.5vw 1vw 0.5vw 1vw;
    }

  /*------------------input-------------------------*/
  .input_submit {
      outline: none;
      text-outline: none;
      background-color: rgba(0, 153, 0, 1);
      color: rgba(255, 255, 255, 1);
      border: none;
      cursor: pointer;
      padding: 0.6vw 1vw 0.6vw 1vw;
      width: -webkit-fill-available;
      width: -moz-fill-available;
      width: -o-fill-available;
  }

  .input_text {
      padding: 0.6vw;
      width: 100%;
      border: 0.1vw solid rgba(153, 153, 153, 0.6);
    }

    .width_3 {
        width: 60%;
    }

    .background_quanly {
        color: white;
        margin-bottom: -1px !important;
        border-top-left-radius: 0.5vw;
        border-top-right-radius: 0.5vw;
        background-color: rgba(0, 153, 51, 1);
    }

    

  /*--------------------Di động----------------------------------------------------------------------------------*/
@media screen and (max-width: 780px) {
    .display_flex_column_m_1>div {
        margin-bottom: 3vw;
    }

    .input_submit {
        outline: none;
        text-outline: none;
        background-color: rgba(0, 153, 0, 1);
        color: rgba(255, 255, 255, 1);
        border: none;
        cursor: pointer;
        padding: 2.6vw 3vw 2.6vw 3vw;
        width: -webkit-fill-available;
        width: -moz-fill-available;
        width: -o-fill-available;
    }

    .input_text {
        padding: 1.6vw;
        width: 100%;
        border: 0.1vw solid rgba(153, 153, 153, 0.6);
    }

    .padding_quanly {
        padding: 2vw 2vw 2vw 2vw;
    }

    ol{
        margin: 0 4vw 0 4vw;
    }

    .khung-input_submit{
        width: 60vw;
    }
}
</style>
<div class="display_flex_column_m_1 padding_3 font_ct">
<div class="display_flex_column_m_1 color_den margin_top khungtest">
    <div class="display_flex_w border_bottom">
    	<div class="background_quanly padding_quanly">
        	 <i class="far fa-edit"></i>&ensp;<?php echo $dataa[0]->name; ?>
        </div>
        <div class="display_flex_ce">
        	
        	<i class="far fa-clock"></i>&ensp;<?php echo $dataa[0]->testtime; ?>Phút
            
            &nbsp;/&nbsp;
        	
        	<i class="fas fa-sign-out-alt"></i> Thời gian còn lại&nbsp;
            <span style="color: red;" class="phut"><?php echo $_SESSION['tg']; ?></span>phút&nbsp;
            <span style="color: red;" class="giay"></span>s
            
        </div>          
    </div>

    <ol class="font_ct">
        <?php 
            foreach ($datab as $key => $value) {
                $question=explode('|', $value->question);
        ?>
        <li>
            <?php
            switch($value->kindofquestion){
                case 1:
                    echo $question[0].'<br/>';                 
                    break;
                case 2:
                    echo $question[0].'<br/>';
                    echo "<img src='public/upload/$question[1]' style='height:10vw;' />";
                    break;
                case 3:
                    echo $question[0].'<br/>';
                    echo '<audio controls>';
                    echo " <source src='public/upload/$question[1]' type='audio/mpeg'>";
                    echo '</audio>';
                    break;
                case 4:
                    echo $question[0].'<br/>';
                    echo '<video width="400" controls>';
                    echo "<source src='public/upload/$question[1]' type='video/mp4'>";
                    echo '</video>';
                    break;
                default:
                    $video=$thuvien->goithuvien('thuvienvideo')->youtube($question[1]);
                    echo $question[0].'<br/>';
                    echo "<iframe width='400' height='215' src='https://www.youtube.com/embed/$video' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen>";
                    echo "</iframe>";
            }
            ?>
                <ol style="list-style: upper-alpha;">
                    <?php 
                        foreach (explode('*',$value->answer) as $value1) {    
                        $traloi=explode('|', $value1)                    
                    ?>

                    <li>
                        <input style="cursor: pointer" type="radio" name="giatri<?php echo $value->id; ?>" 
                            value="<?php echo $traloi[1] ?>" 
                            data-id="<?php echo $value->id; ?>" 
                            class="tinhdiem"
                        />
                        &ensp;<?php echo $traloi[0]; ?>
                    </li>
                    <?php
                        }
                    ?>
                   
                </ol>
        </li>
        
        <?php 
            } 
        ?>

    </ol> 
    <div class="khung-input_submit" onclick="window.location.href='testonline/ketqua'">
         <div class="input_submit display_flex_cc" >
            Nộp bài
        </div>  
    </div> 
   
</div>
</div>
<div class="display_flex_column_m_1 font_ct color_trang padding_3">
            <?php require_once "mvc/views/theme/gd000001/cotphai.php"; ?>
</div>
