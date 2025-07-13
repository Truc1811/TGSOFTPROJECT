
<style type="text/css">
  .giohang_treo{
      position: absolute;
      right: 0px;
      top: 100%;
      width: 30vw;
      z-index: -1;
      opacity: 0;
      transition-duration: 0.3s;
      box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.9);
  }
  .giohang_treo_hover:hover .giohang_treo{
      opacity: 1;
      z-index: 109;
      transition-duration: 0.3s;    
  }
  .btn-cart{
      border: 1px solid #000000;
      color:##000000 !important;
  }

  .btn-check:focus+.btn, .btn:focus {
      outline: 0;
      box-shadow: unset;
  }
  .badge{
    padding: 3px 5px;
    font-weight: 500 !important;
  }
  @media (min-width: 748px){
    .btn-cart{
        border: 1px solid #000000;
        color:#000000 !important;
    }
    
    .btn-check:focus+.btn, .btn:focus {
        outline: 0;
        box-shadow: unset;
    }
  }
  @media (min-width: 1400px) {
    .btn-cart{
        border: 1px solid #000000;
        color: #000000 !important;
    }
    
    .btn-check:focus+.btn, .btn:focus {
        outline: 0;
        box-shadow: unset;
    }
  }
</style>
          <div class="giohang_treo_hover position-relative p-0">
            <button type="button" class="btn p-0" onclick="window.location.href='cart/viewcart'">
              
              <i class="bi bi-bag " style="font-size: 20px"></i>
              <span class="position-absolute top-0 start-75 translate-middle badge rounded-pill bg-danger">
                <div id="cart">
                  <?php echo @$_SESSION['tong']?:0; ?>
                </div>
                <span class="visually-hidden">unread messages</span>
              </span>
            </button>
            <div class="giohang_treo bg-white p-3 d-xxl-block d-md-block d-none">
                <?php 
                  if(@$_SESSION['cart']){
                     $giohangtreo=json_decode($_SESSION['giohangtreo']);
                    
                ?>

                              <div class="row d-flex justify-content-between">
                                  <div class="col-12 px-0">
                                    
                                    <div class="d-flex mw-100 d-xxl-block d-md-block d-none">
                                      <table class="table table-striped">
                                          <thead>
                                          <tr>
                                            
                                           <th style="width: 15%" scope="col" >Ảnh</th>
                                            <th style="width: 35%;" scope="col">Sản phẩm</th>
                                            <th style="width: 15%" scope="col">Giá</th>
                                            <th style="width: 3%" scope="col"></th>
                                            <th scope="col">Tổng</th>
                                            <th style="width: 3%;" scope="col" class="d-flex justify-content-center align-items-center"></th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <?php
                                          $tong=0;
                                          foreach ($giohangtreo as $key => $value) {

                                          ?>

                                          <tr>
                                           <td>
                                            <img class="w-100" src="public/upload/<?php echo $value->image; ?>">
                                           </td>
                                            <td>
                                              <?php 
                                                echo $value->name.'&nbsp;'; 
                                                echo $value->color?:''.'&nbsp;'; 
                                                echo $value->size?:''.'&nbsp;'; 
                                              ?>
                                            </td>
                                            <td>
                                              <?php 
                                              $gia=0;
                                                if($value->discount>0){
                                                  $gia=$value->discount;
                                               } else {
                                                  $gia=$value->price;
                                               }
                                              echo number_format($gia); 

                                              ?>
                                                

                                            </td>
                                            <td><?php echo 'x'.$_SESSION['cart'][$value->id]; ?></td>
                                            <td>
                                              <?php 
                                               echo number_format($_SESSION['cart'][$value->id]*$gia); 
                                                $tong=$tong+$_SESSION['cart'][$value->id]*$gia;
                                                $_SESSION['tonggia']=$tong;
                                              ?>
                                            </td>
                                             <td class="text-center" scope="row" class="text-danger" style="cursor: pointer;" onclick="window.location.href='cart/delete/<?php echo $value->id; ?>'"><span class="badge bg-danger">x</span>
                                           </td>
                                          </tr>
                                          <?php
                                        }
                                          ?>
                                        </tbody>

                                        </table>
                                    </div>
                                   
                                  </div>
                                  <div class="col-12 px-0 ps-md-3 ps-xxl-3">
                                    
                                    <div class="d-flex justify-content-between pt-3 text-danger">
                                      <div>Tổng:</div>
                                      <div class="text-right load_tongphi" data-tong=""><?php echo number_format($tong).' đ'; ?></div>
                                    </div>
                                    <div class="col-12 mt-3 d-flex justify-content-end">
                                       <input type="submit" class="btn click btn-primary  text-uppercase fw-600 d-block me-3" name="" value="Giỏ hàng" onclick="window.location.href='cart/viewcart'" />
                                        <input type="submit" class="btn click btn-primary  text-uppercase fw-600 d-block " name="" value="Thanh toán" onclick="window.location.href='cart/payment'" />
                                     </div>
                                  </div>
                                </div>




                <?php
                  } else {
                      echo 'không có sản phẩm nào';
                  }
                ?>
                  
            </div>
          </div>
