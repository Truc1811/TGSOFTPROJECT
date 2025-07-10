<?php 
$donhang=json_decode($data['donhang']);
?>
<style type="text/css">
		
	@media (min-width: 768px){
		
	}
	@media (min-width: 1400px){
		
	}
</style>
<div class="row p-7 my-4" style="overflow-x:auto;">
    <table class="table table-striped table-hover table-bordered table-responsive">
        <thead>
                <tr>
                    <th class="align-middle text-center" scope="col">
                        STT
                    </th>
                    <th scope="col">
                        Mã đơn hàng
                    </th>
                    <th scope="col">
                        Thông tin sản phẩm
                    </th>
                    <th scope="col">
                        Ngày đặt
                    </th>
                    <th class="text-center" scope="col">
                        Trạng thái
                    </th>
                </tr>
        </thead>
        <tbody>
             <?php
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $menu1=json_decode($data['menu1']);
            $menu2=json_decode($data['menu2']);
            $menu3=json_decode($data['menu3']);
            $mang=json_decode($data['dataa']);
             $tt=" ";
             $i=0;
             $mang_u=explode('|',$_COOKIE['hoivien']);
            foreach($donhang as $value){
            	$i++;
	             $c=explode('phancach', $value->customer);
	             $mp=explode('|', $value->product);
	            
	             if($c[7]==1){
	                $tt="Chuyển khoản ngân hàng";
	             }elseif ($c[7]==2) {
	                 $tt="Qua ví điện tử";
	             }else{
	                $tt="Trả tiền mặt khi nhận hàng";
	             }
	             if($mang_u[2]==$c[2]){
            ?>
            <tr>
                <td class="align-middle text-center" scope="row">
                    <?php echo $i; ?>
                </td>
                <td class="align-middle text-nowrap" scope="row">
                    <?php 
                    echo $value->madonhang;
                    
                    
                    ?>
                </td>
                <td class="align-middle text-nowrap" scope="row">

                    <?php
                        echo '- Sản phẩm: </br>';
                        foreach ($mp as $k => $vap) {
                            $p=explode(',',$vap);
                           
                                echo '&ensp;+ '.$p[1];
                                echo '&ensp;x'.$p[2];
                                echo '&ensp;('.number_format($p[3]).' đ)</br>';
                         }

                        echo '- Ghi chú: '.$c[5].'</br>';
                        echo '- Phương thức thanh toán: '.$tt.'</br>';
                        echo '- Địa chỉ: '.$c[1].'</br>';
	                    echo '- Tỉnh/Thành phố: '.$c[4].'</br>';
                    ?>
                </td>
                <td class="align-middle text-center" scope="row">
                    <?php require "mvc/views/plugin/admin/default/postday.php"; ?>
                </td>
                <td class="align-middle text-center" scope="row">
                   <?php 
                        if($value->status==1) {
                            echo "Chờ duyệt";
                        }elseif($value->status==2) {
                            echo "Đã xác nhận";
                        }elseif($value->status==3){
                            echo " Đang giao hàng";
                        }elseif($value->status==4){
                             echo "Đã giao thành công";
                        }else{
                            echo "Đã hủy";
                        }

                    ?>
                </td>
            </tr>
            <?php
                }}
            ?>
        </tbody>
    </table>
</div>
