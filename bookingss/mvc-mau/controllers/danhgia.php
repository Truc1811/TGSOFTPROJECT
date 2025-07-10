<?php
class danhgia extends Controller{
    public $tablename='danhgia';
    
    function add(){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $id_sp = $_POST['id'];
        $content = $_POST['content'];
        $timestamp=time();
        $col='name,email,id_sp,content,timestamp';
        $va="'$name','$email','$id_sp','$content','$timestamp'";
        $this->insert($col,$va);
        $danhgia=json_decode($this->model('danhgiamodel')->where("id_sp=$id_sp"));
        
        require "mvc/views/plugin/ajax/danhgia.php";

    }
    
    
        
}
?>