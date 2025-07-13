<?php
if(@$data['meta_keywords']){
	$dataa=json_decode($data['dataa']);
	$meta_keywords=$dataa[0]->meta_keywords;
	$meta_description=$dataa[0]->meta_description;
	$mpage=explode('/', $page);
	$cpage=str_replace('detail','',array_pop($mpage));
	$meta_url=$dm.$cpage.'/'.$dataa[0]->khongdau;
	$meta_image=$dm.'public/upload/'.$dataa[0]->image;
} else {
	$meta_keywords=$cauhinh[0]->meta_keywords;
	$meta_description=$cauhinh[0]->meta_description;
	$meta_url=$dm.'gioi-thieu';
	//$meta_image=$dm.'public/upload/'.$cauhinh[0]->logo;
}
?>
<meta name="description" content="<?php echo $meta_description; ?>" />
<meta name="keywords" content="<?php echo $meta_keywords; ?>" />

<!-- google -->
<meta name="DC.title" content="CFV" />
<meta name="geo.region" content="VN-SG" />
<meta name="geo.placename" content="Ho Chi Minh" />
<meta name="geo.position" content="10.77234;106.687766" />
<meta name="ICBM" content="10.77234, 106.687766" />
<meta name="google-site-verification" content="MSLS0RlecVkOuy66oB7I-tVf6_vAANJ1gjRFGBInnJ4" />


<!-- Twitter Card data -->
<meta name="twitter:card" value="summary"> 
<meta name="twitter:description" content="<?php echo $meta_description; ?>">
<meta name="twitter:image" content="<?php echo $meta_image; ?>"> 

<!-- Open Graph data facebook -->
<meta property="og:title" content="<?php echo $title_name; ?>" />
<meta property="og:type" content="article" /> 
<!-- <meta property="og:url" content="<?php //echo $meta_url; ?>" /> -->
<meta property="og:image" content="<?php echo $meta_image; ?>" /> 
<meta property="og:description" content="<?php echo $meta_description; ?>" />