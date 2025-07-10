<?php
class hopthu extends Controller{
    public $tablename='hopthu';

    function add(){
        $name = $_POST['ten'];
        $email = $_POST['email'];
        $phone = $_POST['sdt'];
        $content = $_POST['noidungf'];
        $timestamp=time();
        $col='name,email,phone,content,timestamp';
        $va="'$name','$email','$phone','$content','$timestamp'";
        $this->insert($col,$va);

    }
    
    
        
}
?>