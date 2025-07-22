<style>
    .wallet-card {
        background: #5e5ce6;
        color: white;
        border-radius: 10px;
        padding: 2rem;
    }

    .crypto-card {
        background: white;
        border-radius: 10px;
        padding: 2rem;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
    }

    .btn-purple {
        background-color: #6f42c1;
        color: white;
    }

    .btn-purple:hover {
        background-color: #5a32a3;
        color: white;
    }
</style>



<?php 
$balance= json_decode($data['wallet']);
// $transaction=json_decode($data['transaction'],true);
// $data['transactions'] = '[
// {"type":"deposit","amount":"1000000","created_at":"2025-07-20"},
// {"type":"withdraw","amount":"500000","created_at":"2025-07-19"},
// {"type":"deposit","amount":"2000000","created_at":"2025-07-18"},
// {"type":"withdraw","amount":"1000000","created_at":"2025-07-17"},
// {"type":"deposit","amount":"3000000","created_at":"2025-07-16"},
// {"type":"withdraw","amount":"1500000","created_at":"2025-07-15"},
// {"type":"deposit","amount":"4000000","created_at":"2025-07-14"},
// {"type":"withdraw","amount":"200000","created_at":"2025-07-13"},
// {"type":"investment","amount":"2500000","created_at":"2025-07-12"},
// {"type":"withdraw","amount":"300000","created_at":"2025-07-11"},
// {"type":"deposit","amount":"3500000","created_at":"2025-07-10"},
// {"type":"interest","amount":"400000","created_at":"2025-07-09"},
// {"type":"deposit","amount":"1500000","created_at":"2025-07-08"},
// {"type":"withdraw","amount":"700000","created_at":"2025-07-07"},
// {"type":"deposit","amount":"5000000","created_at":"2025-07-06"},
// {"type":"withdraw","amount":"800000","created_at":"2025-07-05"},
// {"type":"deposit","amount":"6000000","created_at":"2025-07-04"},
// {"type":"withdraw","amount":"100000","created_at":"2025-07-03"},
// {"type":"deposit","amount":"700000","created_at":"2025-07-02"},
// {"type":"interest","amount":"900000","created_at":"2025-07-01"},
// {"type":"deposit","amount":"800000","created_at":"2025-06-30"},
// {"type":"investment","amount":"1000000","created_at":"2025-06-29"},
// {"type":"deposit","amount":"2000000","created_at":"2025-06-28"},
// {"type":"withdraw","amount":"1200000","created_at":"2025-06-27"},
// {"type":"repayment","amount":"300000","created_at":"2025-06-26"},
// {"type":"investment","amount":"600000","created_at":"2025-06-25"},
// {"type":"interest","amount":"400000","created_at":"2025-06-24"},
// {"type":"repayment","amount":"500000","created_at":"2025-06-23"},
// {"type":"deposit","amount":"1000000","created_at":"2025-06-22"},
// {"type":"withdraw","amount":"1300000","created_at":"2025-06-21"}
// ]';
$transaction = json_decode($data['transactions'], true);
// echo '
// <pre>';
// var_dump($transaction);
// echo '</pre>';


$total_deposit=0;
$total_withdraw=0;
$total_investment=0;
$total_interest=0;
$total_repayment=0;

?>

<div class="container-fluid">
    <div id="message"></div>
</div>

<div class="p-6 col-12 d-flex flex-wrap overflow-auto align-items-start scrollbar bg-light" style="height:86vh">
    <!---- khung -->
    <div class="col-12 col-md-12 d-flex flex-wrap">

        <div class="container mt-4">
            <h3><strong>Ví điện tử</strong><small class="text-muted ms-2">Quản lý tài chính và giao dịch của bạn
                    trên nền tảng Cotien</small></h3>

            <!-- Ví chính -->
            <div class="wallet-card mt-4">
                <div class="d-flex align-items-center">
                    <div class="me-3">
                        <div class="bg-white text-primary rounded-circle d-flex justify-content-center align-items-center"
                            style="width:50px; height:50px;">
                            <i class="bi bi-wallet2 fs-4"></i>
                        </div>
                    </div>
                    <div>
                        <div>Số dư ví chính</div>
                        <h3 class="fw-bold" id="currentBalance"><?php echo number_format($balance, 2, ',', '.'); ?> VND
                        </h3>
                    </div>
                </div>
                <div class="mt-3 d-flex gap-2">
                    <button class="btn btn-purple" data-bs-toggle="modal" data-bs-target="#nap">+ Nạp tiền</button>
                    <div class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#rut">→
                        Rút
                        tiền</div>
                    <button class="btn btn-success"><i class="bi bi-code-slash"></i> API</button>
                </div>
            </div>

            <!-- Ví Crypto -->
            <div class="crypto-card mt-4" style="display:none">
                <div class="d-flex align-items-center">
                    <div class="me-2">
                        <i class="bi bi-ethereum fs-4 text-dark"></i>
                    </div>
                    <div>
                        <div class="text-muted">Ví Crypto</div>
                        <h4 class="fw-bold mb-0">9.300.000 VND</h4>
                    </div>
                </div>
                <div class="mt-3 d-flex gap-2">
                    <button class="btn btn-purple">+ Nạp Crypto</button>
                    <button class="btn btn-outline-primary">→ Rút Crypto</button>
                    <button class="btn btn-success">⇄ Swap</button>
                </div>
            </div>

        </div>

        <?php
$mang_tien = [
    ['bi bi-cash-stack', 'Tổng đã nạp', '30,000,000 VND'],
    ['bi bi-arrow-left-right', 'Tổng đã rút', '5,700,000 VND'],
    ['bi bi-pie-chart', 'Đã đầu tư', '25,000,000 VND'],
    ['bi bi-coin', 'Lợi nhuận nhận được', '3,750,000 VND']
];

$mang_nganhang = [
    ['bi bi-bank', 'Liên kết ngân hàng'],
    ['bi bi-upc-scan', 'Quét mã QR'],
    ['bi bi-arrow-left-right', 'Chuyển tiền'],
    ['bi bi-file-earmark-bar-graph', 'Xuất báo cáo'],
    ['bi bi-ethereum', 'Kết nối ví Web3'],
    ['bi bi-currency-bitcoin', 'Thanh toán crypto']
]

?>
        <div class="container my-4">

            <!-- Row: Tổng quan -->
            <div class="row g-3 mb-4">
                <?php foreach ($transaction as $key => $t) { 
        // Cộng dồn từng loại giao dịch
        if ($t['type'] == 'deposit') {
            
            $total_deposit += $t['amount'];
        } elseif ($t['type'] == 'withdraw') {
            $total_withdraw += $t['amount'];
        } elseif ($t['type'] == 'investment') {
            $total_investment += $t['amount'];
        } elseif ($t['type'] == 'interest') {
            $total_interest += $t['amount'];
        } elseif ($t['type'] == 'repayment') {
            $total_repayment += $t['amount'];
        }
    ?>

                <?php   } ?>
            </div>


            <!-- Row: Tổng quan -->
            <div class="row g-3 mb-4">

                <div class="col-md-3 col-sm-6">
                    <div class="bg-light rounded-3 p-3 shadow-sm">
                        <div class="d-flex align-items-center">
                            <i class="fa-solid fa-arrow-down text-success"></i>
                            <div>
                                <small class="d-block">Tổng số tiền đã nạp</small>
                                <strong><?php echo number_format($total_deposit, 2, ',', '.') ?></strong>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="bg-light rounded-3 p-3 shadow-sm">
                        <div class="d-flex align-items-center">
                            <i class="fa-solid fa-arrow-up text-danger"></i>
                            <div>
                                <small class="d-block">Tổng số tiền đã rút</small>
                                <strong><?php echo number_format($total_withdraw, 2, ',', '.') ?></strong>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="bg-light rounded-3 p-3 shadow-sm">
                        <div class="d-flex align-items-center">
                            <i class="fa-solid fa-coins text-warning"></i>
                            <div>
                                <small class="d-block">Tổng số tiền đã đầu tư</small>
                                <strong><?php echo number_format($total_investment, 2, ',', '.') ?></strong>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="bg-light rounded-3 p-3 shadow-sm">
                        <div class="d-flex align-items-center">
                            <i class="fa-solid fa-piggy-bank text-primary"></i>
                            <div>
                                <small class="d-block">Tổng số tiền vay</small>
                                <strong><?php echo number_format($total_repayment, 2, ',', '.') ?></strong>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <!-- Row: Chức năng -->
            <div class="row g-3">
                <?php foreach ($mang_nganhang as $key => $valnh) { ?>
                <div class="col-md-3 col-sm-6">
                    <div class="bg-light text-center p-4 rounded-3 shadow-sm">
                        <div class="rounded-circle d-inline-flex align-items-center justify-content-center mb-2"
                            style="width: 50px; height: 50px;">
                            <i class="<?php echo $valnh[0] ?> fs-4 text-primary"></i>
                        </div>
                        <div><?php echo $valnh[1] ?></div>
                    </div>
                </div>
                <?php   } ?>
            </div>

        </div>

        <?php
$mang_lichsu = [
    ['bg-success', 'bi bi-plus-lg', 'Nạp tiền vào ví', '10/05/2025 - 14:15', '+20,000,000 VND', 'Chuyển khoản ngân hàng'],
    ['bg-primary', 'bi bi-arrow-up-right', 'Đầu tư dự án Tech Innovation', '15/05/2025 - 10:30', '-10,000,000 VND', 'Ví điện tử'],
    ['bg-success', 'bi bi-arrow-down-left', 'Lợi nhuận từ dự án Coffee Shop', '01/05/2025 - 16:20', '+1,750,000 VND', 'Lợi nhuận tự động'],
    ['bg-primary', 'bi bi-arrow-up-right', 'Đầu tư dự án Green Farm', '01/05/2025 - 09:45', '-5,000,000 VND', 'Ví điện tử'],
    ['bg-warning', 'bi bi-dash-lg', 'Rút tiền về tài khoản', '15/04/2025 - 11:30', '-7,500,000 VND', 'Chuyển khoản ngân hàng'],
    ['bg-success', 'bi bi-plus-lg', 'Nạp tiền vào ví', '15/06/2025 - 14:15', '+15,000,000 VND', 'Chuyển khoản ngân hàng'],

];


?>
        <div class="container my-4">
            <div class="bg-white p-4 rounded-3 shadow-sm">

                <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap">
                    <h5 class="mb-3 mb-md-0 fw-bold">Lịch sử giao dịch</h5>
                    <div class="d-flex gap-2">
                        <select class="form-select" style="min-width: 150px;">
                            <option selected>Loại giao dịch</option>
                            <option>Tất cả</option>
                            <option>Nạp</option>
                            <option>Rút</option>
                            <option>Đầu tư</option>
                        </select>
                        <select class="form-select" style="min-width: 150px;">
                            <option selected>Thời gian</option>
                            <option>7 ngày qua</option>
                            <option>1 tháng</option>
                            <option>3 tháng</option>
                        </select>
                    </div>
                </div>

                <!-- Danh sách giao dịch -->
                <ul class="list-group list-group-flush">
                    <!-- Loop through each transaction -->
                    <?php foreach ($transaction as $key => $t) : ?>
                    <!-- Transaction item -->
                    <?php 
                  $amountPrefix='';
                  if($t['type']==='deposit'){
                    $amountPrefix='+';
                    $color='bi bi-plus-lg ';
                    $bg='bg-success';
                  }else if($t['type']==='withdraw'){
                    $amountPrefix='-';
                    $color='bi bi-dash-lg ';
                    $bg='bg-danger';
                  }else if($t['type']==='investment'){
                    $amountPrefix='-';
                    $color='bi bi-arrow-up-right ';
                    $bg='bg-primary';
                  }
                    else if($t['type']==='repayment'){
                    $amountPrefix='-';
                    $color='bi bi-arrow-up-right ';
                    $bg='bg-warning';
                  }else if($t['type']==='interest'){
                    $amountPrefix='-';
                    $color='bi bi-arrow-down-left ';
                    $bg='bg-danger';
                  }



                    ?>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="d-flex align-items-start">
                            <div class="me-3 mt-1">
                                <div class="<?= $bg;?> text-white rounded-circle d-flex justify-content-center align-items-center"
                                    style="width: 24px; height: 24px;">
                                    <i class="<?php echo $color; ?>"></i> <!-- Use the color variable -->
                                    <!-- FontAwesome icon -->
                                </div>
                            </div>
                            <div>
                                <div class="fw-semibold"><?php echo htmlspecialchars($t['type']); ?></div>
                                <div class="text-muted small">
                                    <?php $datetime = new DateTime($t['created_at']); echo htmlspecialchars($datetime->format('Y-m-d H:i:s')); ?>
                                </div>

                            </div>
                        </div>
                        <div class="text-end">
                            <div id="desposit-withdraw"
                                class=" fw-bold text-<?php echo ($amountPrefix == '+') ? 'success' : 'danger'; ?>">
                                <?php echo $amountPrefix . number_format($t['amount'], 0, ',', '.') . ' VND'; ?>
                            </div>
                            <div class="text-muted small">
                                <?php echo htmlspecialchars($t['description']); ?>
                            </div>
                        </div>
                    </li>
                    <?php endforeach; ?>
                </ul>

                <!-- Pagination -->
                <div class="d-flex justify-content-center mt-4">
                    <nav>
                        <ul class="pagination">
                            <li class="page-item disabled"><a class="page-link">‹</a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">›</a></li>
                        </ul>
                    </nav>
                </div>

            </div>
        </div>

        <?php

$mang_thanhtoan = [
    ['bi bi-bank', 'Ngân hàng Vietcombank', '**** **** **** 5678', 'Nguyễn Văn A &nbsp;&nbsp; Hết hạn: 10/28', '<span class="badge bg-primary mb-2">Mặc định</span>', 'bi bi-pencil', 'bi bi-trash', '', ''],
    ['bi bi-credit-card', 'Thẻ tín dụng VISA', '**** **** **** 1234', 'Nguyễn Văn A &nbsp;&nbsp; Hết hạn: 05/28', '', 'bi bi-pencil', 'bi bi-trash', 'bi bi-star', 'btn-light border'],
    ['bi bi-phone', 'Ví MoMo', '090 **** 789', 'Nguyễn Văn A', '', 'bi bi-pencil', 'bi bi-trash', 'bi bi-star', 'btn-light border'],
]

?>
        <div class="container my-4">
            <div class="bg-white p-4 rounded-3 shadow-sm">

                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h5 class="fw-bold">Phương thức thanh toán</h5>
                    <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#addPaymentModal">
                        <i class="bi bi-plus-lg me-1"></i> Thêm mới
                    </button>
                </div>

                <!-- Danh sách phương thức -->
                <div class="list-group">

                    <!-- Item: Vietcombank - Mặc định -->
                    <div class="list-group">
                        <?php foreach ($mang_thanhtoan as $key => $valtt) { ?>
                        <!-- Item: Vietcombank - Mặc định -->
                        <div class="list-group-item d-flex justify-content-between align-items-start border border-primary bg-light-subtle rounded-3 mb-3 px-3 py-3"
                            style="border-width: 2px;">
                            <div class="d-flex">
                                <div class="me-3">
                                    <div class="bg-light rounded p-2">
                                        <i class="<?php echo $valtt[0] ?> fs-4 text-secondary"></i>
                                    </div>
                                </div>
                                <div>
                                    <div class="fw-semibold"><?php echo $valtt[1] ?></div>
                                    <div class="text-muted small"><?php echo $valtt[2] ?></div>
                                    <div class="text-muted small"><?php echo $valtt[3] ?></div>
                                </div>
                            </div>
                            <div class="text-end">
                                <?php echo $valtt[4] ?>
                                <div class="d-flex gap-2">
                                    <button class="btn btn-light border"><i
                                            class="<?php echo $valtt[5] ?>"></i></button>
                                    <button class="btn btn-light border"><i
                                            class="<?php echo $valtt[6] ?>"></i></button>
                                    <button class="btn <?php echo $valtt[8] ?>"><i
                                            class="<?php echo $valtt[7] ?>"></i></button>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>



                </div>

            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="addPaymentModal" tabindex="-1" aria-labelledby="addPaymentModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content border-0 rounded-4">
                    <div class="modal-header">
                        <h5 class="modal-title fw-bold" id="addPaymentModalLabel">Thêm phương thức thanh toán</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Đóng"></button>
                    </div>
                    <div class="modal-body">

                        <!-- Tabs -->
                        <div class="d-flex justify-content-between mb-4">
                            <button class="btn w-100 me-2 border border-primary active" data-bs-toggle="tab"
                                data-bs-target="#bankTab">
                                <i class="bi bi-bank me-1"></i> Tài khoản ngân hàng
                            </button>
                            <button class="btn w-100 me-2 border" data-bs-toggle="tab" data-bs-target="#creditTab">
                                <i class="bi bi-credit-card me-1"></i> Thẻ tín dụng/ghi nợ
                            </button>
                            <button class="btn w-100 border" data-bs-toggle="tab" data-bs-target="#walletTab">
                                <i class="bi bi-wallet2 me-1"></i> Ví điện tử
                            </button>
                        </div>

                        <div class="tab-content">
                            <!-- Tab: Ngân hàng -->
                            <div class="tab-pane fade show active" id="bankTab">
                                <form>
                                    <div class="mb-3">
                                        <label class="form-label">Tên ngân hàng</label>
                                        <select class="form-select">
                                            <option selected>Chọn ngân hàng</option>
                                            <option value="vcb">Vietcombank</option>
                                            <option value="vtb">Vietinbank</option>
                                            <option value="acb">ACB</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Số tài khoản</label>
                                        <input type="text" class="form-control" placeholder="Nhập số tài khoản">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Tên chủ tài khoản</label>
                                        <input type="text" class="form-control" placeholder="Nhập tên chủ tài khoản">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Chi nhánh (tùy chọn)</label>
                                        <input type="text" class="form-control" placeholder="Nhập chi nhánh ngân hàng">
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" id="setDefault">
                                        <label class="form-check-label" for="setDefault">
                                            Đặt làm phương thức mặc định
                                        </label>
                                    </div>
                                </form>
                            </div>

                            <!-- Các tab khác (tùy ý thêm nếu bạn cần) -->
                            <div class="tab-pane fade" id="creditTab">
                                <!-- Nội dung nhập thẻ tín dụng -->
                            </div>
                            <div class="tab-pane fade" id="walletTab">
                                <!-- Nội dung nhập ví điện tử -->
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-light" data-bs-dismiss="modal">Hủy bỏ</button>
                        <button class="btn btn-primary">Thêm tài khoản</button>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- end khung   -->
</div>


<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="rut" tabindex="-1" aria-labelledby="rutLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="rutLabel">Thực hiện rút tiền</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="withdrawAmount" class="form-label">Số tiền rút</label>
                    <input type="text" class="form-control" id="withdrawAmount" placeholder="Nhập số tiền" data-raw="">
                </div>
                <div id="message"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close"
                    onclick="withdraw()">Rút tiền</button>
            </div>
        </div>
    </div>
</div>




<!-- Modal -->
<div class="modal fade" id="nap" tabindex="-1" aria-labelledby="napLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="napLabel">Nạp tiền</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="modal-body">
                    <div>
                        <div class="mb-3">
                            <label for="depositAmount" class="form-label">Số tiền nạp</label>
                            <input type="text" class="form-control" id="depositAmount" placeholder="Nhập số tiền"
                                data-raw="">
                        </div>
                        <!-- <div class="mb-3">
                        <label for="rutAccount" class="form-label">Tài khoản nhận tiền</label>
                        <input type="text" class="form-control" id="rutAccount"
                            placeholder="Nhập tài khoản nhận tiền">
                    </div> -->

                    </div>
                </div>
            </div>
            <div class="modal-footer">

                <button type="button" data-bs-dismiss="modal" aria-label="Close" class="btn btn-primary"
                    onclick="deposit()">Nạp tiền</button>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/autonumeric@4.6.0"></script>


<script>
    // input.addEventListener('input', () => {
    //     const raw = input.value.replace(/\D/g, '');
    //     if (raw) {
    //         const formatted = new Intl.NumberFormat('vi-VN', {
    //             style: 'currency',
    //             currency: 'VND'
    //         }).format(raw);
    //         input.title = formatted;
    //     } else {
    //         input.title = '';
    //     }
    // });





    // // Hàm để lấy giá trị số thực (vd: 80000)
    // function getRawAmount() {
    //     const value = document.getElementById("depositAmount").value;
    //     return Number(value.replace(/\./g, ""));
    // }

    const input = document.getElementById('depositAmount');
    input.addEventListener('input', function () {
        let rawValue = input.value.replace(/\D/g, '');
        this.dataset.raw = rawValue;
        if (rawValue) {
            this.value = Number(rawValue).toLocaleString('vi-VN');
        } else {
            this.value = '';
        }


    });

    function withdraw() {
        const amount = parseInt(document.getElementById('withdrawAmount').value);
        if (amount <= 0 || isNaN(amount)) {
            alert('Số tiền rút không hợp lệ');
            return;
        }

        $.post('wallet/withdraw', {
            amount: amount
        }, function (response) {
            var response = JSON.parse(response);
            if (response.success) {
                $('#message').html(`<div class="alert alert-success">Rút ${response.amount} VNĐ thành công
 </div>`);
                document.getElementById('currentBalance').innerText = response.new_balance
                    .toLocaleString() +
                    ' vnd';
                document.getElementById('desposit-withdraw').innerHTML =
                    `<div class="fw-bold text-${response.amountPrefix === '-' ? 'danger' : 'success'}">
                        ${response.amountPrefix}${Number(response.amount).toLocaleString('vi-VN')} VND
                    </div>`;
            } else {
                $('#message').html(`<div class="alert alert-danger">${response.message}</div>`);
            }
        }, 'text');
    }



    function deposit() {
        const amount = parseInt(document.getElementById('depositAmount').value);

        if (amount <= 0 || isNaN(amount)) {
            document.getElementById('message').innerHTML = `<div
           class="alert alert-danger">Số tiền nạp không hợp lệ</div>`;
            return;
        }

        $.post('wallet/deposit', {
            amount: amount
        }, function (a) {
            var response = JSON.parse(a);
            if (response.success) {
                document.getElementById('message').innerHTML =
                    `<div class="alert alert-success">Nạp thành công: ${response.amount} VND</div>`;
                // Cập nhật số dư ví
                document.getElementById('currentBalance').innerText = response.new_balance
                    .toLocaleString() +
                    ' vnd';
                document.getElementById('desposit-withdraw').innerHTML =
                    `<div class="fw-bold text-${response.amountPrefix === '+' ? 'success' : 'danger'}">
                      ${response.amountPrefix}${Number(response.amount).toLocaleString('vi-VN')} VND
                  </div>`;
            } else {
                document.getElementById('message').innerHTML =
                    `<div class="alert alert-danger"> Có lỗi xảy ra</div>`;
            }
        }, 'text');
    }
</script>