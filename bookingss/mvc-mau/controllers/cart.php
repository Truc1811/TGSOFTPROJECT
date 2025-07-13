<?php
class cart extends Controller{
	public $tintucmodel;
	public $sanphammodel;
	public $donhangmodel;
	public $thuvienchuoi;
	public $faqsmodel;
		
	function __construct(){
		$this->tintucmodel=$this->model('tintucmodel');
		$this->sanphammodel=$this->model('sanphammodel');
		$this->donhangmodel=$this->model('donhangmodel');
		$this->thuvienchuoi=$this->thuvien('thuvienchuoi');
		$this->faqsmodel=$this->model('faqsmodel');
	
	}
	
	function chao(){
		// $this->viewcart();
		echo 'chao';
	}

	function addcart(){
		$so=$_POST['so'];
		$id=$_POST['id'];
		if(@$_SESSION['cart'][$id]){
			$_SESSION['cart'][$id]=$_SESSION['cart'][$id]+$so;
		} else {
			$_SESSION['cart'][$id]=$so;

		}
		if(@$_SESSION['the']){
			if($_SESSION['the']==32){
				if(@$_SESSION['cart'][1000215198]){
					$_SESSION['cart'][1000215198]=$_SESSION['cart'][1000215198]+$so;
				} else {
					$_SESSION['cart'][1000215198]=$so;

				}
			} else if($_SESSION['the']==64) {
				if(@$_SESSION['cart'][1000215199]){
					$_SESSION['cart'][1000215199]=$_SESSION['cart'][1000215199]+$so;
				} else {
					$_SESSION['cart'][1000215199]=$so;

				}

			}
		}
		unset($_SESSION['the']);
		
		$_SESSION['tong']=0;
		foreach ($_SESSION['cart'] as $key => $value) {
			$_SESSION['tong']=$_SESSION['tong']+$value;
		}
		echo $_SESSION['tong'];
	}

	function delete($id=false){
		unset($_SESSION['cart'][$id]);
		$_SESSION['tong']=0;
		$mid=array();
		foreach ($_SESSION['cart'] as $key => $value) {
			$_SESSION['tong']=$_SESSION['tong']+$value;
			$mid[]=$key;
		}
		$_SESSION['giohangtreo']=$this->sanphammodel->in('id',implode(',', $mid));
		header("location:".$this->dm."cart/viewcart");
	}

	function viewcart(){
		$mang=$this->data();
		$mang['page']=json_encode('plugin/cart/view');
		$mang['title_name']=json_encode('Đơn hàng');
		$mang['sanphamft']=$this->sanphammodel->getpagerod(1,3);
		$mang['faqs']=$this->faqsmodel->getpagerod(1,3);
		$mid=array();
		if(@$_SESSION['cart']){
			foreach ($_SESSION['cart'] as $key => $value) {
				$mid[]=$key;
			}
			$_SESSION['giohangtreo']=$this->sanphammodel->in('id',implode(',', $mid));
		} else {
			$_SESSION['giohangtreo']=json_encode(array());
		}
		//goi views
		//view
		$this->view('web',$mang);
		
		
	}

	function tramagiamgia(){
		$magiamgia=$_POST['magiamgia'];
		$ob=json_decode($this->model('vouchermodel')->where("ma_code='$magiamgia'"));
		if(count($ob)>0 && $ob[0]->status==2){
			echo 'Tổng( thêm mã giảm giá thành công):';
		} else {
			echo 'Tổng( mã giảm giá bị lỗi)';
		}
	}

	function tonggiamgia(){
		$magiamgia=$_POST['magiamgia'];
		$ob=json_decode($this->model('vouchermodel')->where("ma_code='$magiamgia'"));
		$_SESSION['magiamgia']='khonggiamgia';
		if(count($ob)>0 && $ob[0]->status==2){
				if($ob[0]->type==1){
					$_SESSION['tonggia']=$_SESSION['tonggia']-$ob[0]->giatri;
				} else {
					$_SESSION['tonggia']=round($_SESSION['tonggia']*$ob[0]->giatri/100);
				}
				$_SESSION['magiamgia']=$magiamgia;
		} 
		
		echo number_format($_SESSION['tonggia']).'đ';
	}

	function payment(){
		if(@$_POST['sbcart']){
			$_SESSION['madonhang']=$_POST['sodienthoai'].time();
			$kq=$this->model('donhangmodel')->add();
			$mang=$this->data();
			$mang['title_name']=json_encode('Thanh toán');
			$mang['page']=json_encode('plugin/cart/result');
			$mang['kq']=$kq;
			$mang['title_name']=json_encode('Kết quả đặt hàng');
			$mang['sanphamft']=$this->sanphammodel->getpagerod(1,3);
			unset($_SESSION['magiamgia']);
			unset($_SESSION['cart']);
			unset($_SESSION['tonggia']);
			unset($_SESSION['tong']);
			unset($_SESSION['giohangtreo']);
			//goi views
			//view
			$this->view('web',$mang);
		} else {
			$mang=$this->data();
			$mang['page']=json_encode('plugin/cart/order');
			
			$mid=array();
			if(@$_SESSION['cart']){
				foreach ($_SESSION['cart'] as $key => $value) {
					$mid[]=$key;
				}
				$_SESSION['giohangtreo']=$this->sanphammodel->in('id',implode(',', $mid));
			} else {
				$_SESSION['giohangtreo']=json_encode(array());
			}
			//goi views
			//view
			$this->view('web',$mang);		
		}
		
	}

	function result(){
		
	}

	function baogia(){
		if(@$_POST['ma']){
			$id=$_POST['ma'];
			$ob=json_decode($this->sanphammodel->where("id=$id"));
?>
			<div>
			<img style="width:100%;" src="public/upload/<?php echo $ob[0]->image; ?>"/>
			</div>
			<div class="xep_cot">
				<div class="cl">
			    <?php echo $ob[0]->name; ?>
			    </div>
			    <div class="ct phan_dd">
			    </div>
			    <div class=" ct2 maucdo">
			        <span class="mauc">
			        Giá: 
			        </span>
			        <?php echo number_format($ob[0]->gia).' vnđ'; ?>
				</div>

			<input id="ma_sp" type="hidden" value="<?php echo $ob[0]->id; ?>"/>
			</div>




<?php
		}
	}

	function capnhat(){
		$so=$_POST['so'];
		$id=$_POST['id'];
		$_SESSION['cart'][$id]=$so;
		$mid=array();
		foreach ($_SESSION['cart'] as $key => $value) {
			$mid[]=$key;
		}
		$sanpham=json_decode($this->sanphammodel->in('id',implode(',', $mid)));
		
?>
		<script type="text/javascript">
				$(document).ready(function(){
					$('.ucart').change(function(){
							var so=$(this).val();
							var id=$(this).data('id');
								$.post(
									'cart/update', // URL 
									{'so':so, 'id':id},  // Data
									function(upp){ // Success
										 $('#loadcart').html(upp);
									}, 
									'text' // dataTyppe
					   		);
					});
					$('.ucart').keyup(function(){
							var so=$(this).val();
							var id=$(this).data('id');
								$.post(
									'cart/update', // URL 
									{'so':so, 'id':id},  // Data
									function(upp){ // Success
										 $('#loadcart').html(upp);
									}, 
									'text' // dataTyppe
					   		);
					});
				});


		</script>
		<table border="">
			<tr>
				<th></th>
				<th>Sản phẩm</th>
				<th>Đơn giá</th>
				<th>Số lượng</th>
				<th>Thành tiền</th>
			</tr>
			<?php
			$tong=0;

				foreach($sanpham as $key => $value){
			?>
			<tr>
				<td>
					<a href="cart/delete/<?php echo $value->id; ?>">
						Xóa
					</a>
				</td>
				<td><?php echo $value->name; ?></td>
				<td><?php echo number_format($value->gia).' vnđ'; ?></td>
				<td>
				
					<input type="number" class="ucart" data-id="<?php echo $value->id; ?>"
						value="<?php echo $_SESSION['cart'][$value->id]; ?>"
					/>
				
				</td>
				<td>
					<?php 
						echo number_format($_SESSION['cart'][$value->id]*$value->gia).' vnđ';
						$tong+=$_SESSION['cart'][$value->id]*$value->gia;
					?>
					
				</td>
			</tr>
			<?php
				}
			?>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td><?php echo number_format($tong).' vnđ' ?></td>
			</tr>
		</table>
		
<?php
		
	}

	function cngiohangtreo(){
		if(@$_SESSION['cart']){
				$mid=array();
				foreach ($_SESSION['cart'] as $key => $value) {
					$mid[]=$key;
				}
				$_SESSION['giohangtreo']=$this->sanphammodel->in('id',implode(',', $mid));
				$cart=json_decode($this->sanphammodel->in('id',implode(',', $mid)));
				require "mvc/views/plugin/cart/giohangtreo.php";

		} else {
			echo 'ko sản phẩm';
		}
	}

	function laygia(){
		
		if($_POST['laydoday']){
			$_SESSION['laydoday']='true';
			
		}
		if($_POST['laykichthuoc']){
			$_SESSION['laykichthuoc']='true';
			
		}
		if($_SESSION['laykichthuoc']=='true' && $_SESSION['laydoday']=='true'){
			
			echo 'true';
		} else {
			echo 'false';
		}
	}

	function loadgiakt(){
		$doday=$_POST['doday'];
		$kichthuoc=$_POST['kichthuoc'];
		$sp=$_POST['sp'];
		$mang=$doday.','.$kichthuoc;
		$ob=json_decode($this->model('sanphamconmodel')->where("id_sp=$sp AND thuoctinh='$mang'"));
		require "mvc/views/plugin/cart/loadgiakt.php";
	}

}
?>




