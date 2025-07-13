<?php
class ajax extends Controller{
	
	public $usermodel;
	public $menumodel;
	public $thuonghieumodel;
	public $dataamodel;
	
	function __construct(){
		$this->usermodel=$this->model('usermodel');//tạo model
		$this->menumodel=$this->model('menumodel');//tạo model
		$this->thuonghieumodel=$this->model('thuonghieumodel');//tạo model
		//$this->usermodel=parent::model('usermodel');
	}


	
	function level(){
		$level=$_POST['giatri'];
		$condition="level<$level";
		if($level==2){
			$menu1=$this->menumodel->whereoa('level=1','rank');
			$menu1=json_decode($menu1);
			foreach($menu1 as $value){
				echo '<div >';
				echo "<input class=\"cursor_pointer mb-3\" type=\"checkbox\" name=\"father_level[]\" value=\"$value->id\" /> ";
				echo '&ensp;'.$value->name;
				echo '</div>';
			}
		} else if($level==3){
			$menu1=$this->menumodel->whereoa('level=1','rank');
			$menu2=$this->menumodel->whereoa('level=2','rank');
			$menu1=json_decode($menu1);
			$menu2=json_decode($menu2);
			foreach($menu1 as $value1){
				echo '<div >';
				echo "<input class=\"cursor_pointer mb-3\" type=\"checkbox\" name=\"father_level[]\" value=\"$value1->id\" /> ";
				echo '&ensp;'.$value1->name;
				echo '</div>';
				foreach($menu2 as $value2){
					if(in_array($value1->id,explode(',',$value2->father_level))){
						echo '<div >';
						echo '&ensp;&ensp;';
						echo "<input class=\"cursor_pointer mb-3\" type=\"checkbox\" name=\"father_level[]\" value=\"$value2->id\" /> ";
						echo '&ensp;'.$value2->name;
						echo '</div>';
					}
				}
			}
		}
	}

	function levelth(){
		$level=$_POST['giatri'];
		$condition="level<$level";
		if($level==2){
			$thuonghieu1=$this->thuonghieumodel->whereoa('level=1','rank');
			$thuonghieu1=json_decode($thuonghieu1);
			foreach($thuonghieu1 as $value){
				echo '<div >';
				echo "<input class=\"cursor_pointer mb-3\" type=\"checkbox\" name=\"father_level[]\" value=\"$value->id\" /> ";
				echo $value->name;
				echo '</div>';
			}
		} else if($level==3){
			$thuonghieu1=$this->thuonghieumodel->whereoa('level=1','rank');
			$thuonghieu2=$this->thuonghieumodel->whereoa('level=2','rank');
			$thuonghieu1=json_decode($thuonghieu1);
			$thuonghieu2=json_decode($thuonghieu2);
			foreach($thuonghieu1 as $value1){
				echo '<div >';
				echo "<input class=\"cursor_pointer mb-3\" type=\"checkbox\" name=\"father_level[]\" value=\"$value1->id\" /> ";
				echo $value1->name;
				echo '</div>';
				foreach($thuonghieu2 as $value2){
					if(in_array($value1->id,explode(',',$value2->father_level))){
						echo '<div >';
						echo '&ensp;&ensp;';
						echo "<input class=\"cursor_pointer mb-3\" type=\"checkbox\" name=\"father_level[]\" value=\"$value2->id\" /> ";
						echo $value2->name;
						echo '</div>';
					}
				}
			}
		}
	}
	
	function kiemtratrung(){
		$phone=$_POST['phone'];
		$model=$_POST['m'];
		$this->dataamodel=$this->model($model);
		if(json_decode($this->dataamodel->wherec("phone='$phone'")>0)){
			echo 'Số điện thoại này đã sử dụng. Vui lòng chọn số phone khác.';
		}
	}

	function loadlopquanly(){
		$id=$_POST['id'];
		$ob=json_decode($this->model('khoahocmodel')->where("id=$id"));
		$pass=$ob[0]->pass;
		$link=$ob[0]->link;
		if($pass!='no'){
			echo "<a href='$link' target='_blank' style='text-decoration:none'>";
			echo '&emsp;&emsp;&emsp;&emsp;Click để vào phòng hoc. ';
			echo '</a>';
			echo 'Mật khẩu phòng học: '.$pass;
		} else {
			echo '&emsp;&emsp;&emsp;&emsp;Lớp đang off do chưa tới giờ học. Bạn vui lòng chỉ truy cập sớm hơn 5 phút trước giờ học.';
		}
		
	}

	function idtinhthanh(){
		$_SESSION['tinhthanh']=$_POST['idth'];
	}

	function idmenu2(){
		$_SESSION['menu2']=$_POST['idmn2'];
	}

	function load_sp(){
		$id_mn=$_POST['id_mn'];
		$mang_sp=json_decode($this->model('sanphammodel')->selecta());
		
		foreach ($mang_sp as $key => $value) {
			if(in_array($id_mn,explode(',',$value->father_level))){
		?>
		<div class="col-md-4 col-12 p-3">
			<div class="card cursor border-0 bg-white" onclick="window.location.href='san-pham/detail/<?php echo $value->khongdau; ?>'">
				
				<img class="w-100" src="public/upload/<?php echo $value->image; ?>" alt="">
				<div class="card-body text-center nen-cam">
					<div class="tieude"><?php echo $value->tieude1; ?></div>
					<div class="pb-3"><?php echo $value->tieude2; ?></div>
					<div class="d-flex align-items-center justify-content-center fw-bold">
						Mua ngay <i class="bi bi-caret-right-fill"></i>
					</div>
				</div>
			</div>
		</div> 
		<?php
		}}
		}

	function loadformspc(){
		$id=$_POST['id'];
		$a=$_POST['a'];
		// lay do day
		$obm=json_decode($this->model('sanphammodel')->where("id='$id'"));
		$mangin=array();		
			$doday=array();
			$thuoctinh=json_decode($this->model('thuoctinhmodel')->selecta());
                foreach ($thuoctinh as $key => $value) {
                    if(in_array($value->id,explode(',',$obm[0]->thuoctinh))){
                        if($value->nhomthuoctinh==11){
                        	$doday[]=array($value->id,$value->name);
                        }
                    }
                }
            $mangin[]=array('Độ dày','doday',$doday);

            // lay kich thuoc
			$kichthuoc=array();
			$thuoctinh=json_decode($this->model('thuoctinhmodel')->selecta());
                foreach ($thuoctinh as $key => $value) {
                    if(in_array($value->id,explode(',',$obm[0]->thuoctinh))){
                        if($value->nhomthuoctinh==4){
                        	$kichthuoc[]=array($value->id,$value->name);
                        }
                    }
                }
            $mangin[]=array('Kích thước','kichthuoc',$kichthuoc);
           
		require "mvc/views/plugin/cart/form_sanphamcon.php";
	}

	function themthenho(){
		$the=$_POST['the'];
		if($the==1){
			unset($_SESSION['the']);
		} else if($the=32) {
			$_SESSION['the']=32;
		} else {
			$_SESSION['the']=64;
		}
	}


}
?>