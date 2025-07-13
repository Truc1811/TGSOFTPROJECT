import React from 'react'
import './CategoryList.css'
function LoanList() {
  return (
    <>
      <div className="category-list">
        <div className="category-item">
          <ul className="p-0 m-0">
            <li>
              <li>
                <i class="bi bi-chevron-right"></i>
                <span>1.Thẩm định </span>
              </li>
            </li>
            <li>
              <li>
                <i class="bi bi-chevron-right"></i>
                <span>2.Phê duyệt</span>
              </li>
            </li>
            <li>
              <li>
                <i class="bi bi-chevron-right"></i>
                <span>3.Gửi điều khoản</span>
              </li>
            </li>
            <li>
              <li>
                <i class="bi bi-chevron-right"></i>
                <span>4.Gọi vốn</span>
              </li>
            </li>
            <li>
              <li>
                <i class="bi bi-chevron-right"></i>
                <span>5.Gửi hợp đồng</span>
              </li>
            </li>
            <li>
              <li>
                <i class="bi bi-chevron-right"></i>
                <span>6.Khoản vay đã giải ngân </span>
              </li>
            </li>
            <li>
              <li>
                <i class="bi bi-chevron-right"></i>
                <span>Khoản vay bị từ chối</span>
              </li>
            </li>
            <li>
              <li>
                <i class="bi bi-chevron-right"></i>
                <span>Khoản vay khách hàng bị từ chối</span>
              </li>
            </li>
            <li>
              <li>
                <i class="bi bi-chevron-right"></i>
                <span>Khoản vay yêu cầu xem xét lại</span>
              </li>
            </li>
            <li>
              <li>
                <i class="bi bi-chevron-right"></i>
                <span>Khoản vay đã thanh lý</span>
              </li>
            </li>
            <li>
              <li>
                <i class="bi bi-chevron-right"></i>
                <span>Khoản vay chờ huy động vốn</span>
              </li>
            </li>
          </ul>
        </div>
      </div>
    </>
  )
}

export default LoanList
