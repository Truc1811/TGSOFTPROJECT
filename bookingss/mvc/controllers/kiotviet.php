<?php
class kiotviet extends Controller{
	
	private $client_id='00f73b3f-ad57-48d4-9924-1b4fa86bcb54';
	private $secret_key='D98041D6ED6E38991282591F1851AE04DC1676C7';
	public $usermodel;
	public $sanphammodel;
	public $menumodel;
	public $dataamodel;
	public $thuvienchuoi;
	
	function __construct(){
		$this->usermodel=$this->model('usermodel');//tạo model
		$this->menumodel=$this->model('menumodel');//tạo model
		$this->sanphammodel=$this->model('sanphammodel');//tạo model
		$this->thuvienchuoi=$this->goithuvien('thuvienchuoi');
		//$this->usermodel=parent::model('usermodel');
	}

	function get_kiotviet_token($client_id,$secret_key){
	    $curl = curl_init();
	    curl_setopt_array($curl, array(
	      CURLOPT_URL => "https://id.kiotviet.vn/connect/token",
	      CURLOPT_RETURNTRANSFER => true,
	      CURLOPT_ENCODING => "",
	      CURLOPT_MAXREDIRS => 10,
	      CURLOPT_TIMEOUT => 60,
	      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	      CURLOPT_CUSTOMREQUEST => "POST",
	      CURLOPT_POSTFIELDS => "scopes=PublicApi.Access&grant_type=client_credentials&client_id=".$client_id."&client_secret=".$secret_key,
	      CURLOPT_HTTPHEADER => array(
	        "cache-control: no-cache",
	        "content-type: application/x-www-form-urlencoded"
	      ),
	    ));
	    $response = curl_exec($curl);
	    $err = curl_error($curl);
	    curl_close($curl);
	    if ($err) {
	      return false;
	    } else {
	      $response = json_decode($response,true);
	      if( isset($response['access_token']) ){
	        return $response['token_type']." ".$response['access_token'];
	      }
	        return false;
	    }
	}

	function kiotviet_call($retailer,$token,$api_endpoint,$query=array(),$method='GET'){
	    $curl = curl_init();
	    curl_setopt($curl, CURLOPT_URL, "https://public.kiotapi.com".$api_endpoint);
	    curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
	    curl_setopt($curl, CURLOPT_ENCODING, '');
	    curl_setopt($curl, CURLOPT_MAXREDIRS, 10);
	    curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 300);
	    curl_setopt($curl, CURLOPT_TIMEOUT, 300);
	    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);     
	    if ($method != 'GET' && in_array($method, array('POST', 'PUT'))) {
	        if (is_array($query)) $query = json_encode($query);
	        curl_setopt ($curl, CURLOPT_POSTFIELDS, $query);
	    }
	    $header = array(
	        "authorization: ".$token,
	        "cache-control: no-cache",
	        "content-type: application/json",
	        "retailer: ".$retailer
	    );
	    curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
	    $response = curl_exec($curl);       
	    $err = curl_error($curl);
	    curl_close($curl);
	    if ($err) {
	        return false;
	    } else {
	        return $response;
	    }
	} 


	// hàm cập nhật thông tin - $categoryId(id catelory nhóm hàng) - $retail(tên cửa hàng kết nối trong api)
	function capnhat($categoryId,$retail){


	    $token=$this->get_kiotviet_token($this->client_id,$this->secret_key);
	    // $retail='mgstore2605';
	    $query=array();
		
		//update danh mục
		$dm=$this->kiotviet_call($retail,$token,"/categories/$categoryId",$query,$method='GET');
		$dm=json_decode($dm);
		$mang_dm=array();
		if($dm->hasChild){
			foreach ($dm->children as $key => $value) {
				$mang_category=array();
				$mang_category[]=171;
				$id=$value->categoryId;
				$name=$value->categoryName;
				$hasChild=$value->hasChild;
				$level=2;
				$father_level=implode(',',$mang_category);
				$khongdau=$this->thuvienchuoi->khongdau($name);
				$mang_dm[]=array($id,$name,$khongdau,$level,$father_level);
				if($value->hasChild){
					$mang_category[]=$id;
					foreach ($value->children as $key => $value) {
						$id=$value->categoryId;
						$name=$value->categoryName;
						$khongdau=$this->thuvienchuoi->khongdau($name);
						$level=3;
						$father_level=implode(',',$mang_category);
						$mang_dm[]=array($id,$name,$khongdau,$level,$father_level);
						

					}
				}

			}
		}


		// ghi danh mục
		foreach ($mang_dm as $key => $value) {
			$id=$value[0];
			$xet_dm=json_decode($this->menumodel->wherec("id=$id"));
			$name=$value[1];
			$khongdau=$value[2];
			$link='san-pham';
			$rank=1;
			$level=$value[3];
			$father_level=$value[4];
			if($xet_dm>0){
				// $image=$this->goithuvien('thuvienfile')->imageupdate('image','image1');
				$va="name='$name',khongdau='$khongdau',link='$link',rank='$rank',level='$level',father_level='$father_level'";
				$this->menumodel->update($va,"id=$id");

			} else {
				$column='id,name,khongdau,link,rank,level,father_level,hide';
				$va="'$id','$name','$khongdau','$link','$rank','$level','$father_level','1'";
				$this->menumodel->insert($column,$va);
			}
		}

		// // kiểm tra thông tin danh mục
		// $dem=0;
		// foreach ($mang_dm as $key => $value) {
		// 	$dem++;
		// 	echo $dem.' - '.$value[0]." ---- $value[1]----- father level: $value[3] ------ level: $value[2]".'</br>';
		// }

	    //update hàng hóa
	    $solan=$this->kiotviet_call($retail,$token,"/products?categoryId=$categoryId",$query,$method='GET');
		$solan=json_decode($solan);
		$solan_all=ceil($solan->total/100);
		echo $solan->total.'</br>';
		echo $solan_all.'</br>';

		//update hàng hóa
		$mang_hanghoa=array();
		$currentItem=0;
		$mang_data=array();
		for ($i=0; $i<$solan_all ; $i++) { 
			$token=$this->get_kiotviet_token($this->client_id,$this->secret_key);
			$currentItem=$i*100;
			echo $currentItem.'</br>';
		    $kq=$this->kiotviet_call($retail,$token,"/products?pageSize=100&includeInventory=true&categoryId=$categoryId&currentItem=$currentItem",$query,$method='GET');
		    $kq=json_decode($kq);
		    foreach ($kq->data as $key => $value) {
		  //   	echo '<pre>';
				// var_dump($kq->data);
				// echo '</pre>';
		    	$mang_data[]=$value;
		    }

		}
	    foreach ($mang_data as $key => $value) {
	    	$mang_father=array();
	    	$categoryId=$value->categoryId;
	    	$ob_hh=$this->menumodel->where("id=$categoryId");
			$ob_hh=json_decode($ob_hh);
			$mang_father=explode(',', $ob_hh[0]->father_level);
			$mang_father[]=$categoryId;
			$father_level=implode(',', $mang_father);

			if(@$value->images){
				$image=implode(',', $value->images);
			} else {
				$image='';

			}

			$price=$value->basePrice;
	    	$inventories=$value->inventories;
	    	$so_luong=$inventories[0]->onHand;
	    	$id=$inventories[0]->productId;
	    	$sp_name=$value->name;
	    	$sp_mau='';
			$sp_size='';
	    	$description_kiot=$value->description;// mô tả trong kiot
	    	// thuộc tính sản phẩm
	    	if(@$value->attributes){
		    	foreach ($value->attributes as $key => $value) {
			    	if($value->attributeName=='MÀU SẮC'){
			    		$sp_mau=$value->attributeValue;
			    	} else if($value->attributeName=='SIZE') {
			    		$sp_size=$value->attributeValue;
			    	}
		    		
		    	}
	    	}

	    	$khongdau=$this->thuvienchuoi->khongdau($sp_name);

	    	$mang_hanghoa[]=array(
	    		$id,
	    		$sp_name,
	    		$sp_mau,
	    		$sp_size,
	    		$father_level,
	    		$khongdau,
	    		$image,
	    		$so_luong,
	    		$price,
	    		$description_kiot
	    	);
	    }
			
		


		//ghi hàng hóa
		$xet_hh=json_decode($this->sanphammodel->select());
		$mang_kiemtra=array();
		foreach ($xet_hh as $giatri) {
			$mang_kiemtra[]=$giatri->id;
		}

		foreach ($mang_hanghoa as $key => $value) {
			$id=$value[0];
			// $xet_hh=json_decode($this->sanphammodel->wherec("id=$id"));
			$name=$value[1];
			$khongdau=$value[5];
			$meta_description=$value[1];
			$meta_keywords=$value[1];
			$father_level=$value[4];
			$hide=1;
			$timestamp=time();
			$image=$value[6];
			$rank=1;
			$color=$value[2];
			$size=$value[3];
			$price=$value[8]*100/70;
			$discount=$value[8];
			$soluong=$value[7];
			$description_kiot=$value[9];
			if(in_array($id, $mang_kiemtra)){
				// $image=$this->goithuvien('thuvienfile')->imageupdate('image','image1');
				$va="name='$name',khongdau='$khongdau',rank='$rank',father_level='$father_level',meta_description='$meta_description',meta_keywords='$meta_keywords',soluong='$soluong',description_kiot='$description_kiot',image='$image',price='$price',discount='$discount',color='$color',size='$size'";
				$this->sanphammodel->update($va,"id=$id");

			} else {
				$column='id,name,khongdau,meta_description,meta_keywords,father_level,hide,timestamp,image,rank,color,size,price,discount,soluong,description_kiot';
				$va="'$id','$name','$khongdau','$meta_description','$meta_keywords','$father_level','$hide','$timestamp','$image','$rank','$color','$size','$price','$discount','$soluong','$description_kiot'";
				$this->sanphammodel->insert($column,$va);
			}
		}

		//kiểm tra thông tin hàng hóa
		$dem=0;
		foreach ($mang_hanghoa as $key => $ca) {
			$dem++;
			$c_ten=$ca[1];
			echo $dem.' - '.$ca[0].'</br>';
			
		}

	}


}
?>


