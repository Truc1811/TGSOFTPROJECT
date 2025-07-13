<?php
$matheme=json_decode($data['matheme']);
$faqs=@json_decode($data['faqs']);
$dm=json_decode($data['dm']);
$cauhinh=json_decode($data['cauhinh']);
@$title_name=json_decode($data['title_name']);
@$mot=$data['mot']?json_decode($data['mot']):'trang-chu';
$page=json_decode($data['page']);
$menu1=json_decode($data['menu1']);
$menu2=json_decode($data['menu2']);
$menu3=json_decode($data['menu3']);
$video_h=@json_decode($data['video_h']);
$thuvien=new Controller();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="content-language" content="vi" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, viewport-fit=cover,user-scalable=no"/>
<meta name="viewport" content="width=device-width, initial-scale=1">


<base href="<?php echo $dm; ?>"/>
<?php require_once "mvc/views/plugin/seo/seo.php"; ?>
<?php require_once "mvc/views/plugin/analyticsgoogle/analyticsgoogle.php"; ?>

<link rel="icon" href="public/upload/<?php echo $cauhinh[0]->favicon; ?>" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="css/animate.min.css"/>
<link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
<link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css?version=<?php echo time(); ?>" />

<!-- <script src="public/js/jquery-3.0.0.min.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="public/js/slider.js"></script>
<script src="public/js/main.js"></script>
<script src="public/js/wow.min.js"></script>
<script language="javascript" type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script> new WOW().init(); </script>

<title><?php echo $title_name; ?></title>
</head>

<body>

    <?php 
        $paget=str_replace('-','',$page);
        if(@$mot){
            
            $p=$mot;
            switch ($p) {
                case 'menu': // danh mục cần thay header và footer
                    // code...
                    require "mvc/views/plugin/header/header_1.php";
                    // require_once "mvc/views/".$paget.".php";
                    require "mvc/views/plugin/footer/footer.php";
                    break;
               
                default :
                    require "mvc/views/plugin/header/header.php";
                    require_once "mvc/views/".$paget.".php";
                    require "mvc/views/plugin/footer/footer.php";
                    break;
                        
            }

        } else{
            require "mvc/views/plugin/header/header.php";
            require_once "mvc/views/".$paget.".php";
            require "mvc/views/plugin/footer/footer.php";
        }
    ?>

     

    

   

</body>
</html>