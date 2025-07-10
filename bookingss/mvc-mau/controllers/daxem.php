<?php
class daxem extends Controller{

   function sanphamdaxem(){
        $mang=$this->data();
        $mang['page']=json_encode('plugin/daxem/sanpham');
        $mang['title_name']=json_encode('Sản phẩm đã xem');
       
        $mid=array();
        if(@$_SESSION['sanphamdaxem']){
            foreach ($_SESSION['sanphamdaxem'] as $key => $value) {
                $mid[]=$key;
            }
            $mang['sanphamdaxem']=$this->model('sanphammodel')->in('id',implode(',', $mid));
        } else {
            $mang['sanphamdaxem']=json_encode(array());
        }
            
        //goi views
        //view
        $this->view('web',$mang);
        
        
    }

    function taodaxem(){
        $id_sp=$_POST['id_sp'];
        if(!$_SESSION['sanphamdaxem'][$id_sp]){
                   $_SESSION['sanphamdaxem'][$id_sp]=$id_sp;
        }
        if(@$_SESSION['sanphamdaxem']){
            $_SESSION['tongxem']=count($_SESSION['sanphamdaxem']);
            echo $_SESSION['tongxem'];
        } else {
            $_SESSION['tongxem']=0;
            echo $_SESSION['tongxem'];
        }

        
    }
    
    
        
}
?>