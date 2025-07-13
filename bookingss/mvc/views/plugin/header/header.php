



<link href="https://cdn.jsdelivr.net/npm/litepicker/dist/css/litepicker.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/dayjs@1/dayjs.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/dayjs@1/plugin/advancedFormat.js"></script>
<script src="https://cdn.jsdelivr.net/npm/dayjs@1/locale/vi.js"></script>
<style>
    /* Bắt đầu: phần header Background Position */
    .lop_1_header{
        background: url('https://dimg04.tripcdn.com/images/05E5w12000lixkuav98D2.webp') center/cover no-repeat;
    }
    .hero-section {  
        border-radius: 20px;
        padding: 70px 20px 10px 20px;
    }
    /* Kết thúc: phần Header Background Positon */

    /* Bắt đầu: Phần click chuột cho dropmenu phần tỉnh  */
    .dropdown-menu > .row > .col {
      cursor: pointer;
    }
    /* Kết thúc: Phần click chuột cho dropmenu phần tỉnh  */

    /* Bắt đầu: con của nav Đen đè lên */
    .floating-nav {
        z-index: 5;
        position: absolute;
        top:175px;
        /* Căn giữa theo chiều ngang */
        left: 50%; 
        /* Dịch trái 50% chiều rộng để thật sự giữa */
        transform: translateX(-50%); 
    }

    .floating-nav > .lop_phan_con_floating-nav {
        padding: 10px 20px;
    }
    .floating-nav .nav-item {
        padding: 8px 15px;
        border-radius: 30px;
        display: flex;
        align-items: center;
        gap: 6px;
    }
    .floating-nav > .active {
        background-color: white;
        color: black;
    }
    /* Kết thúc: con của nav Đen đè lên */

    /* Bắt đầu: Phần input form tất cả  */
    .search-box {
        position: relative;      /* Quan trọng để z-index hoạt động */
        z-index: 3;              /* Cao hơn lớp nền */
        background: white;
        border-radius: 12px;
        padding: 20px;
        box-shadow: 0 5px 34px rgba(2, 82, 255, 0.55);
       top:35px;
      
        
    }
    #popularDestinations{
       display: none;
    position: absolute;
    top: 100%;      /* Hiện ngay bên dưới ô input */
    left: 0;
    z-index: 5;     /* Đè lên các input khác */
    width: 100%;
    background-color: white;
    border-radius: 8px;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
    }
    #checkin, #checkout {
        cursor: pointer;
    }
    .search-box input.form-control {
        height: 40px; /* đảm bảo chiều cao đều */
    }
    #roomGuestDropdown .btn-sm {
        width: 30px;
        height: 30px;
        padding: 0;
        line-height: 1;
    }

     .row > .col-md-12 > .floating-nav > .lop_phan_con_floating-nav .nav-item{
        cursor: pointer;
    }

    .row > .col-md-12 > .floating-nav > .lop_phan_con_floating-nav .nav-item:hover{
        background-color: rgba(255, 255, 255, 0.18) !important;
        color: white !important;
    }
    /* Kết thúc: Phần input form tất cả  */

    
</style>
<!-- Banner Full Width -->
<div class="container-fluid position-relative p-0 d-md-block d-none mb-5">
      <div class="lop_1_header">
        <!-- Hero Section -->
        <div class="container d-flex justify-content-center align-items-center">
            <div>
</div>
            <div class="row" >
                <div class="hero-section text-center text-white ">
                    <div class="row d-flex justify-content-end mt-3 me-3" style="position:absolute;top:0; right:0;">
                         <div class="d-inline-flex gap-2">
                            <a href="logon/customer" class="btn btn-outline-light  text-decoration-none">
                                Đăng Ký
                            </a>
                
                         <a href="login/customer" class="btn btn-outline-light  text-decoration-none">
                                Đăng Nhập
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="fw-bold">
                                Du lịch dễ dàng khắp mọi nơi cùng PHIVN.com
                            </h1>
                            <p>
                                <i class="bi bi-check-circle-fill text-warning"></i> Thanh Toán An Toàn &nbsp;&nbsp;
                                <i class="bi bi-check-circle-fill text-warning"></i> Hỗ trợ toàn cầu trong 30 giây
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-12">
                        <div class="floating-nav w-75 text-white d-flex justify-content-center align-items-center">
                            <div class="lop_phan_con_floating-nav bg-black d-flex align-items-center rounded-pill justify-content-center">
                                <div class="nav-item active fw-bold bg-white " >
                                    <a href="danhsachtaisan/dsts/55" class=" text-decoration-none text-black">
                                        <i class="bi bi-building"></i> Khách Sạn
                                    </a>
                                </div>
                                <div class="nav-item  fw-bolder">
                                    <a href="danhsachtaisan/dsts/55" class=" text-decoration-none text-white">
                                    <i class="bi bi-house"></i> Homestay
                                    </a>
                                </div>
                                <div class="nav-item  fw-bolder">
                                     <a href="danhsachtaisan/dsts/55" class=" text-decoration-none text-white">
                                    <i class="bi bi-house-door"></i> Nhà Trọ
                                    </a>
                                </div>
                                <div class="nav-item  fw-bolder">
                                     <a href="danhsachtaisan/dsts/55" class=" text-decoration-none text-white">
                                    <i class="bi bi-building"></i> Chung Cư Cao Cấp
                                    </a>
                                </div>
                                <div class="nav-item fw-bolder">
                                     <a href="danhsachtaisan/dsts/55" class=" text-decoration-none text-white">
                                    <i class="bi bi-building"></i> Căn Hộ
                                    </a>
                                </div>
                                <div class="nav-item fw-bolder">
                                     <a href="danhsachtaisan/dsts/55" class=" text-decoration-none text-white">
                                    <i class="bi bi-building"></i> Villa Căn Hộ
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="search-box container">
                            <div class="row d-flex justify-content-center align-items-center mt-5">
                                <!-- Điểm đến -->
                                <div class="col-md-2">
                                    <label class="form-label fw-semibold">Điểm đến</label>
                                    <div class="position-relative">
                                        <input type="text" id="destination" class="form-control" placeholder="Thành phố, sân bay, khu vực..." autocomplete="off" />
                                        <div id="popularDestinations" class="dropdown-menu  mt-1 shadow-sm p-3" style="width: 300px;">
                                            <strong class="d-block mb-2">Điểm đến phổ biến</strong>
                                            <div class="row row-cols-3 g-2 w-100"  >
                                                <div class="col">Sài Gòn</div>
                                                <div class="col">Đà Lạt</div>
                                                <div class="col">Hà Nội</div>
                                                <div class="col">Hải Phòng</div>
                                                <div class="col">Hạ Long</div>
                                                <div class="col">Hà Nội</div>
                                                <div class="col">Đồng Tháp</div>
                                                <div class="col">Hội An</div>
                                                <div class="col">Tây Ninh</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Nhận phòng -->
                                <div class="col-md-2">
                                    <label class="form-label fw-semibold">Nhận phòng</label>
                                    <input type="text" id="checkin" class="form-control bg-white" readonly placeholder="Chọn nhận phòng..." />
                                </div>
                                <!-- Số đêm -->
                                <div class="col-md-2">
                                    <label class="form-label fw-semibold">Số đêm</label>
                                    <input type="text" id="nights" class="form-control bg-white" readonly placeholder="Chọn số đêm..." />
                                </div>
                                <!-- Trả phòng -->
                                <div class="col-md-2">
                                    <label class="form-label fw-semibold">Trả phòng</label>
                                    <input type="text" id="checkout" class="form-control bg-white" readonly placeholder="Chọn trả phòng..." />
                                </div>
                                <!-- Phòng & khách -->
                                <div class="col-md-3 position-relative">
                                     <label class="form-label fw-semibold">Phòng & khách</label>
                                    <input type="text" id="roomGuestInput" class="form-control bg-white" readonly value="1 phòng, 2 Người Lớn, 0 Trẻ Em" />
                                    <!-- Dropdown -->
                                    <div id="roomGuestDropdown" class="dropdown-menu show p-3 shadow-sm" style="display: none; position: absolute; top: 100%; left: 0; z-index: 10; width: 100%; border: 1px solid #ccc; border-radius: 10px;">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <span>Phòng</span>
                                            <div>
                                                <button class="btn btn-sm btn-outline-secondary rounded-circle" onclick="changeValue('rooms', -1)">−</button>
                                                <span id="roomsValue" class="mx-2">1</span>
                                                <button class="btn btn-sm btn-outline-secondary rounded-circle" onclick="changeValue('rooms', 1)">+</button>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                        <span>Người lớn <small class="text-muted">18+ tuổi</small></span>
                                        <div>
                                            <button class="btn btn-sm btn-outline-secondary rounded-circle" onclick="changeValue('adults', -1)">−</button>
                                            <span id="adultsValue" class="mx-2">2</span>
                                            <button class="btn btn-sm btn-outline-secondary rounded-circle" onclick="changeValue('adults', 1)">+</button>
                                        </div>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                        <span>Trẻ em <small class="text-muted">0-17 tuổi</small></span>
                                        <div>
                                            <button class="btn btn-sm btn-outline-secondary rounded-circle" onclick="changeValue('children', -1)">−</button>
                                            <span id="childrenValue" class="mx-2">0</span>
                                            <button class="btn btn-sm btn-outline-secondary rounded-circle" onclick="changeValue('children', 1)">+</button>
                                        </div>
                                        </div>
                                        <div class="text-end">
                                        <button class="btn btn-primary p-2" onclick="closeDropdown()">Xong</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Nút tìm -->
                                <div class="col-md-1 d-grid mt-4" style="height: 36px;">
                                    <button class="btn btn-primary">Tìm</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/litepicker/dist/litepicker.js"></script>
<script>
//   Phần lịch 
  dayjs.locale('vi');
  dayjs.extend(window.dayjs_plugin_advancedFormat);

  const picker = new Litepicker({
    element: document.getElementById('checkin'),
    singleMode: false,
    format: 'YYYY-MM-DD',
    lang: 'vi',
    numberOfMonths: 2,
    numberOfColumns: 2,
    tooltipText: {
      one: '1 đêm',
      other: '%d đêm'
    },
    setup: (picker) => {
      picker.on('selected', (start, end) => {
        const startDate = dayjs(start.dateInstance).locale('vi').format('dddd, D MMMM YYYY');
        const endDate = dayjs(end.dateInstance).locale('vi').format('dddd, D MMMM YYYY');
        const nights = dayjs(end.dateInstance).diff(dayjs(start.dateInstance), 'day');

        document.getElementById('checkin').value = startDate;
        document.getElementById('checkout').value = endDate;
        document.getElementById('nights').value = nights + ' đêm';
      });
    }
  });
  // Khi click vào ô trả phòng thì mở lại lịch
  document.getElementById('checkout').addEventListener('click', () => {
    picker.show();
  });
  // Dropdown Điểm đến
  const input = document.getElementById('destination');
  const dropdown = document.getElementById('popularDestinations');

  input.addEventListener('focus', () => {
    dropdown.style.display = 'block';
  });

  document.addEventListener('click', function (e) {
    if (!input.contains(e.target) && !dropdown.contains(e.target)) {
      dropdown.style.display = 'none';
    }
  });

  dropdown.addEventListener('click', (e) => {
    if (e.target.classList.contains('col')) {
      input.value = e.target.innerText;
      dropdown.style.display = 'none';
    }
  });
</script>
<script>
// Xử lý khi click item cho cái tỉnh phổ biến
document.querySelectorAll(".dropdown-item").forEach(function(item) {
    item.addEventListener("click", function() {
    document.getElementById("itemInput").value = this.textContent;
    });
});
</script>

<script>
    // phần lựa chọn phòng của người lớn và trẻ em 
  let roomData = {
    rooms: 1,
    adults: 2,
    children: 0
  };

  const roomGuestInput = document.getElementById('roomGuestInput');
  const roomGuestDropdown = document.getElementById('roomGuestDropdown');

  function updateDisplay() {
    document.getElementById('roomsValue').innerText = roomData.rooms;
    document.getElementById('adultsValue').innerText = roomData.adults;
    document.getElementById('childrenValue').innerText = roomData.children;

    roomGuestInput.value = `${roomData.rooms} phòng, ${roomData.adults} Người Lớn, ${roomData.children} Trẻ Em`;
  }

  function changeValue(type, delta) {
    const max = 10;
    if (roomData[type] + delta >= 0 && roomData[type] + delta <= max) {
      roomData[type] += delta;
      updateDisplay();
    }
  }

  function closeDropdown() {
    roomGuestDropdown.style.display = 'none';
  }

  roomGuestInput.addEventListener('click', () => {
    roomGuestDropdown.style.display = 'block';
  });

  // Ẩn dropdown nếu click bên ngoài
  document.addEventListener('click', function (e) {
    if (!roomGuestInput.contains(e.target) && !roomGuestDropdown.contains(e.target)) {
      roomGuestDropdown.style.display = 'none';
    }
  });

  updateDisplay(); // init
</script>

