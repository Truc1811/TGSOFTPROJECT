import React from 'react'
import 'bootstrap/dist/css/bootstrap.min.css'
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome'
import {
  faMoneyBillWave,
  faCheckCircle,
} from '@fortawesome/free-solid-svg-icons'

const CreateCampaign = () => {
  return (
    <>
      <div className="container-fluid mt-3 p-4">
        {/* Hot Projects */}
        <div className="row mt-5 p-2">
          <div className="col-12">
            <div
              className="d-flex justify-content-between align-items-center p-5"
              style={{ backgroundColor: '#7B2CBF' }}
            >
              <div className=" col-12 col-md-5 fs-1 text-white fw-bold">
                TẠO CHIẾN DỊCH GỌI VỐN
              </div>
              <div className=" col-12 col-md-7 fs-4 text-white">
                Chọn loại hình gọi vốn phù hợp với dự án của bạn. Mỗi hình thức
                có những ưu điểm và yêu cầu khác nhau.
              </div>
            </div>
            <div className="d-flex flex-nowrap justify-content-between justify-content-lg-between gap-3 mt-5 ">
              <div className="card text-center p-3" style={{ width: '30rem' }}>
                <FontAwesomeIcon
                  icon={faMoneyBillWave}
                  size="2x"
                  color="green"
                />
                <div className="fs-3 fw-bold">Vay vốn</div>
                <div class="text-secondary">
                  Vay tiền từ cộng đồng với lãi suất cố định. Không mất quyền sở
                  hữu dự án.
                </div>
                <div class="mt-3 d-flex align-items-center justify-content-center gap-1">
                  <FontAwesomeIcon
                    icon={faCheckCircle}
                    size="lg"
                    color="green"
                  />
                  <span className="ms-2">Lãi suất cạnh tranh</span>
                </div>
                <div class="mt-3 d-flex align-items-center justify-content-center gap-1">
                  <FontAwesomeIcon
                    icon={faCheckCircle}
                    size="lg"
                    color="green"
                  />
                  <span className="ms-2">Lãi suất cạnh tranh</span>
                </div>
                <div class="mt-3 d-flex align-items-center justify-content-center gap-1">
                  <FontAwesomeIcon
                    icon={faCheckCircle}
                    size="lg"
                    color="green"
                  />
                  <span className="ms-2">Lãi suất cạnh tranh</span>
                </div>
                <div class="card border-start border-5 border-primary-subtle ps-3 py-2">
                  <div className="text-secondary">Phù hợp cho</div>
                  <div class="fw-bold">SME có doanh thu ổn định</div>
                </div>
              </div>
              <div className="card text-center p-3" style={{ width: '30rem' }}>
                <FontAwesomeIcon
                  icon={faMoneyBillWave}
                  size="2x"
                  color="green"
                />
                <div className="fs-3 fw-bold">Vay vốn</div>
                <div class="text-secondary">
                  Vay tiền từ cộng đồng với lãi suất cố định. Không mất quyền sở
                  hữu dự án.
                </div>
                <div class="mt-3 d-flex align-items-center justify-content-center gap-1">
                  <FontAwesomeIcon
                    icon={faCheckCircle}
                    size="lg"
                    color="green"
                  />
                  <span className="ms-2">Lãi suất cạnh tranh</span>
                </div>
                <div class="mt-3 d-flex align-items-center justify-content-center gap-1">
                  <FontAwesomeIcon
                    icon={faCheckCircle}
                    size="lg"
                    color="green"
                  />
                  <span className="ms-2">Lãi suất cạnh tranh</span>
                </div>
                <div class="mt-3 d-flex align-items-center justify-content-center gap-1">
                  <FontAwesomeIcon
                    icon={faCheckCircle}
                    size="lg"
                    color="green"
                  />
                  <span className="ms-2">Lãi suất cạnh tranh</span>
                </div>
                <div class="card border-start border-5 border-primary-subtle ps-3 py-2">
                  <div className="text-secondary">Phù hợp cho</div>
                  <div class="fw-bold">SME có doanh thu ổn định</div>
                </div>
              </div>
              <div className="card text-center p-3" style={{ width: '30rem' }}>
                <FontAwesomeIcon
                  icon={faMoneyBillWave}
                  size="2x"
                  color="green"
                />
                <div className="fs-3 fw-bold">Vay vốn</div>
                <div class="text-secondary">
                  Vay tiền từ cộng đồng với lãi suất cố định. Không mất quyền sở
                  hữu dự án.
                </div>
                <div class="mt-3 d-flex align-items-center justify-content-center gap-1">
                  <FontAwesomeIcon
                    icon={faCheckCircle}
                    size="lg"
                    color="green"
                  />
                  <span className="ms-2">Lãi suất cạnh tranh</span>
                </div>
                <div class="mt-3 d-flex align-items-center justify-content-center gap-1">
                  <FontAwesomeIcon
                    icon={faCheckCircle}
                    size="lg"
                    color="green"
                  />
                  <span className="ms-2">Lãi suất cạnh tranh</span>
                </div>
                <div class="mt-3 d-flex align-items-center justify-content-center gap-1">
                  <FontAwesomeIcon
                    icon={faCheckCircle}
                    size="lg"
                    color="green"
                  />
                  <span className="ms-2">Lãi suất cạnh tranh</span>
                </div>
                <div class="card border-start border-5 border-primary-subtle ps-3 py-2">
                  <div className="text-secondary">Phù hợp cho</div>
                  <div class="fw-bold">SME có doanh thu ổn định</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </>
  )
}
export default CreateCampaign
