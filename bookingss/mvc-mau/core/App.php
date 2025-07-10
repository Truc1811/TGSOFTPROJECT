<?php

//lớp dùng để gọi file trong folder controller -> class trong file controller -> function trong class -> truyền giá trị trên link cho function đó
class App extends Controller{
	protected $controller='vi';//biến dùng gọi file php trong folder controller -> gọi class controller
	protected $action='chao';//biến dùng để gọi function nằm trong class mà biến controller đã gọi
	protected $params=array();//các biến dùng để truyền cho function đã gọi bởi action
	
	//xử lý url
	function __construct(){

			// lấy thông tin url 
			@$uri = $_SERVER['REQUEST_URI'];
			$a=explode('?', $uri);
				@$ma=explode('&', $a[1]);
				$mm=array();
				foreach ($ma as $key => $value) {
					$g=explode('=',$value);
					$ga=$g[0];
					@$gb=$g[1];
					$mm[$ga]=$gb;
				}
				@$taikhoan=$mm['login']?:'';
				@$email=$mm['email']?:'';
				@$name=$mm['server']?:'';
				@$idlenh=$mm['cid']?:'';


			// xử lý thông tin url
			if(@$_GET['url']=='deposit'){
				
				// echo 'rut/'.$uri; //Outputs: URI
				
				header("location:".$this->dm."mt/nap/$taikhoan/$idlenh/$name/$email");
				// echo "<pre>";
				// var_dump($mm);
				// echo "</pre>";
				foreach ($mm as $key => $value) {
					echo $value[0].' : '.$value[1].'<br/><br/>';
				}
			} else if(@$_GET['url']=='withdrawal'){

				header("location:".$this->dm."mt/rut/$taikhoan/$idlenh/$name/$email");
				// echo 'nap/'.$uri; //Outputs: URI
				
			} else {

					// chuyển url thành mảng
					$arr=$this->UrlProcess();

					

					// mặc định action là trang chủ khi không truyền action hay action truyền không đúng
					$_SESSION['mot']='trang-chu';

					//-------------xử lý controller-------------
					if(isset($arr[0])){
						
						$_SESSION['mot']=$arr[0];//param mot
						
						$arr[0]=str_replace('-','',$arr[0]);//bo dau gach bien controller			
						if(file_exists("mvc/controllers/$arr[0].php")){ //kiem tra có file controler hay ko ?
							$this->controller=$arr[0]; //gán thuoc tinh mac dinh cua controller
						}
						unset($arr[0]); //xoa phan tu arr[0]
					}
					require_once "mvc/controllers/$this->controller.php"; //goi file controller
					$this->controller= new $this->controller; //tham chieu hay khởi tạo
					
					//------------------xử lý actions-------------------
					if(isset($arr[1])){
									
						$_SESSION['hai']=$arr[1];
						//hàm kiểm tra xem function có tồn tại trong class đã chỉ định không
						if(method_exists($this->controller,$arr[1])){
							$this->action=$arr[1];
						} 
						
						
						unset($arr[1]);
					}
							
					//-----------------xử lý param---------------------
					if(isset($arr)){
						$this->params=$arr;
					}
					
					// hàm gọi function trong 1 class và truyền biến cho function đã gọi bà param
					call_user_func_array([$this->controller,$this->action],$this->params );
		
			}


	}
	
	function UrlProcess(){
		if(isset($_GET['url'])){
			return explode('/',filter_var(trim($_GET['url'],'/')));			
		}
		
	}
	
	
}
?>