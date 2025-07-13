<?php
class chayrecord extends Controller{
	
	function __construct(){

		// tuy bien
		//$this->sanphammodel=$this->model('sanphammodel');
	}
	
	function chao(){
		//quy dinh data
		$cr='tintucmodel';

		$datacr=json_decode($this->model($cr)->limit(12));
		$a=rand(0,count($datacr)-1);
?>
<div class="text-white" onclick="window.location.href='tin-tuc/detail/<?php echo $datacr[$a]->khongdau; ?>'">
	>>Tin hot :&nbsp;
	<?php echo $datacr[$a]->name; ?>
</div>

<?php
	}


}
?>


