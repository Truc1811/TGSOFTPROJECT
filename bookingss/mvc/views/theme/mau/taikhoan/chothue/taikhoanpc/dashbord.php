 <div class="p-6 overflow-auto scrollbar d-flex flex-wrap col-12  py-3 align-content-start" style="height:86vh">
     <div class="col-6 col-md-3 p-2 ">
         <div class="rounded-3 overflow-hidden">
             <div class="bg-light p-3 d-flex flex-wrap justify-content-between">
                 <div class="col-4 d-flex align-items-center">
                     <i class="bi bi-box-seam-fill fs-48"></i>
                 </div>
                 <div class="col-8">
                     <p class="text-black-50 text-end">Giao dịch</p>
                     <h1 class="text-end">28</h1>
                 </div>
             </div>
             <div class="bg-primary text-white p-3 d-flex flex-wrap justify-content-between ">
                 <div class="col-auto"><i class="bi bi-arrow-up"></i> 100%</div>
                 <div class="col-auto">Total</div>
             </div>
         </div>
     </div>
     <div class="col-6 col-md-3 p-2">
         <div class="rounded-3 overflow-hidden">
             <div class="bg-light p-3 d-flex flex-wrap justify-content-between rounded-3">
                 <div class="col-4 d-flex align-items-center">
                     <i class="bi bi-person-arms-up fs-48"></i>
                 </div>
                 <div class="col-8">
                     <p class="text-black-50 text-end">Page view</p>
                     <h1 class="text-end">38</h1>
                 </div>
             </div>
             <div class="bg-warning text-white p-3 d-flex flex-wrap justify-content-between">
                 <div class="col-auto"><i class="bi bi-arrow-up"></i> 2,3%</div>
                 <div class="col-auto">Total</div>
             </div>
         </div>
         </div>
         <div class="col-6 col-md-3 p-2">
             <div class="rounded-3 overflow-hidden">
                 <div class="bg-light p-3 d-flex flex-wrap justify-content-between rounded-3">
                     <div class="col-4 d-flex align-items-center">
                         <i class="bi bi-cash-coin fs-48"></i>
                     </div>
                     <div class="col-8">
                         <p class="text-black-50 text-end">Doanh thu tổng</p>
                         <h1 class="text-end">25 tỷ</h1>
                     </div>
                 </div>
                 <div class="bg-info text-white p-3 d-flex flex-wrap justify-content-between">
                     <div class="col-auto"><i class="bi bi-arrow-up"></i> 0%</div>
                     <div class="col-auto">Total</div>
                 </div>
             </div>
             </div>
             <div class="col-6 col-md-3 p-2">
                 <div class="rounded-3 overflow-hidden">
                     <div class="bg-light p-3 d-flex flex-wrap justify-content-between rounded-3">
                         <div class="col-4 d-flex align-items-center">
                             <i class="bi bi-cart-fill fs-48"></i>
                         </div>
                         <div class="col-8">
                             <p class="text-black-50 text-end">Số lượng tài sản</p>
                             <h1 class="text-end">80</h1>
                         </div>
                     </div>
                     <div class="bg-success text-white p-3 d-flex flex-wrap justify-content-between">
                         <div class="col-auto">Total</div>
                     </div>
                 </div>
                 </div>



                 <!-- bieu do -->
                 <div class="col-12 col-md-6 p-2 ">
                     <div class="bg-light p-3 rounded-3">
                         <h5>Biểu đồ doanh thu</h5>
                         <div>
                             <canvas id="myChartpc"></canvas>
                         </div>

                     </div>

                     <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

                     <script>
                         const ctxpc = document.getElementById('myChartpc');

                         new Chart(ctxpc, {
                             type: 'bar',
                             data: {
                                 labels: ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6'],
                                 datasets: [{
                                     label: 'Doanh thu ( vnđ)',
                                     data: [20, 80, 50, 40, 90, 100],
                                     borderWidth: 1
                                 }]
                             },
                             options: {
                                 scales: {
                                     y: {
                                         beginAtZero: true
                                     }
                                 }
                             }
                         });
                     </script>

                 </div>
                 <div class="col-12 col-md-6 p-2 ">
                     <div class="bg-light p-3 h-100 rounded-3 ">
                         <h5>Hoạt động gần nhất</h5>
                         <div class="text-black-50 mt-3">
                             <p>Nguyễn Văn Nam đã đặt phòng vào ngày 20/06/2025 - P307</p>
                             <p>Nguyễn Thị Tú đã đặt phòng vào ngày 20/06/2025 - P307</p>
                         </div>
                     </div>
                 </div>


             </div>