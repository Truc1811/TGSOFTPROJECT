<?php
class configurationmodel extends Controller{
	public $tablename='configuration';
	public $kytu;
	public $image;

	function capnhat(){
		$this->kytu=$this->thuvien('thuvienchuoi');
		$this->image=$this->thuvien('thuvienfile');

		$name=$this->kytu->lockytu($_POST['name']);
		$text_ta=$this->kytu->lockytu($_POST['text_ta']);
		$text_tb=$this->kytu->lockytu($_POST['text_tb']);
		$text_tc=$this->kytu->lockytu($_POST['text_tc']);
		$text_td=$this->kytu->lockytu($_POST['text_td']);
		$text_te=$this->kytu->lockytu($_POST['text_te']);
		$text_ca=$this->kytu->lockytu($_POST['text_ca']);
		$text_cb=$this->kytu->lockytu($_POST['text_cb']);
		$text_cc=$this->kytu->lockytu($_POST['text_cc']);
		$text_cd=$this->kytu->lockytu($_POST['text_cd']);
		$text_ce=$this->kytu->lockytu($_POST['text_ce']);
		$text_ia=$this->kytu->lockytu($_POST['text_ia']);
		$text_ib=$this->kytu->lockytu($_POST['text_ib']);
		$text_ic=$this->kytu->lockytu($_POST['text_ic']);
		$text_id=$this->kytu->lockytu($_POST['text_id']);
		$text_ie=$this->kytu->lockytu($_POST['text_ie']);
		
		$image_sla=$this->image->imageupdate('image_sla','image_sla1');
	    $image_slb=$this->image->imageupdate('image_slb','image_slb1');
	    $image_slc=$this->image->imageupdate('image_slc','image_slc1');
	    $image_sld=$this->image->imageupdate('image_sld','image_sld1');
	    $image_sle=$this->image->imageupdate('image_sle','image_sle1');
	    $image_slda=$this->image->imageupdate('image_slda','image_slda1');
	    $image_sldb=$this->image->imageupdate('image_sldb','image_sldb1');
	    $image_sldc=$this->image->imageupdate('image_sldc','image_sldc1');
	    $image_sldd=$this->image->imageupdate('image_sldd','image_sldd1');
	    $image_slde=$this->image->imageupdate('image_slde','image_slde1');
		
	    $image_lheader=$this->image->imageupdate('image_lheader','image_lheader1');
	    $image_lfooter=$this->image->imageupdate('image_lfooter','image_lfooter1');
	    $image_favicon=$this->image->imageupdate('image_favicon','image_favicon1');

	    $image_tca=$this->image->imageupdate('image_tca','image_tca1');
	    $text_tcat=$this->kytu->lockytu($_POST['text_tcat']);
	    $text_tcata=$this->kytu->lockytu($_POST['text_tcata']);
	    $text_tcac=$this->kytu->lockytu($_POST['text_tcac']);
	    $text_tcad=$this->kytu->lockytu($_POST['text_tcad']);

	    $image_tcb=$this->image->imageupdate('image_tcb','image_tcb1');
	    $text_tcbt=$this->kytu->lockytu($_POST['text_tcbt']);
	    $text_tcbta=$this->kytu->lockytu($_POST['text_tcbta']);
	    $text_tcbc=$this->kytu->lockytu($_POST['text_tcbc']);
	    $text_tcbd=$this->kytu->lockytu($_POST['text_tcbd']);

	    $meta_description=$this->kytu->lockytu($_POST['meta_description']);
		$meta_keywords=$this->kytu->lockytu($_POST['meta_keywords']);

		$hotline=$this->kytu->lockytu($_POST['hotline']);
	    $diachi=$this->kytu->lockytu($_POST['diachi']);
	    $bando=$this->kytu->lockytu($_POST['bando']);
	    $google_verify=$this->kytu->lockytu($_POST['google_verify']);

	    $zalo=$this->kytu->lockytu($_POST['zalo']);
	    $momo=$this->kytu->lockytu($_POST['momo']);
	    $facebook=$this->kytu->lockytu($_POST['facebook']);
	    $tiktok=$this->kytu->lockytu($_POST['tiktok']);
	    $email=$this->kytu->lockytu($_POST['email']);
	    $youtube=$this->kytu->lockytu($_POST['youtube']);
	    $twitter=$this->kytu->lockytu($_POST['twitter']);
	    $instagram=$this->kytu->lockytu($_POST['instagram']);

	    $image_th=$this->image->imageupdate('image_th','image_th1');
	    $text_tht=$this->kytu->lockytu($_POST['text_tht']);
	    $text_thc=$this->kytu->lockytu($_POST['text_thc']);

		$id=$_POST['id'];

		$va="
		name='$name',
		image_sla='$image_sla',
		image_slb='$image_slb',
		image_slc='$image_slc',
		image_sld='$image_sld',
		image_sle='$image_sle',
		image_slda='$image_slda',
		image_sldb='$image_sldb',
		image_sldc='$image_sldc',
		image_sldd='$image_sldd',
		image_slde='$image_slde',
		text_ta='$text_ta',
		text_tb='$text_tb',
		text_tc='$text_tc',
		text_td='$text_td',
		text_te='$text_te',
		text_ca='$text_ca',
		text_cb='$text_cb',
		text_cc='$text_cc',
		text_cd='$text_cd',
		text_ce='$text_ce',
		text_ia='$text_ia',
		text_ib='$text_ib',
		text_ic='$text_ic',
		text_id='$text_id',
		text_ie='$text_ie',
		image_lheader='$image_lheader',
	    image_lfooter='$image_lfooter',
	    image_favicon='$image_favicon',
	    image_tca='$image_tca',
	    text_tcat='$text_tcat',
	    text_tcata='$text_tcata',
	    text_tcac='$text_tcac',
	    text_tcad='$text_tcad',
	    image_tcb='$image_tcb',
	    text_tcbt='$text_tcbt',
	    text_tcbta='$text_tcbta',
	    text_tcbc='$text_tcbc',
	    text_tcbd='$text_tcbd',
	    meta_description='$meta_description',
		meta_keywords='$meta_keywords',
		hotline='$hotline',
	    diachi='$diachi',
	    bando='$bando',
	    google_verify='$google_verify',
	    zalo='$zalo',
	    momo='$momo',
	    facebook='$facebook',
	    tiktok='$tiktok',
	    email='$email',
	    youtube='$youtube',
	    twitter='$twitter',
	    instagram='$instagram',
	    image_th='$image_th',
	    text_tht='$text_tht',
	    text_thc='$text_thc'
		";
		return $this->update($va,"id=$id");
			

	}

}
?>