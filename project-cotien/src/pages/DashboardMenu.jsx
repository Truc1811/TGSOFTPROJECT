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
      <div className="container-fluid">
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
                      <i className="bi bi-people fs-1"></i>
                    </div>
                    <div>
                      <div className="card-title">Khách hàng</div>
                      <div className="card-text">342</div>
                    </div>
                    <div>
                      <span className="badge bg-info">+12</span>
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

            {/* Recent Projects */}
            <div className="row ">
              <div className="col-12">
                <div className="card shadow-lg">
                  <div className="card-header fs-5 text-black fw-bold d-flex align-items-center justify-content-between">
                    <p>Dự án gần đây</p>
                    <button className="border  border-info-subtle  rounded-5  py-2 px-3 text-primary fw-bold">
                      Xem tất cả
                    </button>
                  </div>
                  <div className="card-investment">
                    <div className="table-responsive">
                      <table className="table ">
                        <thead>
                          <tr>
                            <th>Tên dự án</th>
                            <th>Số tiền đầu tư</th>
                            <th>Trạng thái</th>
                            <th>Ngày đầu tư</th>
                            <th>Thao tác</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Dự án A</td>
                            <td>500,000 VND</td>
                            <td>
                              <span className="badge bg-success">
                                Thành công
                              </span>
                            </td>
                            <td>15/06/2025</td>
                            <td>
                              <button className="border border-info-subtle rounded-5 py-2 px-3 text-primary fw-bold">
                                Xem
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>Dự án B</td>
                            <td>300,000 VND</td>
                            <td>
                              <span className="badge bg-warning">Đang chờ</span>
                            </td>
                            <td>10/06/2025</td>
                            <td>
                              <button className="border border-info-subtle rounded-5 py-2 px-3 text-primary fw-bold">
                                Xem
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>Dự án C</td>
                            <td>450,000 VND</td>
                            <td>
                              <span className="badge bg-primary">
                                Đang tiến hành
                              </span>
                            </td>
                            <td>05/06/2025</td>
                            <td>
                              <button className="border border-info-subtle rounded-5 py-2 px-3 text-primary fw-bold">
                                Xem
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
                <div className="d-flex flex-wrap justify-content-between ">
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
                      <div className="card-title">Special title treatment</div>
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
                      <div className="card-title">Special title treatment</div>
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
                      <div className="card-title">Special title treatment</div>
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
                      <div className="card-title">Special title treatment</div>
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

            <div className="card p-4 mt-3">
              <div className="fw-bold mb-4">Hoạt động gần đây</div>
              <div className="position-relative ps-4 ms-1">
                {/* Đường dọc timeline */}
                <div
                  className="position-absolute top-0 start-0 bottom-0 bg-secondary"
                  style={{ width: '2px', left: '12px', zIndex: 0 }}
                ></div>

                {activities.map((act, index) => (
                  <div className="d-flex position-relative mb-4" key={index}>
                    {/* Dot & Icon (nằm giữa đường) */}
                    <div
                      className="position-absolute bg-white  d-flex align-items-center justify-content-center"
                      style={{
                        width: '24px',
                        height: '24px',
                        left: '-35px', // canh giữa đường dọc 2px
                        zIndex: 1,
                      }}
                    >
                      {act.icon}
                    </div>

                    {/* Nội dung */}
                    <div className="ms-5">
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
    </>
  )
}
export default DashboardMenu
