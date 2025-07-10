 <?php
foreach($thuonghieu1 as $value1){
    if(in_array($value1->id,explode(',',$value->thuonghieu))){
        echo $value1->name.'</br>';
        foreach($thuonghieu2 as $key => $value2){
            if(in_array($value1->id,explode(',',$value2->father_level))){
                if(in_array($value2->id,explode(',',$value->thuonghieu))){
                    echo '&ensp;+&ensp;'.$value2->name.'</br>';
                    foreach($thuonghieu3 as $key => $value3){
                        if(in_array($value2->id,explode(',',$value3->father_level))){
                            if(in_array($value3->id,explode(',',$value->thuonghieu))){
                                echo '&ensp;&emsp;-&ensp;'.$value3->name.'</br>';
                            }
                        }
                    }
                }
            }
        }
    }
}

?>