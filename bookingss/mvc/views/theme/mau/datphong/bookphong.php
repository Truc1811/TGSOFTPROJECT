<style>
    table {
        border-color: blue !important;
    }

    thead th {
        border-bottom: 2px solid #0d6efd !important;
        /* Màu Bootstrap primary */
    }
</style>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $('#checkDefault, #checkChecked').change(function () {
            const isAnyChecked = $('#checkDefault').is(':checked') || $('#checkChecked').is(':checked');

            // Nếu có ít nhất 1 checkbox được check và chưa hiện đoạn thông báo
            if (isAnyChecked && $('#checkbox .filter-message').length === 0) {
                $('#checkbox').append(`
                    <p class="filter-message text-muted mt-2 bg-light p-3">
                       Bạn đang xem một số loại chỗ nghỉ mà cơ sở lưu trú này cung cấp. Xóa bộ lọc này để xem tất cả các
                       tùy chọn có sẵn.
                    </p>
                `);
            }

            // Nếu không còn checkbox nào được check => xóa đoạn thông báo
            if (!isAnyChecked) {
                $('#checkbox .filter-message').remove();
            }
        });
    });
</script>


<div class="container">
    <div class="row filter">
        <div class="p-3 fw-bold fs-5">Lọc</div>
    </div>


    <div class="row " id="checkbox">
        <div class="p-3 d-flex flex-nowrap">
            <div class="form-check d-flex gap-3 me-4 px-0">
                <input class="form-check-input m-0 p-0 fs-5 " type="checkbox" value="" id="checkDefault">
                <label class="form-check-label m-0 p-0 fs-6" for="checkDefault">
                    Phòng
                </label>
            </div>
            <div class="form-check d-flex gap-3 ">
                <input class="form-check-input m-0 p-0 fs-5 " type="checkbox" value="" id="checkChecked" checked>
                <label class="form-check-label m-0 p-0 fs-6" for="checkChecked">
                    Căn hộ
                </label>
            </div>
        </div>
    </div>


    <div class="row table">
        <div class="p-3">
            <table class="table table-responsive table-bordered border-primary">
                <thead>
                    <tr class="table-bordered border-primary">
                        <th scope="col-2 col-md-3">Loại phòng</th>
                        <th scope="col-2 col-md-3">Giá</th>
                        <th scope="col-2 col-md-3">Mô tả</th>
                        <th scope="col-2 col-md-3">Tình trạng</th>
                        <th scope="col-2 col-md-3">Đặt phòng</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="align-middle">
                        <th>Duplex</th>
                        <td>2.000.000 VND</td>
                        <td>Đẹp</td>
                        <td><span class="badge rounded-pill text-bg-info">Còn phòng</span></td>
                        <td><button type="button" class="btn btn-primary">Đặt
                                phòng</button></td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>