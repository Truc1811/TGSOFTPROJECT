<?php 
    $nhomthuoctinh=json_decode($data['nhomthuoctinh']);
    foreach ($nhomthuoctinh as $key => $valuen) {
        if($value->nhomthuoctinh==$valuen->id){
            echo $valuen->name;
        }
    }
   
?>