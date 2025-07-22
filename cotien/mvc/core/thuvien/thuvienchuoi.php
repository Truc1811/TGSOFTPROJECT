<?php
class thuvienchuoi{
	
	//chuyen khong dau
	function khongdau($str){ 
		$unicode = array( 
			  'a'=>'á|à|ả|ã|ạ|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ', 
			  'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ằ|Ẳ|Ẵ|Ặ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ', 
			  'd'=>'đ', 
			  'D'=>'Đ', 
			  'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ', 
			  'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ', 
			  'i'=>'í|ì|ỉ|ĩ|ị',       
			  'I'=>'Í|Ì|Ỉ|Ĩ|Ị', 
			  'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ', 
			  'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ', 
			  'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự', 
			  'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự', 
			  'y'=>'ý|ỳ|ỷ|ỹ|ỵ', 
			  'Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ' 
		); 
		$str=trim($str);
		foreach($unicode as $khongdau=>$codau) { 
			  $arr=explode("|",$codau); 
			  $str = str_replace($arr,$khongdau,$str); 
		} 
		$str = mb_strtolower($str, 'UTF-8');
		$str = str_replace(' ','-',$str);
		$str =str_replace('"','-',$str); 
		$str =str_replace("'",'-',$str);
		$str =str_replace(",",'-',$str); 
		$str =str_replace("+",'-',$str);
		$str =str_replace("?",'',$str);
		$str =str_replace("/",'-',$str); 
		$str =str_replace("&",'-',$str); 
		return $str; 
	}
	
	// cắt chuỗi
	function catchuoi($str,$n,$c){
		$str=explode(' ',$str);
		$mang=array();
		if(count($str)>$n){
			for($i=0;$i<$n;$i++){
				$mang[]=$str[$i];
			}
			$mang=implode(' ',$mang).$c;
			return $mang;
		} else {
			foreach($str as $value){
				$mang[]=$value;
			}
			$mang=implode(' ',$mang);
			return $mang;
		}
	}

	//cắt ký tự
	function catkytu($str,$start,$n,$chuoi){
		if(strlen($str)>=$n){
			$mang=substr($str,$start,$n).$chuoi;
			return $mang;
		} else {
			return $str;
		}
	}
	
	//lọc ký tự đặc biệt nhận từ form
	function lockytu($str){ 
		$unicode = array( 
			  '&#34;'=>'"', 
			  '&#39;'=>"'",
			  '&#63;'=>'?',
			  '&#33;'=>'!',
			  '&#47;'=>'/',
			  '&#60;'=>'<',
			  '&#62;'=>'>',
			  '&#40;'=>'(',
			  '&#41;'=>')',
			  '&#123;'=>'{',
			  '&#125;'=>'}',

		); 
		$str=trim($str);
		foreach($unicode as $khongdau=>$codau) { 
			  $arr=explode("|",$codau); 
			  $str = str_replace($arr,$khongdau,$str); 
		} 
		return $str; 
	}
}

?>