import React from 'react'
import './DashboardMenu.css'
import {
  BsFillPersonFill,
  BsFillCreditCardFill,
  BsUnlockFill,
  BsFillChatDotsFill,
  BsCashStack,
} from 'react-icons/bs'
import { FaWallet } from 'react-icons/fa'
function DashboardMenu() {
  const activities = [
    {
      icon: <BsFillCreditCardFill className="text-primary fs-5" />,
      title: 'Đầu tư vào Tech Innovation',
      description: 'Bạn đã đầu tư 10,000,000 VND vào dự án Tech Innovation',
      time: '15/05/2025 - 10:30',
    },
    {
      icon: <FaWallet className="text-success fs-5" />,
      title: 'Nạp tiền vào ví',
      description: 'Bạn đã nạp 20,000,000 VND vào ví Cotien',
      time: '10/05/2025 - 14:15',
    },
    {
      icon: <BsUnlockFill className="text-warning fs-5" />,
      title: 'Mở khóa tài liệu',
      description: 'Bạn đã mở khóa tài liệu VIP của dự án Green Farm',
      time: '05/05/2025 - 09:45',
    },
    {
      icon: <BsFillPersonFill className="text-secondary fs-5" />,
      title: 'Tư vấn với chuyên gia',
      description:
        'Bạn đã đặt lịch tư vấn marketing với chuyên gia Nguyễn Hoàng Minh',
      time: '03/05/2025 - 14:30',
    },
    {
      icon: <BsCashStack className="text-warning fs-5" />,
      title: 'Nhận lợi nhuận',
      description: 'Bạn đã nhận 1,750,000 VND lợi nhuận từ dự án Coffee Shop',
      time: '01/05/2025 - 08:00',
    },
  ]

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

              {/* Recent Projects */}
              <div className="row ">
                <div className="col-12">
                  <div className="card shadow-lg">
                    <div className="card-header d-flex align-items-center justify-content-between p-4 border-bottom">
                      <div className="mb-0">
                        <h5 className="mb-0 fw-bold text-dark">
                          Dự án gần đây
                        </h5>
                        <small className="text-muted">
                          Những dự án đầu tư mới nhất của bạn
                        </small>
                      </div>
                      <button className="btn btn-outline-primary rounded-pill px-4 py-2">
                        <i className="bi bi-list me-2"></i>
                        Xem tất cả
                      </button>
                    </div>
                    <div className="card-investment">
                      <div className="table-responsive modern-table">
                        <table className="table">
                          <thead>
                            <tr>
                              <th>
                                <i className="bi bi-folder me-2"></i>Tên dự án
                              </th>
                              <th>
                                <i className="bi bi-currency-dollar me-2"></i>Số
                                tiền đầu tư
                              </th>
                              <th>
                                <i className="bi bi-flag me-2"></i>Trạng thái
                              </th>
                              <th>
                                <i className="bi bi-calendar me-2"></i>Ngày đầu
                                tư
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
                                    Technology • AI Platform
                                  </small>
                                </div>
                              </td>
                              <td>
                                <span className="money-amount">
                                  500,000 VND
                                </span>
                              </td>
                              <td>
                                <span className="status-badge badge bg-success">
                                  <i className="bi bi-check-circle"></i>
                                  Thành công
                                </span>
                              </td>
                              <td>
                                <span className="date-info">15/06/2025</span>
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
                                    Green Energy Project
                                  </div>
                                  <small className="text-muted">
                                    Energy • Renewable
                                  </small>
                                </div>
                              </td>
                              <td>
                                <span className="money-amount">
                                  300,000 VND
                                </span>
                              </td>
                              <td>
                                <span className="status-badge badge bg-warning">
                                  <i className="bi bi-clock"></i>
                                  Đang chờ
                                </span>
                              </td>
                              <td>
                                <span className="date-info">10/06/2025</span>
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
                                    Smart City Development
                                  </div>
                                  <small className="text-muted">
                                    Infrastructure • Smart Tech
                                  </small>
                                </div>
                              </td>
                              <td>
                                <span className="money-amount">
                                  450,000 VND
                                </span>
                              </td>
                              <td>
                                <span className="status-badge badge bg-primary">
                                  <i className="bi bi-gear"></i>
                                  Đang tiến hành
                                </span>
                              </td>
                              <td>
                                <span className="date-info">05/06/2025</span>
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

              {/* Hot Projects */}
              <div className="row mt-5">
                <div className="col-12">
                  <h4 className="mb-3">Dự án nổi bật</h4>
                  <div className="d-flex flex-wrap justify-content-between justify-content-lg-between">
                    <div
                      className="card mb-4"
                      style={{ width: '100%', maxWidth: '18rem' }}
                    >
                      <img
                        src="https://ui-avatars.com/api/?name=AI+Platform&background=7042C1&color=fff&size=256"
                        className="card-img-top"
                        alt="Avatar"
                      />
                      <div className="card-body">
                        <div className="card-title">
                          Special title treatment
                        </div>
                        <p className="card-text">
                          With supporting text below as a natural lead-in to
                          additional content.
                        </p>
                        <a href="#" className="btn btn-primary">
                          Go somewhere
                        </a>
                      </div>
                    </div>

                    <div
                      className="card mb-4"
                      style={{ width: '100%', maxWidth: '18rem' }}
                    >
                      <img
                        src="https://ui-avatars.com/api/?name=AI+Platform&background=7042C1&color=fff&size=256"
                        className="card-img-top"
                        alt="Avatar"
                      />
                      <div className="card-body">
                        <div className="card-title">
                          Special title treatment
                        </div>
                        <p className="card-text">
                          With supporting text below as a natural lead-in to
                          additional content.
                        </p>
                        <a href="#" className="btn btn-primary">
                          Go somewhere
                        </a>
                      </div>
                    </div>

                    <div
                      className="card mb-4"
                      style={{ width: '100%', maxWidth: '18rem' }}
                    >
                      <img
                        src="https://ui-avatars.com/api/?name=AI+Platform&background=7042C1&color=fff&size=256"
                        className="card-img-top"
                        alt="Avatar"
                      />
                      <div className="card-body">
                        <div className="card-title">
                          Special title treatment
                        </div>
                        <p className="card-text">
                          With supporting text below as a natural lead-in to
                          additional content.
                        </p>
                        <a href="#" className="btn btn-primary">
                          Go somewhere
                        </a>
                      </div>
                    </div>

                    <div
                      className="card mb-4"
                      style={{ width: '100%', maxWidth: '18rem' }}
                    >
                      <img
                        src="https://ui-avatars.com/api/?name=AI+Platform&background=7042C1&color=fff&size=256"
                        className="card-img-top"
                        alt="Avatar"
                      />
                      <div className="card-body">
                        <div className="card-title">
                          Special title treatment
                        </div>
                        <p className="card-text">
                          With supporting text below as a natural lead-in to
                          additional content.
                        </p>
                        <a href="#" className="btn btn-primary">
                          Go somewhere
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div className="card p-2 mt-3">
                <div className="fw-bold mb-4">Hoạt động gần đây</div>
                <div className="timeline-container">
                  {/* Đường dọc timeline */}
                  <div className="timeline-line"></div>

                  {activities.map((act, index) => (
                    <div className="timeline-item d-flex mb-4" key={index}>
                      {/* Icon container */}
                      <div className="timeline-icon-container">
                        <div className="timeline-icon">{act.icon}</div>
                      </div>

                      {/* Nội dung */}
                      <div className="timeline-content ms-3 ms-md-4">
                        <h6 className="fw-bold mb-1">{act.title}</h6>
                        <p className="mb-1">{act.description}</p>
                        <small className="text-muted">{act.time}</small>
                      </div>
                    </div>
                  ))}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </>
  )
}
export default DashboardMenu
