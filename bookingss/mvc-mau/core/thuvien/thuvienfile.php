<?php
class thuvienfile{

	//tao chuoi ngau nhien
	function randstring($length) {
		//$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
		$chars = "abcdefghijklmnopqrstuvwxyz0123456789";
		$size = strlen( $chars );
		for( $i = 0; $i < $length; $i++ ) {
			$str .= $chars[ rand( 0, $size - 1 ) ];
		 }
		return $str;
	}

	//up file của form
	function image($name){
		$thoi_gian=time();
		if(@$_FILES[$name]["name"]){
			$hinh=$_FILES[$name]["name"];
			$path=$_FILES[$name]["tmp_name"];
			$m=$this->randstring(4);
			$mang=explode('.',$hinh);
			$duoi=array_pop($mang);
			$hinh=$m.$thoi_gian.'.'.$duoi;
			$new_path="public/upload/".$hinh;
			$xet=array('jpg','png','gif','jpeg','mp3','mp4','svg','avif');
			if(in_array($duoi,$xet)){
				if (file_exists($new_path)){
					$hinh=$thoi_gian.$hinh;
					$new_path="public/upload/".$hinh;
					move_uploaded_file($path,$new_path);
				} else {
					move_uploaded_file($path,$new_path);
				}
			} else {
				$hinh='no image';
			}
			
		} else {
			$hinh='no image';
		}
		return $hinh;	
	}

	//up nhiều file của form - them thuoc tinh trong input file multiple="multiple"
	function image_m($namem){
		$name= array();
		$tmp_name= array();
		$mh=array();
		foreach(@$_FILES[$namem]['name'] as $file){
			$name[]=$file;
		}
		foreach(@$_FILES[$namem]['tmp_name'] as $file){
			$tmp_name[]=$file;
		}

		if(count($name)>0){
			for($i=0; $i<count($name); $i++){
					$thoi_gian=time();
					$hinh=$name[$i];
					$path=$tmp_name[$i];
					$m=$this->randstring(4);
					$mang=explode('.',$hinh);
					$duoi=array_pop($mang);
					$hinh=$m.$thoi_gian.'.'.$duoi;
					$new_path="public/upload/".$hinh;
					$xet=array('jpg','png','gif','jpeg','mp3','mp4','svg','avif');
					if(in_array($duoi,$xet)){
						if (file_exists($new_path)){
							$hinh=$thoi_gian.$hinh;
							$new_path="public/upload/".$hinh;
							move_uploaded_file($path,$new_path);
						} else {
							move_uploaded_file($path,$new_path);
						}
					} else {
						$hinh='file_khong_hop_le';
					}
					$mh[]=$hinh;
			}
			return $ch=implode(',', $mh);
		} else {
			return $ch='noimage';	
		}
	}
	
	//up date file của form
	function imageupdate($name,$name1){
		$thoi_gian=time();
		if(@$_FILES[$name]["name"]){
			$hinh=$_FILES[$name]["name"];
			$path=$_FILES[$name]["tmp_name"];
			$m=$this->randstring(4);
			$mang=explode('.',$hinh);
			$duoi=array_pop($mang);
			$hinh=$m.$thoi_gian.'.'.$duoi;
			$new_path="public/upload/".$hinh;
			$xet=array('jpg','png','gif','jpeg','mp3','mp4','svg','avif');
			if(in_array($duoi,$xet)){
				$this->xoafile("public/upload/".$_POST[$name1]);
				if (file_exists($new_path)){
					$hinh=$thoi_gian.$hinh;
					$new_path="public/upload/".$hinh;
					move_uploaded_file($path,$new_path);
				} else {
					move_uploaded_file($path,$new_path);
				}
			} else {
				$hinh=$_POST[$name1];
			}
			
		} else {
			$hinh=$_POST[$name1];
		}
		return $hinh;	
	}
	
	//detele file
	function xoafile($path){
		$kq=true;
		if (file_exists($path)){
			unlink($path);
		} else {
			$kq=false;
		}
		return $kq;
	}

	//kiểm tra file
	function goifile($path){
		if (file_exists($path)){
			require_once $path;
		} else {
			$a=explode('/', $path);
			$a=array_pop($a);
			echo "Lỗi view ! Không tìm thấy file $a. Vui lòng kiểm tra lại đường dẫn $path";
		}
	}

}
?>