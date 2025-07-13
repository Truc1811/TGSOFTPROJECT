import React from 'react'
import './DashboardMenu.css'

function MyInvestment() {
  return (
    <>
      <div className="container-fluid mt-5">
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
                      <div className="card-title">Tổng đầu tư</div>
                      <div className="card-text">1,250,000 VND</div>
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
                      <i className="bi bi-currency-dollar fs-1"></i>
                    </div>
                    <div>
                      <div className="card-title">Lợi nhuận</div>
                      <div className="card-text">125,000 VND</div>
                    </div>
                    <div>
                      <span className="badge bg-success">+5%</span>
                    </div>
                  </div>
                </div>
              </div>
              <div className="col-md-3 mb-3 card-container">
                <div className="card bg-white text-black">
                  <div className="card-body d-flex align-items-center justify-content-between gap-4 flex-wrap">
                    <div className="text-primary">
                      <i className="bi bi-currency-dollar fs-1"></i>
                    </div>
                    <div>
                      <div className="card-title">Lợi nhuận</div>
                      <div className="card-text">125,000 VND</div>
                    </div>
                    <div>
                      <span className="badge bg-success">+5%</span>
                    </div>
                  </div>
                </div>
              </div>

              <div className="col-md-3 mb-3 card-container ">
                <div className="card bg-white text-black">
                  <div className="card-body d-flex align-items-center justify-content-between gap-4 flex-wrap">
                    <div className="text-primary">
                      <i className="bi bi-graph-up fs-1"></i>
                    </div>
                    <div>
                      <div className="card-title">Tăng trưởng</div>
                      <div className="card-text">15.8%</div>
                    </div>
                    <div>
                      <span className="badge bg-warning">+2.1%</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div className="row">
          <div className="col-12">
            <div className="card shadow-lg">
              <div className="d-flex justify-content-between align-items-center p-4 border-bottom">
                <div className="mb-0">
                  <h5 className="mb-0 fw-bold text-dark">Danh sách đầu tư</h5>
                  <small className="text-muted">
                    Quản lý và theo dõi các khoản đầu tư của bạn
                  </small>
                </div>
                <nav className="navbar-custom">
                  <div className="nav nav-tabs" id="nav-tab" role="tablist">
                    <button
                      className="nav-link active"
                      id="nav-home-tab"
                      data-bs-toggle="tab"
                      data-bs-target="#nav-home"
                      type="button"
                      role="tab"
                      aria-controls="nav-home"
                      aria-selected="true"
                    >
                      <i className="bi bi-clock me-2"></i>
                      Đang đầu tư
                    </button>
                    <button
                      className="nav-link"
                      id="nav-profile-tab"
                      data-bs-toggle="tab"
                      data-bs-target="#nav-profile"
                      type="button"
                      role="tab"
                      aria-controls="nav-profile"
                      aria-selected="false"
                    >
                      <i className="bi bi-check-circle me-2"></i>
                      Hoàn thành
                    </button>
                    <button
                      className="nav-link"
                      id="nav-contact-tab"
                      data-bs-toggle="tab"
                      data-bs-target="#nav-contact"
                      type="button"
                      role="tab"
                      aria-controls="nav-contact"
                      aria-selected="false"
                    >
                      <i className="bi bi-x-circle me-2"></i>
                      Đã hủy
                    </button>
                    <button
                      className="nav-link"
                      id="nav-disabled-tab"
                      data-bs-toggle="tab"
                      data-bs-target="#nav-disabled"
                      type="button"
                      role="tab"
                      aria-controls="nav-disabled"
                      aria-selected="false"
                    >
                      <i className="bi bi-list me-2"></i>
                      Tất cả
                    </button>
                  </div>
                </nav>
              </div>

              <div className="card-body">
                <div className="tab-content" id="nav-tabContent">
                  <div
                    className="tab-pane fade show active"
                    id="nav-home"
                    role="tabpanel"
                    aria-labelledby="nav-home-tab"
                    tabIndex="0"
                  >
                    <div className="table-responsive modern-table">
                      <table className="table table-responsive">
                        <thead>
                          <tr>
                            <th>
                              <i className="bi bi-folder me-2"></i>Dự án
                            </th>
                            <th>
                              <i className="bi bi-currency-dollar me-2"></i>Số
                              tiền đầu tư
                            </th>
                            <th>
                              <i className="bi bi-calendar me-2"></i>Ngày đầu tư
                            </th>
                            <th>
                              <i className="bi bi-graph-up me-2"></i>Tiến độ
                            </th>
                            <th>
                              <i className="bi bi-cash-stack me-2"></i>Lợi nhuận
                              dự kiến
                            </th>
                            <th>
                              <i className="bi bi-gear me-2"></i>Thao tác
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <div className="project-info">
                                <div className="project-name">
                                  Tech Innovation Hub
                                </div>
                                <small className="text-muted">
                                  Technology • Startup
                                </small>
                              </div>
                            </td>
                            <td>
                              <span className="money-amount">
                                10,000,000 VND
                              </span>
                            </td>
                            <td>
                              <span className="date-info">15/05/2025</span>
                            </td>
                            <td>
                              <div
                                className="progress"
                                style={{ height: '24px' }}
                              >
                                <div
                                  className="progress-bar bg-primary"
                                  role="progressbar"
                                  style={{ width: '65%' }}
                                >
                                  65%
                                </div>
                              </div>
                            </td>
                            <td>
                              <span className="profit-amount text-success">
                                +2,500,000 VND
                              </span>
                            </td>
                            <td>
                              <button className="btn btn-sm btn-outline-primary me-2">
                                <i className="bi bi-eye me-1"></i>Xem
                              </button>
                              <button className="btn btn-sm btn-outline-danger">
                                <i className="bi bi-arrow-down me-1"></i>Rút
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div className="project-info">
                                <div className="project-name">
                                  Green Farm Project
                                </div>
                                <small className="text-muted">
                                  Agriculture • Sustainable
                                </small>
                              </div>
                            </td>
                            <td>
                              <span className="money-amount">
                                5,000,000 VND
                              </span>
                            </td>
                            <td>
                              <span className="date-info">10/05/2025</span>
                            </td>
                            <td>
                              <div
                                className="progress"
                                style={{ height: '24px' }}
                              >
                                <div
                                  className="progress-bar bg-success"
                                  role="progressbar"
                                  style={{ width: '80%' }}
                                >
                                  80%
                                </div>
                              </div>
                            </td>
                            <td>
                              <span className="profit-amount text-success">
                                +1,200,000 VND
                              </span>
                            </td>
                            <td>
                              <button className="btn btn-sm btn-outline-primary me-2">
                                <i className="bi bi-eye me-1"></i>Xem
                              </button>
                              <button className="btn btn-sm btn-outline-danger">
                                <i className="bi bi-arrow-down me-1"></i>Rút
                              </button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div
                    className="tab-pane fade"
                    id="nav-profile"
                    role="tabpanel"
                    aria-labelledby="nav-profile-tab"
                    tabIndex="0"
                  >
                    <div className="table-responsive modern-table">
                      <table className="table">
                        <thead>
                          <tr>
                            <th>
                              <i className="bi bi-folder me-2"></i>Dự án
                            </th>
                            <th>
                              <i className="bi bi-currency-dollar me-2"></i>Số
                              tiền đầu tư
                            </th>
                            <th>
                              <i className="bi bi-calendar-check me-2"></i>Ngày
                              hoàn thành
                            </th>
                            <th>
                              <i className="bi bi-cash-stack me-2"></i>Lợi nhuận
                              thực tế
                            </th>
                            <th>
                              <i className="bi bi-percent me-2"></i>ROI
                            </th>
                            <th>
                              <i className="bi bi-gear me-2"></i>Thao tác
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <div className="project-info">
                                <div className="project-name">
                                  Coffee Shop Chain
                                </div>
                                <small className="text-muted">
                                  Food & Beverage • Franchise
                                </small>
                              </div>
                            </td>
                            <td>
                              <span className="money-amount">
                                8,000,000 VND
                              </span>
                            </td>
                            <td>
                              <span className="date-info">01/05/2025</span>
                            </td>
                            <td>
                              <span className="profit-amount text-success">
                                +1,750,000 VND
                              </span>
                            </td>
                            <td>
                              <span className="roi-badge badge bg-success">
                                +21.9%
                              </span>
                            </td>
                            <td>
                              <button className="btn btn-sm btn-outline-primary">
                                <i className="bi bi-eye me-1"></i>Xem
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div className="project-info">
                                <div className="project-name">
                                  E-commerce Platform
                                </div>
                                <small className="text-muted">
                                  Technology • E-commerce
                                </small>
                              </div>
                            </td>
                            <td>
                              <span className="money-amount">
                                12,000,000 VND
                              </span>
                            </td>
                            <td>
                              <span className="date-info">25/04/2025</span>
                            </td>
                            <td>
                              <span className="profit-amount text-success">
                                +3,200,000 VND
                              </span>
                            </td>
                            <td>
                              <span className="roi-badge badge bg-success">
                                +26.7%
                              </span>
                            </td>
                            <td>
                              <button className="btn btn-sm btn-outline-primary">
                                <i className="bi bi-eye me-1"></i>Xem
                              </button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div
                    className="tab-pane fade"
                    id="nav-contact"
                    role="tabpanel"
                    aria-labelledby="nav-contact-tab"
                    tabIndex="0"
                  >
                    <div className="table-responsive modern-table">
                      <table className="table">
                        <thead>
                          <tr>
                            <th>
                              <i className="bi bi-folder me-2"></i>Dự án
                            </th>
                            <th>
                              <i className="bi bi-currency-dollar me-2"></i>Số
                              tiền đầu tư
                            </th>
                            <th>
                              <i className="bi bi-calendar-x me-2"></i>Ngày hủy
                            </th>
                            <th>
                              <i className="bi bi-info-circle me-2"></i>Lý do
                            </th>
                            <th>
                              <i className="bi bi-arrow-return-left me-2"></i>Số
                              tiền hoàn lại
                            </th>
                            <th>
                              <i className="bi bi-gear me-2"></i>Thao tác
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <div className="project-info">
                                <div className="project-name">
                                  Real Estate Fund
                                </div>
                                <small className="text-muted">
                                  Real Estate • Investment Fund
                                </small>
                              </div>
                            </td>
                            <td>
                              <span className="money-amount">
                                15,000,000 VND
                              </span>
                            </td>
                            <td>
                              <span className="date-info">20/04/2025</span>
                            </td>
                            <td>
                              <span className="reason-badge badge bg-warning">
                                <i className="bi bi-exclamation-triangle me-1"></i>
                                Thay đổi chiến lược
                              </span>
                            </td>
                            <td>
                              <span className="refund-amount text-warning">
                                14,850,000 VND
                              </span>
                            </td>
                            <td>
                              <button className="btn btn-sm btn-outline-primary">
                                <i className="bi bi-eye me-1"></i>Xem
                              </button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div
                    className="tab-pane fade"
                    id="nav-disabled"
                    role="tabpanel"
                    aria-labelledby="nav-disabled-tab"
                    tabIndex="0"
                  >
                    <div className="table-responsive modern-table">
                      <table className="table">
                        <thead>
                          <tr>
                            <th>
                              <i className="bi bi-folder me-2"></i>Dự án
                            </th>
                            <th>
                              <i className="bi bi-currency-dollar me-2"></i>Số
                              tiền đầu tư
                            </th>
                            <th>
                              <i className="bi bi-calendar me-2"></i>Ngày
                            </th>
                            <th>
                              <i className="bi bi-flag me-2"></i>Trạng thái
                            </th>
                            <th>
                              <i className="bi bi-graph-up me-2"></i>Kết quả
                            </th>
                            <th>
                              <i className="bi bi-gear me-2"></i>Thao tác
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <div className="project-info">
                                <div className="project-name">
                                  Tech Innovation Hub
                                </div>
                                <small className="text-muted">
                                  Technology • Startup
                                </small>
                              </div>
                            </td>
                            <td>
                              <span className="money-amount">
                                10,000,000 VND
                              </span>
                            </td>
                            <td>
                              <span className="date-info">15/05/2025</span>
                            </td>
                            <td>
                              <span className="status-badge badge bg-primary">
                                <i className="bi bi-clock"></i>
                                Đang đầu tư
                              </span>
                            </td>
                            <td>
                              <span className="result-pending">-</span>
                            </td>
                            <td>
                              <button className="btn btn-sm btn-outline-primary">
                                <i className="bi bi-eye me-1"></i>Xem
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div className="project-info">
                                <div className="project-name">
                                  Coffee Shop Chain
                                </div>
                                <small className="text-muted">
                                  Food & Beverage • Franchise
                                </small>
                              </div>
                            </td>
                            <td>
                              <span className="money-amount">
                                8,000,000 VND
                              </span>
                            </td>
                            <td>
                              <span className="date-info">01/05/2025</span>
                            </td>
                            <td>
                              <span className="status-badge badge bg-success">
                                <i className="bi bi-check-circle"></i>
                                Hoàn thành
                              </span>
                            </td>
                            <td>
                              <span className="profit-amount text-success">
                                +1,750,000 VND
                              </span>
                            </td>
                            <td>
                              <button className="btn btn-sm btn-outline-primary">
                                <i className="bi bi-eye me-1"></i>Xem
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div className="project-info">
                                <div className="project-name">
                                  Real Estate Fund
                                </div>
                                <small className="text-muted">
                                  Real Estate • Investment Fund
                                </small>
                              </div>
                            </td>
                            <td>
                              <span className="money-amount">
                                15,000,000 VND
                              </span>
                            </td>
                            <td>
                              <span className="date-info">20/04/2025</span>
                            </td>
                            <td>
                              <span className="status-badge badge bg-danger">
                                <i className="bi bi-x-circle"></i>
                                Đã hủy
                              </span>
                            </td>
                            <td>
                              <span className="loss-amount text-warning">
                                -150,000 VND
                              </span>
                            </td>
                            <td>
                              <button className="btn btn-sm btn-outline-primary">
                                <i className="bi bi-eye me-1"></i>Xem
                              </button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </>
  )
}
export default MyInvestment
