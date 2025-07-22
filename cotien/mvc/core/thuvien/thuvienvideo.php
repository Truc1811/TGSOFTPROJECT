<?php
class thuvienvideo{
	
	function youtube($url){
		$mang=explode('=', $url);		
		return array_pop($mang);
	}
	
}

?>