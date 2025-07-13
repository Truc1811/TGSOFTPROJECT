 <?php
                            $menu1=json_decode($data['menu1']);
                            $menu2=json_decode($data['menu2']);
                            $menu3=json_decode($data['menu3']);
                            $menu_id=1;
                            foreach($menu1 as $value1){
                                if($value1->khongdau=='san-pham'){
                                    $menu_id=$value1->id;
                            ?>
                            <div class="form-check py-1">
                                <!-- <input class="form-check-input" type="checkbox" value="<?php echo $value1->id; ?>" id="<?php echo 'f'.$value1->id; ?>" name="father_level[]"> -->
                                <label class="form-check-label" for="<?php echo 'f'.$value1->id; ?>">
                                <?php echo $value1->name; ?>
                                </label>
                            </div>
                                    <?php
                                    foreach($menu2 as $value2){
                                        if(in_array($value1->id,explode(',',$value2->father_level))){
                                    ?>
                                    <div class="form-check py-1 ps-5 d-flex justify-content-between">
                                        <div>
                                            <input class="form-check-input" type="checkbox" value="<?php echo $value2->id; ?>" id="<?php echo 'f'.$value2->id; ?>" name="father_level[]">
                                            <label class="form-check-label" for="<?php echo 'f'.$value2->id; ?>">
                                            <?php echo $value2->name; ?>
                                            </label>
                                            
                                        </div>
                                        <div class="btn btn-primary btn-sm man_sua" 
                                            data-id="<?php echo $value2->id; ?>" 
                                            data-name="<?php echo $value2->name; ?>"
                                            data-rank="<?php echo $value2->rank; ?>"
                                            data-bs-toggle="modal" data-bs-target="#newsuaModal"
                                        >
                                            <i class="bi bi-pencil-square"></i>
                                        </div>
                                    </div>
                                            <?php
                                            foreach($menu3 as $value3){

                                                if(in_array($value2->id,explode(',',$value3->father_level))){
                                            ?>
                                            <div class="form-check py-1 ps-5 ms-4">
                                                <input class="form-check-input" type="checkbox" value="<?php echo $value3->id; ?>" id="<?php echo 'f'.$value3->id; ?>" name="father_level[]">
                                                <label class="form-check-label" for="<?php echo 'f'.$value3->id; ?>">
                                                <?php echo $value3->name; ?>
                                                </label>
                                            </div>
                                            
                            <?php
                            }}}}}}
                            ?>
                                    <script>
                                        $(document).ready(function(){
                                            $('.s_menu').click(function(){
                                                var id=$('#id').val();
                                                var name=$('#name').val();
                                                var rank=$('#rank').val();
                                                $.post(
                                                        'ajax/load_menu', // URL 
                                                        {
                                                            'id' : id,
                                                            'name': name,
                                                            'rank':rank
                                                        },  // Data
                                                        function(kqt){ // Success
                                                            $('.load_menu').html(kqt);
                                                        }, 
                                                        'text' // dataTyppe
                                                );
                                            });
                                            $('.man_sua').click(function(){
                                                var id=$(this).data('id');
                                                var name=$(this).data('name');
                                                var rank=$(this).data('rank');
                                                $('#suaid').val(id);
                                                $('#suaname').val(name);
                                                $('#suarank').val(rank);
                                            });

                                            $('.sua_menu').click(function(){
                                                var id=$('#suaid').val();
                                                var name=$('#suaname').val();
                                                var rank=$('#suarank').val();
                                                $.post(
                                                        'ajax/sua_menu', // URL 
                                                        {
                                                            'id' : id,
                                                            'name': name,
                                                            'rank':rank
                                                        },  // Data
                                                        function(kqt){ // Success
                                                            $('.load_menu').html(kqt);
                                                        }, 
                                                        'text' // dataTyppe
                                                );
                                            });
                                        });

                                    </script>
