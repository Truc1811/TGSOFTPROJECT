<?php
class chat extends Controller{
	public $listchatmodel;
	public $chatmodel;
	public $tintucmodel;
	
	function __construct(){

		// tuy bien
		$this->listchatmodel=$this->model('listchatmodel');
		$this->chatmodel=$this->model('chatmodel');
		$this->tintucmodel=$this->model('tintucmodel');
	}
	
	function chao(){
		//quy dinh data
		
	}

	function kiemtra(){
		$kq='false';
		if(@$_SESSION['chat']){
			$kq='true';
		} else {
			if(@$_POST['emailchat'] && @$_POST['dienthoaichat']){
				$_SESSION['chat']=$_POST['emailchat'].','.$_POST['dienthoaichat'];
				$kq='true';
			} else {
				$kq='false';
			}
		}
		echo $kq;
	}

	function thoat(){
		if(@$_SESSION['chat']){
			unset($_SESSION['chat']);
		}
	}

	function ghichat(){
?>
<script type="text/javascript">
$(document).ready(function(){
	$('#chatghi').keypress(function(event) {
	 	if (event.keyCode == 13 || event.which == 13) {
	         //Các câu lệnh Logic sẽ thực hiện ở đây 
	         // alert('moi bam nut enter');
	         $('.guichat').trigger('click');
             
	         event.preventDefault();  //Không cho submit from bạn có thể bỏ nều k cần

	    }
	});

	$('.guichat').click(function(){
	 	
	         var phanloai=1;
	         var content=$('#chatghi').val();
	         $.post(
                        'chat/luuchat', // URL 
                        {'phanloai' : phanloai,'content':content},  // Data
                        function(qa){ // Success
                            // $('.trang_chat').html(kqt);
                            $('#chatghi').val('');
                        }, 
                        'text' // dataTyppe
             );
	});
	var a=0;
	setInterval(function(){
		$.post(
                'chat/kiemhienchat/1', // URL 
                {'b' : 1},  // Data
                function(kt){ // Success
                    if(kt==1){
                        var trangthai=2;
						var phanloai=1;
		                $.post(
		                        'chat/hienchat/1', // URL 
		                        {'trangthai' : trangthai,'phanloai':phanloai},  // Data
		                        function(kqt){ // Success
		                            $('.trang_chat').html(kqt);
		                            var a=$(".dem").outerHeight();
				                    var b=$(".dem").length;
				                    var c=a*b*2;
				                    $(".trang_chat").animate({scrollTop:c}, "slow");
		                        }, 
		                        'text' // dataTyppe
		                );
                    }
                }, 
                'text' // dataTyppe
        );

		
    },1000);

});
</script>

<?php

	}

	function hienchat($d=false){
		$kq=$this->goithuvien('thuviendata26')->bangdata('update');
		if($d==1){

			$id_chat=$_SESSION['chat'];
		} else {
			$id_chat=$_SESSION['adminchat'];
		}
		// $mchat=json_decode($this->listchatmodel->whereod("id_chat='$id_chat'",'timestamp'));
		$mchat=json_decode($this->listchatmodel->whereque("id_chat='$id_chat'"));
		// $mchat=json_decode($this->listchatmodel->selecta());
		foreach ($mchat as $key => $value) {
			if($value->phanloai==2){
?>
			<div class="col-12 d-flex justify-content-start my-1 dem">
				<div class="col-auto p-1 bg-dark text-white rounded" style="max-width: 80%;">
					<?php echo 'Admin&nbsp;: '.$value->content; ?>
				</div>
			</div>

<?php
			} else {
?>
			<div class="col-12 d-flex justify-content-end my-1 dem">
				<div class="col-auto p-1 bg-primary text-white rounded" style="max-width: 80%;">
					<?php echo 'Client&nbsp;: '.$value->content; ?>
				</div>
			</div>
<?php
			}
		}
	}

	function luuchat(){
		$kq=$this->goithuvien('thuviendata26')->bangdata('add');
	}

	function test(){
		$kq=$this->goithuvien('thuviendata26')->bangdata('update');
		echo $_SESSION['adminchat'];
	}

	function kiemhienchat($k){
		if($k==1){
			$id_chat=$_SESSION['chat'];
			$ob=json_decode($this->chatmodel->where("id_chat='$id_chat'"));
			$x=$ob[0]->phanloaic;
		} else {
			$id_chat=$_SESSION['adminchat'];
			$ob=json_decode($this->chatmodel->where("id_chat='$id_chat'"));
			$x=$ob[0]->phanloaia;
		}
		echo $x;
	}


}
?>


