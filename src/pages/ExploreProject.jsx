import React from 'react'
import 'bootstrap/dist/css/bootstrap.min.css'
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome'
import {
  faTag,
  faHeart,
  faEye,
  faSearch,
} from '@fortawesome/free-solid-svg-icons'
import { useState } from 'react'
import './ExploreProject.css' // Assuming you have a CSS file for styles

const ExploreProject = () => {
  const [active, setActive] = useState('Tất cả')
  return (
    <div className="container-fluid mt-3 p-4">
      <div className="row mt-5 p-2 text-center">
        <div className="col-12">
          <div className=" p-5" style={{ backgroundColor: '#7B2CBF' }}>
            <div className=" col-12  fs-1 text-white fw-bold">
              Khám phá các dự án đầu tư tiềm năng
            </div>
            <div className=" col-12  fs-3 text-white fw-bold">
              Tìm kiếm và tìm hiểu về những dự án startup và SME được tuyển chọn
              kỹ lưỡng trên nền tảng Cotien
            </div>
            <div className="d-flex justify-content-center align-items-center mt-3">
              <div
                className="col-12 text-white fw-bold w-100 w-md-75 d-flex flex-wrap align-items-center text-center"
                style={{
                  backgroundColor: 'rgba(255, 255, 255, 0.6)',
                  borderRadius: '20px',
                  padding: '20px',
                  color: '#333',
                }}
              >
                {/* Ô tìm kiếm và nút */}
                <div className="row mb-3 w-100 g-2 justify-content-center">
                  <div className="col-12 col-md-6">
                    <input
                      type="email"
                      className="form-control"
                      id="email"
                      placeholder="Nhập tìm kiếm dự án"
                    />
                  </div>
                  <div className="col-12 col-md-3">
                    <button
                      className="w-100 fw-bold d-flex align-items-center justify-content-center text-white"
                      style={{
                        backgroundImage:
                          'linear-gradient(to right, #7B2CBF, #00FF88)',
                        borderRadius: '20px',
                        padding: '8px 15px',
                        border: 'none',
                      }}
                    >
                      <FontAwesomeIcon icon={faSearch} />
                      <span className="ms-2">Tìm kiếm</span>
                    </button>
                  </div>
                </div>

                {/* Bộ lọc */}
                <div className="w-100">
                  <div className="d-flex flex-wrap justify-content-center align-items-center gap-2 px-2">
                    {['Tất cả', 'Vay vốn', 'Cổ phần'].map((item) => (
                      <span
                        key={item}
                        className={`bandage ${active === item ? 'active' : ''}`}
                        onClick={() => setActive(item)}
                      >
                        {item}
                      </span>
                    ))}
                  </div>
                </div>
              </div>
            </div>
          </div>
          {/* Hot Projects */}
          <div className="mt-5 p-2">
            <div className="col-12">
              <div className="row d-flex flex-wrap justify-content-between gap-1 mt-5 ">
                <div className="card" style={{ width: '23rem' }}>
                  <div style={{ position: 'relative', overflow: 'hidden' }}>
                    <img
                      src="https://images.unsplash.com/photo-1560472355-536de3962603?w=400&h=200&fit=crop"
                      alt="project"
                      style={{
                        width: '100%',
                        height: 'auto',
                        display: 'block',
                        borderTopLeftRadius: '0.25rem',
                        borderTopRightRadius: '0.25rem',
                      }}
                    />

                    <div
                      className="badge text-uppercase fw-bold"
                      style={{
                        position: 'absolute',
                        top: '10px',
                        left: '10px',
                        backgroundColor: '#E0EDFF',
                        color: '#0066FF',
                        padding: '5px 10px',
                        borderRadius: '20px',
                      }}
                    >
                      CỔ PHẦN
                    </div>
                    <div
                      style={{
                        position: 'absolute',
                        top: '10px',
                        right: '10px',
                        display: 'flex',
                        gap: '10px',
                        backgroundColor: 'rgba(0,0,0,0.6)',
                        borderRadius: '20px',
                        padding: '5px 10px',
                        color: 'white',
                        fontSize: '13px',
                      }}
                    >
                      <span>
                        <FontAwesomeIcon icon={faEye} className="me-1" />
                        1.5k
                      </span>
                      <span>
                        <FontAwesomeIcon icon={faHeart} className="me-1" />
                        67
                      </span>
                    </div>
                  </div>

                  <div className="d-flex justify-content-between  align-items-center gap-4 p-3">
                    <div class="fw-bold fs-6">AI Platform cho Doanh nghiệp</div>
                    <div class="d-flex justify-content-end align-items-center gap-2 flex-nowrap">
                      <span
                        style={{
                          borderRadius: '50%',
                          backgroundColor: '#7B2CBF',
                          width: '30px',
                          height: '30px',
                          color: 'white',
                          display: 'inline-flex',
                          padding: '5px',
                          alignItems: 'center',
                          justifyContent: 'center',
                          fontWeight: 'bold',
                        }}
                      >
                        TV
                      </span>
                      <div className="text-secondary">Trần Văn B</div>
                    </div>
                  </div>

                  <div className="d-flex justify-content-between  align-items-center gap-4 p-3">
                    <div class="text-secondary">
                      Nền tảng AI giúp doanh nghiệp tự động hóa quy trình kinh
                      doanh và tăng hiệu quả vận hành. Sử dụng machine
                    </div>
                  </div>

                  <div className="d-flex justify-content-between  align-items-center gap-4 p-3">
                    <div class="fw-bold ">1,250,000,000 VND</div>
                    <div class="text-success fw-bold">62%</div>
                  </div>
                  <div className="p-3">
                    <div className="progress" style={{ height: '20px' }}>
                      <div
                        className="progress-bar bg-success"
                        role="progressbar"
                        style={{ width: '62%' }}
                      >
                        62%
                      </div>
                    </div>
                  </div>

                  <div className="p-3">
                    <button
                      className="text-white fw-bold"
                      style={{
                        backgroundImage:
                          'linear-gradient(to right, #7B2CBF, #00FF88)',
                        borderRadius: '20px',
                        padding: '5px 10px',
                      }}
                    >
                      Xem chi tiết
                    </button>
                    <button
                      className="fw-bold"
                      style={{
                        color: '#7B2CBF',
                        border: '2px solid #7B2CBF',
                        borderRadius: '20px',
                        padding: '3px 10px',
                      }}
                    >
                      <FontAwesomeIcon
                        icon={faTag}
                        color="purple"
                        className="me-2"
                      />
                      Lưu
                    </button>
                  </div>
                </div>

                <div className="card mt-2" style={{ width: '23rem' }}>
                  <div style={{ position: 'relative', overflow: 'hidden' }}>
                    <img
                      className="p-0"
                      src="https://images.unsplash.com/photo-1560472355-536de3962603?w=400&h=200&fit=crop"
                    ></img>

                    <div
                      className="badge text-uppercase fw-bold"
                      style={{
                        position: 'absolute',
                        top: '10px',
                        left: '10px',
                        backgroundColor: '#E0EDFF',
                        color: '#0066FF',
                        padding: '5px 10px',
                        borderRadius: '20px',
                      }}
                    >
                      CỔ PHẦN
                    </div>
                    <div
                      style={{
                        position: 'absolute',
                        top: '10px',
                        right: '10px',
                        display: 'flex',
                        gap: '10px',
                        backgroundColor: 'rgba(0,0,0,0.6)',
                        borderRadius: '20px',
                        padding: '5px 10px',
                        color: 'white',
                        fontSize: '13px',
                      }}
                    >
                      <span>
                        <FontAwesomeIcon icon={faEye} className="me-1" />
                        1.5k
                      </span>
                      <span>
                        <FontAwesomeIcon icon={faHeart} className="me-1" />
                        67
                      </span>
                    </div>
                  </div>

                  <div className="d-flex justify-content-between  align-items-center gap-4 p-3">
                    <div class="fw-bold fs-6">AI Platform cho Doanh nghiệp</div>
                    <div class="d-flex justify-content-end align-items-center gap-2 flex-nowrap">
                      <span
                        style={{
                          borderRadius: '50%',
                          backgroundColor: '#7B2CBF',
                          width: '30px',
                          height: '30px',
                          color: 'white',
                          display: 'inline-flex',
                          padding: '5px',
                          alignItems: 'center',
                          justifyContent: 'center',
                          fontWeight: 'bold',
                        }}
                      >
                        TV
                      </span>
                      <div className="text-secondary">Trần Văn B</div>
                    </div>
                  </div>

                  <div className="d-flex justify-content-between  align-items-center gap-4 p-3">
                    <div class="text-secondary">
                      Nền tảng AI giúp doanh nghiệp tự động hóa quy trình kinh
                      doanh và tăng hiệu quả vận hành. Sử dụng machine
                    </div>
                  </div>

                  <div className="d-flex justify-content-between  align-items-center gap-4 p-3">
                    <div class="fw-bold ">1,250,000,000 VND</div>
                    <div class="text-success fw-bold">62%</div>
                  </div>
                  <div className="p-3">
                    <div className="progress" style={{ height: '20px' }}>
                      <div
                        className="progress-bar bg-success"
                        role="progressbar"
                        style={{ width: '62%' }}
                      >
                        62%
                      </div>
                    </div>
                  </div>

                  <div className="p-3">
                    <button
                      className="text-white fw-bold"
                      style={{
                        backgroundImage:
                          'linear-gradient(to right, #7B2CBF, #00FF88)',
                        borderRadius: '20px',
                        padding: '5px 10px',
                      }}
                    >
                      Xem chi tiết
                    </button>
                    <button
                      className="fw-bold"
                      style={{
                        color: '#7B2CBF',
                        border: '2px solid #7B2CBF',
                        borderRadius: '20px',
                        padding: '3px 10px',
                      }}
                    >
                      <FontAwesomeIcon
                        icon={faTag}
                        color="purple"
                        className="me-2"
                      />
                      Lưu
                    </button>
                  </div>
                </div>

                <div className="card mt-2" style={{ width: '23rem' }}>
                  <div style={{ position: 'relative', overflow: 'hidden' }}>
                    <img
                      className="p-0"
                      src="https://images.unsplash.com/photo-1560472355-536de3962603?w=400&h=200&fit=crop"
                    ></img>

                    <div
                      className="badge text-uppercase fw-bold"
                      style={{
                        position: 'absolute',
                        top: '10px',
                        left: '10px',
                        backgroundColor: '#E0EDFF',
                        color: '#0066FF',
                        padding: '5px 10px',
                        borderRadius: '20px',
                      }}
                    >
                      CỔ PHẦN
                    </div>
                    <div
                      style={{
                        position: 'absolute',
                        top: '10px',
                        right: '10px',
                        display: 'flex',
                        gap: '10px',
                        backgroundColor: 'rgba(0,0,0,0.6)',
                        borderRadius: '20px',
                        padding: '5px 10px',
                        color: 'white',
                        fontSize: '13px',
                      }}
                    >
                      <span>
                        <FontAwesomeIcon icon={faEye} className="me-1" />
                        1.5k
                      </span>
                      <span>
                        <FontAwesomeIcon icon={faHeart} className="me-1" />
                        67
                      </span>
                    </div>
                  </div>

                  <div className="d-flex justify-content-between  align-items-center gap-4 p-3">
                    <div class="fw-bold fs-6">AI Platform cho Doanh nghiệp</div>
                    <div class="d-flex justify-content-end align-items-center gap-2 flex-nowrap">
                      <span
                        style={{
                          borderRadius: '50%',
                          backgroundColor: '#7B2CBF',
                          width: '30px',
                          height: '30px',
                          color: 'white',
                          display: 'inline-flex',
                          padding: '5px',
                          alignItems: 'center',
                          justifyContent: 'center',
                          fontWeight: 'bold',
                        }}
                      >
                        TV
                      </span>
                      <div className="text-secondary">Trần Văn B</div>
                    </div>
                  </div>

                  <div className="d-flex justify-content-between  align-items-center gap-4 p-3">
                    <div class="text-secondary">
                      Nền tảng AI giúp doanh nghiệp tự động hóa quy trình kinh
                      doanh và tăng hiệu quả vận hành. Sử dụng machine
                    </div>
                  </div>

                  <div className="d-flex justify-content-between  align-items-center gap-4 p-3">
                    <div class="fw-bold ">1,250,000,000 VND</div>
                    <div class="text-success fw-bold">62%</div>
                  </div>
                  <div className="p-3">
                    <div className="progress" style={{ height: '20px' }}>
                      <div
                        className="progress-bar bg-success"
                        role="progressbar"
                        style={{ width: '62%' }}
                      >
                        62%
                      </div>
                    </div>
                  </div>

                  <div className="p-3">
                    <button
                      className="text-white fw-bold"
                      style={{
                        backgroundImage:
                          'linear-gradient(to right, #7B2CBF, #00FF88)',
                        borderRadius: '20px',
                        padding: '5px 10px',
                      }}
                    >
                      Xem chi tiết
                    </button>
                    <button
                      className="fw-bold"
                      style={{
                        color: '#7B2CBF',
                        border: '2px solid #7B2CBF',
                        borderRadius: '20px',
                        padding: '3px 10px',
                      }}
                    >
                      <FontAwesomeIcon
                        icon={faTag}
                        color="purple"
                        className="me-2"
                      />
                      Lưu
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  )
}

export default ExploreProject
