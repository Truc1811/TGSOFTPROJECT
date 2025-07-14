import React from 'react'
import './MyInvestment2.css'

const MyInvestment2 = () => {
  return (
    <>
      <div className="container-fluid mt-5 p-4">
        <div className="row mt-3">
          <div className="col-12">
            {/* Stats Cards */}
            <div className="row mb-4 ">
              <div className="col-md-3 mb-3 card-container">
                <div className="card bg-white text-black">
                  <div className="card-body d-flex align-items-center justify-content-between gap-4 flex-wrap">
                    <div className="text-primary">
                      <i className="bi bi-coin fs-1"></i>
                    </div>
                    <div>
                      <h5 className="card-title">Tổng đầu tư</h5>
                      <h3 className="card-text">1,250,000 VND</h3>
                    </div>
                    <div>
                      <span className="badge bg-success">+10%</span>
                    </div>
                  </div>
                </div>
              </div>
              <div className="col-md-3 mb-3 card-container">
                <div className="card bg-white text-black">
                  <div className="card-body d-flex align-items-center justify-content-between gap-4 flex-wrap">
                    <div className="text-primary">
                      <i className="bi bi-coin fs-1"></i>
                    </div>
                    <div>
                      <h5 className="card-title">Tổng đầu tư</h5>
                      <h3 className="card-text">1,250,000 VND</h3>
                    </div>
                    <div>
                      <span className="badge bg-success">+10%</span>
                    </div>
                  </div>
                </div>
              </div>
              <div className="col-md-3 mb-3 card-container">
                <div className="card bg-white text-black">
                  <div className="card-body d-flex align-items-center justify-content-between gap-4 flex-wrap">
                    <div className="text-primary">
                      <i className="bi bi-coin fs-1"></i>
                    </div>
                    <div>
                      <h5 className="card-title">Tổng đầu tư</h5>
                      <h3 className="card-text">1,250,000 VND</h3>
                    </div>
                    <div>
                      <span className="badge bg-success">+10%</span>
                    </div>
                  </div>
                </div>
              </div>

              <div className="col-md-3 mb-3 card-container">
                <div className="card bg-white text-black">
                  <div className="card-body d-flex align-items-center justify-content-between gap-4 flex-wrap">
                    <div className="text-primary">
                      <i className="bi bi-coin fs-1"></i>
                    </div>
                    <div>
                      <h5 className="card-title">Tổng đầu tư</h5>
                      <h3 className="card-text">1,250,000 VND</h3>
                    </div>
                    <div>
                      <span className="badge bg-success">+10%</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div className="row mt-3 p-2">
          <div className="col-12 bg-white">
            <div className="row mb-4 text-center mt-3 bg-white">
              {/* Labels hiển thị ở desktop */}
              <div className="col-md-3 mb-3 card-container fw-bold fs-5 d-none d-md-block">
                Trạng thái
              </div>
              <div className="col-md-3 mb-3 card-container fw-bold fs-5 d-none d-md-block">
                Loại gọi vốn
              </div>
              <div className="col-md-3 mb-3 card-container fw-bold fs-5 d-none d-md-block">
                Sắp xếp theo
              </div>
            </div>
          </div>

          <div className="col-12">
            <div className="row mb-4 bg-white">
              {/* Trạng thái */}
              <div className="col-md-3 mb-3 card-container">
                {/* Label cho mobile */}
                <div className="fw-bold d-block d-md-none mb-1">Trạng thái</div>
                <div className="dropdown w-100">
                  <a
                    className="btn dropdown-toggle w-100"
                    href="#"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    Tất cả
                  </a>
                  <ul className="dropdown-menu w-100">
                    <li>
                      <a className="dropdown-item" href="#">
                        Tất cả
                      </a>
                    </li>
                    <li>
                      <a className="dropdown-item" href="#">
                        Option 1
                      </a>
                    </li>
                    <li>
                      <a className="dropdown-item" href="#">
                        Option 2
                      </a>
                    </li>
                  </ul>
                </div>
              </div>

              {/* Loại gọi vốn */}
              <div className="col-md-3 mb-3 card-container">
                <div className="fw-bold d-block d-md-none mb-1">
                  Loại gọi vốn
                </div>
                <div className="dropdown w-100">
                  <a
                    className="btn dropdown-toggle w-100"
                    href="#"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    Tất cả
                  </a>
                  <ul className="dropdown-menu w-100">
                    <li>
                      <a className="dropdown-item" href="#">
                        Action
                      </a>
                    </li>
                    <li>
                      <a className="dropdown-item" href="#">
                        Another
                      </a>
                    </li>
                  </ul>
                </div>
              </div>

              {/* Sắp xếp theo */}
              <div className="col-md-3 mb-3 card-container">
                <div className="fw-bold d-block d-md-none mb-1">
                  Sắp xếp theo
                </div>
                <div className="dropdown w-100">
                  <a
                    className="btn dropdown-toggle w-100"
                    href="#"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    Tất cả
                  </a>
                  <ul className="dropdown-menu w-100">
                    <li>
                      <a className="dropdown-item" href="#">
                        Mới nhất
                      </a>
                    </li>
                    <li>
                      <a className="dropdown-item" href="#">
                        Cũ nhất
                      </a>
                    </li>
                  </ul>
                </div>
              </div>

              {/* Ô tìm kiếm */}
              <div className="col-md-3 mb-3 card-container">
                <div className="fw-bold d-block d-md-none mb-1">Tìm kiếm</div>
                <input
                  type="text"
                  className="form-control"
                  placeholder="Tìm kiếm dự án"
                />
              </div>
            </div>
          </div>
        </div>

        <div className="row mt-3 ps-2 pe-2">
          <div className="col-12 bg-white">
            <div className="row mb-4 text-center mt-3 bg-white d-flex">
              {/* Labels hiển thị ở desktop */}

              <div className="col-md-6 mb-3 card-container d-flex align-items-center gap-4">
                <img src="https://ui-avatars.com/api/?name=Tech+Innovation&background=10B981&color=fff"></img>
                <div>
                  <div class="fs-5">Tech Innovation</div>
                  <div class="fs-6">Công nghệ blockchain</div>
                  <span class="badge text-bg-primary">Cổ phần</span>
                  <span class="badge text-bg-light">Đang gọi vốn</span>
                </div>
              </div>

              <div className="col-md-6 mb-3 card-container d-flex justify-content-end align-items-center gap-2">
                <i className="bi bi-coin"></i>
                <i className="bi bi-piggy-bank"></i>
                <i className="bi bi-bank"></i>
                <i className="bi bi-cash-coin"></i>
              </div>
            </div>
          </div>
          <div className="col-12">
            <div className="row mb-4 bg-white">
              {/* Trạng thái */}
              <div className="col-md-3 mb-3 card-container">
                {/* Label cho mobile */}
                <div className="fw-bold  mb-1">700,000,000 VND</div>
                <div>Đã huy động</div>
              </div>

              {/* Loại gọi vốn */}
              <div className="col-md-3 mb-3 card-container">
                {/* Label cho mobile */}
                <div className="fw-bold  mb-1">700,000,000 VND</div>
                <div>Đã huy động</div>
              </div>
              {/* Sắp xếp theo */}
              <div className="col-md-3 mb-3 card-container">
                {/* Label cho mobile */}
                <div className="fw-bold  mb-1">700,000,000 VND</div>
                <div>Đã huy động</div>
              </div>

              {/* Ô tìm kiếm */}
              <div className="col-md-3 mb-3 card-container">
                <div className="fw-bold d-block d-md-none mb-1">Tìm kiếm</div>
                <input
                  type="text"
                  className="form-control"
                  placeholder="Tìm kiếm dự án"
                />
              </div>
              <div
                className="progress mb-2 bg-light"
                role="progressbar"
                aria-label="Example with label"
                aria-valuenow={25}
                aria-valuemin={0}
                aria-valuemax={100}
              >
                <div className="progress-bar" style={{ width: '25%' }}>
                  25%
                </div>
              </div>
              <div>70 % hoàn thành 10 ngày còn lại</div>

              <ul class="nav nav-pills mb-3 p-2" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button
                    class="nav-link active"
                    id="pills-home-tab"
                    data-bs-toggle="pill"
                    data-bs-target="#pills-home"
                    type="button"
                    role="tab"
                    aria-controls="pills-home"
                    aria-selected="true"
                  >
                    Phân bổ cổ
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button
                    class="nav-link"
                    id="pills-profile-tab"
                    data-bs-toggle="pill"
                    data-bs-target="#pills-profile"
                    type="button"
                    role="tab"
                    aria-controls="pills-profile"
                    aria-selected="false"
                  >
                    Lịch trả cổ tức
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                  <button
                    class="nav-link"
                    id="pills-contact-tab"
                    data-bs-toggle="pill"
                    data-bs-target="#pills-contact"
                    type="button"
                    role="tab"
                    aria-controls="pills-contact"
                    aria-selected="false"
                  >
                    Quyền lợi
                  </button>
                </li>
              </ul>
              <div
                className="tab-content"
                id="pills-tabContent"
                style={{ backgroundColor: 'rgb(226, 242, 233)' }}
              >
                <div
                  className="tab-pane fade show active"
                  id="pills-home"
                  role="tabpanel"
                  aria-labelledby="pills-home-tab"
                  tabindex="0"
                >
                  <div>Phân bổ cổ phần</div>
                  <div className="d-flex justify-content-between align-items-center bg-white text-success p-2 border rounded mb-2 flex-nowrap">
                    <div className="d-flex gap-2">
                      <span className="color-indicator founder bg-success text-transparent">
                        aa
                      </span>
                      <span className="">Nhà đầu tư</span>
                    </div>
                    <span>70%</span>
                  </div>

                  <div className="d-flex justify-content-between align-items-center bg-white text-success p-2 border rounded mb-2 flex-nowrap">
                    <div className="d-flex gap-2">
                      <span className="color-indicator founder bg-primary text-transparent">
                        aa
                      </span>
                      <span className="">Nhà đầu tư</span>
                    </div>
                    <span>70%</span>
                  </div>

                  <div className="d-flex justify-content-between align-items-center bg-white text-success p-2 border rounded mb-2 flex-nowrap">
                    <div className="d-flex gap-2">
                      <span className="color-indicator founder bg-danger text-transparent">
                        aa
                      </span>
                      <span className="">Nhà đầu tư</span>
                    </div>
                    <span>70%</span>
                  </div>

                  <div class="col-12">
                    <div className="fs-5">Định giá & Giá cổ phần</div>
                    <div class="row d-flex justify-content-between p-3 ">
                      <div class=" col-12 col-md-6 bg-white border p-3 rounded ">
                        <div className="fw-bold">Định giá trước gọi vốn</div>
                        <div>1,000,000,000 VND</div>
                      </div>
                      <div class="col-12 col-md-6  bg-white border p-3 rounded">
                        <div className="fw-bold">Giá cổ phần</div>
                        <div>10,000 VND</div>
                      </div>
                    </div>
                    <div class="row d-flex justify-content-between p-3 ">
                      <div class=" col-12 col-md-6 bg-white border p-3 rounded ">
                        <div className="fw-bold">Định giá trước gọi vốn</div>
                        <div>1,000,000,000 VND</div>
                      </div>
                      <div class="col-12 col-md-6  bg-white border p-3 rounded">
                        <div className="fw-bold">Giá cổ phần</div>
                        <div>10,000 VND</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  className="tab-pane fade"
                  id="pills-profile"
                  role="tabpanel"
                  aria-labelledby="pills-profile-tab"
                  tabindex="0"
                >
                  <table class="table caption-top">
                    <caption>List of users</caption>
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                      </tr>
                      <tr>
                        <th scope="row" >3</th>
                        <td>John</td>
                        <td>Doe</td>
                        <td>@social</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div
                  className="tab-pane fade"
                  id="pills-contact"
                  role="tabpanel"
                  aria-labelledby="pills-contact-tab"
                  tabindex="0"
                >
                  ...
                </div>
                <div
                  className="tab-pane fade"
                  id="pills-disabled"
                  role="tabpanel"
                  aria-labelledby="pills-disabled-tab"
                  tabindex="0"
                >
                  ...
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </>
  )
}
export default MyInvestment2
