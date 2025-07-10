<?php 
$dm=json_decode($data['dm']);  
$cauhinh=json_decode($data['cauhinh']);  
$goithuvien=new Controller();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="content-language" content="vi" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1">

<base href="<?php echo $dm; ?>"/>
<link rel="icon" href="public/upload/<?php echo $cauhinh[0]->favicon; ?>" />
<link rel="stylesheet" href="css/fontawesome.css"/>
<link rel="stylesheet" href="css/bootstrap-5.1.3.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="css/animate.min.css"/>
<link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
<link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
<link rel="stylesheet" type="text/css" href="css/admin.css?version=<?php echo time(); ?>" />

<script src="public/js/jquery-3.0.0.min.js"></script>
<script src="public/js/bootstrap-5.1.3.js"></script>
<script src="public/js/slider.js"></script>
<script src="public/js/main.js"></script>
<script src="public/js/wow.min.js"></script>
<script language="javascript" type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script> new WOW().init(); </script>

<title>Admin | <?php echo $cauhinh[0]->company_name; ?></title>
</head>

<body class="overflow-hidden">
<div class="container-fluid vh-100 overflow-hidden">
            <?php
                require_once "mvc/views/admin/header.php";
            ?>
        <div class="row overflow-hidden" style="height: 98vh">
            <?php
                require_once "mvc/views/admin/cottrai.php";
                require_once "mvc/views/admin/cotphai.php";
            ?>
        </div>

</div>
</body>
</html>


